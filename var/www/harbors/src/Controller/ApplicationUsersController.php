<?php
declare(strict_types=1);

namespace App\Controller;
use App\Form\SearchForm;
/**
 * ApplicationUsers Controller
 *
 * @property \App\Model\Table\ApplicationUsersTable $ApplicationUsers
 * @method \App\Model\Entity\ApplicationUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApplicationUsersController extends AppController
{
    /**
     * Search method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function search()
    {
        // POSTリクエストかチェック
        if ($this->request->is('post')) {
            $request = $this->request->getData();
            // クエリから、値を抽出する
            $contractor_name = $request['contractor_name'];
            $company = $request['company'];
            $application_status = $request['application_status'];
            $service_category = $request['service_category'];
            $inflow_route = $request['inflow_route'];
            $application_date = $request['application_date'];
            $start_date_use = $request['start_date_use'];
        }
        // 取得した内容が空文字でない場合、検索条件を追加
        $conditions = [];
        if ($contractor_name !== '') {
            $conditions[] = "ApplicationUsers.contractor_name like '%" . $contractor_name ."%'";
        }
        if ($company !== '') {
            $conditions[] = "ApplicationUsers.company like '%" . $company ."%'";
        }
        if ($application_status !== '') {
            $conditions[] = "ApplicationUsers.application_status = '" . $application_status ."'";
        }
        if ($service_category !== '') {
            $conditions[] = "ApplicationUsers.service_category = '" . $service_category ."'";
        }
        if ($inflow_route !== '') {
            $conditions[] = "ApplicationUsers.inflow_route like '%" . $inflow_route ."%'";
        }
        if ($application_date !== '') {
            $conditions[] = "ApplicationUsers.application_date like '%" . $application_date ."%'";
        }
        if ($start_date_use !== '') {
            $conditions[] = "ApplicationUsers.start_date_use like '%" . $start_date_use ."%'";
        }
        // view側で検索フォームにセットする用に配列にまとめる
        $search_form_data = compact(
            'contractor_name',
            'company',
            'application_status',
            'service_category',
            'inflow_route',
            'application_date',
            'start_date_use'
        );
        // ページネーションの設定
        $this->paginate = [
            'limit' => 10,
            'conditions' => $conditions   
        ];
        /* 
            基本SQLの準備
            １、application_statusesテーブルと結合させる
            ２、第一ソートをapplication_status_idの昇順で行う
            ３、第二ソートをapplication_dateの昇順で行う
        */
        $query = $this->ApplicationUsers->find()
            ->leftJoin(
                ['ApplicationStatuses' => 'application_statuses'],
                ['ApplicationStatuses.name = ApplicationUsers.application_status']
            )
            ->select([
                'id' => 'ApplicationUsers.id',
                'contractor_name' => 'ApplicationUsers.contractor_name',
                'company' => 'ApplicationUsers.company',
                'application_status' => 'ApplicationUsers.application_status',
                'service_category' => 'ApplicationUsers.service_category',
                'inflow_route' => 'ApplicationUsers.inflow_route',
                'application_date' => 'ApplicationUsers.application_date',
                'start_date_use' => 'ApplicationUsers.start_date_use',
                'application_status_id' => 'ApplicationStatuses.id',
            ])
            ->order(['application_status_id' => 'ASC'])
            ->order(['ApplicationUsers.application_date' => 'ASC']);
        // 申込情報を取得
        $applicationUsers = $this->paginate($query);

        //　検索条件に利用するデータを各テーブルより取得
        $this->loadModel('ApplicationStatuses');
        $applicationStatuses = $this->ApplicationStatuses->find();
        $this->loadModel('ServiceCategories');
        $serviceCategories = $this->ServiceCategories->find();
        $this->loadModel('InflowRoutes');
        $inflowRoutes = $this->InflowRoutes->find();

        // view側で利用するために、各値をセット
        $this->set(compact('applicationUsers', 'search_form_data', 'applicationStatuses', 'serviceCategories', 'inflowRoutes'));
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // ページネーションの設定
        $this->paginate = [
            'limit' => 10,
        ];
        /* 
            基本SQLの準備
            １、application_statusesテーブルと結合させる
            ２、第一ソートをapplication_status_idの昇順で行う
            ３、第二ソートをapplication_dateの昇順で行う
        */
        $query = $this->ApplicationUsers->find()
            ->leftJoin(
                ['ApplicationStatuses' => 'application_statuses'],
                ['ApplicationStatuses.name = ApplicationUsers.application_status']
            )
            ->select([
                'id' => 'ApplicationUsers.id',
                'contractor_name' => 'ApplicationUsers.contractor_name',
                'company' => 'ApplicationUsers.company',
                'application_status' => 'ApplicationUsers.application_status',
                'service_category' => 'ApplicationUsers.service_category',
                'inflow_route' => 'ApplicationUsers.inflow_route',
                'application_date' => 'ApplicationUsers.application_date',
                'start_date_use' => 'ApplicationUsers.start_date_use',
                'application_status_id' => 'ApplicationStatuses.id',
            ])
            ->order(['application_status_id' => 'ASC'])
            ->order(['ApplicationUsers.application_date' => 'ASC']);
        // 申込情報を取得
        $applicationUsers = $this->paginate($query);

         //　検索条件に利用するデータを各テーブルより取得
        $this->loadModel('ApplicationStatuses');
        $applicationStatuses = $this->ApplicationStatuses->find();
        $this->loadModel('ServiceCategories');
        $serviceCategories = $this->ServiceCategories->find();
        $this->loadModel('InflowRoutes');
        $inflowRoutes = $this->InflowRoutes->find();

        // view側で利用するために、各値をセット
        $this->set(compact('applicationUsers', 'applicationStatuses', 'serviceCategories', 'inflowRoutes'));
    }

    /**
     * View method
     *
     * @param string|null $id Application User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $applicationUser = $this->ApplicationUsers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('applicationUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $applicationUser = $this->ApplicationUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $applicationUser = $this->ApplicationUsers->patchEntity($applicationUser, $this->request->getData());
            if ($this->ApplicationUsers->save($applicationUser)) {
                $this->Flash->success(__('The application user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application user could not be saved. Please, try again.'));
        }
        $this->set(compact('applicationUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Application User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $applicationUser = $this->ApplicationUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $applicationUser = $this->ApplicationUsers->patchEntity($applicationUser, $this->request->getData());
            if ($this->ApplicationUsers->save($applicationUser)) {
                $this->Flash->success(__('The application user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application user could not be saved. Please, try again.'));
        }
        $this->set(compact('applicationUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Application User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $applicationUser = $this->ApplicationUsers->get($id);
        if ($this->ApplicationUsers->delete($applicationUser)) {
            $this->Flash->success(__('The application user has been deleted.'));
        } else {
            $this->Flash->error(__('The application user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
