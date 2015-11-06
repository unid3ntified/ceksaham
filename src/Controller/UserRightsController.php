<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserRights Controller
 *
 * @property \App\Model\Table\UserRightsTable $UserRights
 */
class UserRightsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('userRights', $this->paginate($this->UserRights));
        $this->set('_serialize', ['userRights']);
    }

    /**
     * View method
     *
     * @param string|null $id User Right id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userRight = $this->UserRights->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('userRight', $userRight);
        $this->set('_serialize', ['userRight']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userRight = $this->UserRights->newEntity();
        if ($this->request->is('post')) {
            $userRight = $this->UserRights->patchEntity($userRight, $this->request->data);
            if ($this->UserRights->save($userRight)) {
                $this->Flash->success(__('The user right has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user right could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserRights->Users->find('list', ['limit' => 200]);
        $this->set(compact('userRight', 'users'));
        $this->set('_serialize', ['userRight']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Right id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userRight = $this->UserRights->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userRight = $this->UserRights->patchEntity($userRight, $this->request->data);
            if ($this->UserRights->save($userRight)) {
                $this->Flash->success(__('The user right has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user right could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserRights->Users->find('list', ['limit' => 200]);
        $this->set(compact('userRight', 'users'));
        $this->set('_serialize', ['userRight']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Right id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userRight = $this->UserRights->get($id);
        if ($this->UserRights->delete($userRight)) {
            $this->Flash->success(__('The user right has been deleted.'));
        } else {
            $this->Flash->error(__('The user right could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
