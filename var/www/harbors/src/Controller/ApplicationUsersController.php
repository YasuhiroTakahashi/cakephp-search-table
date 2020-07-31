<?php
declare(strict_types=1);

namespace App\Controller;

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
        if ($this->request->is('get')) {
            $contractor_name = $this->request->getQuery('contractor_name', '');
            $company = $this->request->getQuery('company', '');
            $application_status = $this->request->getQuery('application_status', '');
            $service_category = $this->request->getQuery('service_category', '');
            $inflow_route = $this->request->getQuery('inflow_route', '');
            $application_date = $this->request->getQuery('application_date', '');
            $start_date_use = $this->request->getQuery('start_date_use', '');
        }
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

        $search_form_data = compact(
            'contractor_name',
            'company',
            'application_status',
            'service_category',
            'inflow_route',
            'application_date',
            'start_date_use'
        );
        $this->paginate = [
            'limit' => 10,
            'order' => [
                'ApplicationUsers.created' => 'asc'
            ],
            'conditions' => $conditions   
        ];
        $applicationUsers = $this->paginate($this->ApplicationUsers);
        $this->loadModel('ApplicationStatuses');
        $applicationStatuses = $this->ApplicationStatuses->find();
        $this->loadModel('ServiceCategories');
        $serviceCategories = $this->ServiceCategories->find();
        $this->loadModel('InflowRoutes');
        $inflowRoutes = $this->InflowRoutes->find();
        $this->set(compact('applicationUsers', 'search_form_data', 'applicationStatuses', 'serviceCategories', 'inflowRoutes'));
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 10,
            'order' => [
                'ApplicationUsers.application_status' => 'asc'
            ]
        ];
        $applicationUsers = $this->paginate($this->ApplicationUsers);
        $this->loadModel('ApplicationStatuses');
        $applicationStatuses = $this->ApplicationStatuses->find();
        $this->loadModel('ServiceCategories');
        $serviceCategories = $this->ServiceCategories->find();
        $this->loadModel('InflowRoutes');
        $inflowRoutes = $this->InflowRoutes->find();
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
