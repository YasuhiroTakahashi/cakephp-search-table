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
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $applicationUsers = $this->paginate($this->ApplicationUsers);

        $this->set(compact('applicationUsers'));
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
