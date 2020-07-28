<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * InflowRoutes Controller
 *
 * @property \App\Model\Table\InflowRoutesTable $InflowRoutes
 * @method \App\Model\Entity\InflowRoute[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InflowRoutesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $inflowRoutes = $this->paginate($this->InflowRoutes);

        $this->set(compact('inflowRoutes'));
    }

    /**
     * View method
     *
     * @param string|null $id Inflow Route id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inflowRoute = $this->InflowRoutes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('inflowRoute'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inflowRoute = $this->InflowRoutes->newEmptyEntity();
        if ($this->request->is('post')) {
            $inflowRoute = $this->InflowRoutes->patchEntity($inflowRoute, $this->request->getData());
            if ($this->InflowRoutes->save($inflowRoute)) {
                $this->Flash->success(__('The inflow route has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inflow route could not be saved. Please, try again.'));
        }
        $this->set(compact('inflowRoute'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inflow Route id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inflowRoute = $this->InflowRoutes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inflowRoute = $this->InflowRoutes->patchEntity($inflowRoute, $this->request->getData());
            if ($this->InflowRoutes->save($inflowRoute)) {
                $this->Flash->success(__('The inflow route has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inflow route could not be saved. Please, try again.'));
        }
        $this->set(compact('inflowRoute'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inflow Route id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inflowRoute = $this->InflowRoutes->get($id);
        if ($this->InflowRoutes->delete($inflowRoute)) {
            $this->Flash->success(__('The inflow route has been deleted.'));
        } else {
            $this->Flash->error(__('The inflow route could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
