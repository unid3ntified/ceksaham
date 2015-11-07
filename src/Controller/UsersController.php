<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur1 == 'none')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $this->set('users', $this->paginate($this->Users));
            $this->set('_serialize', ['users']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur1 == 'none')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $user = $this->Users->get($id, [
                'contain' => []
            ]);
            $right = $this->loadModel('UserRights')->get($id, [
                'contain' => []
            ]);
            $this->set('user', $user);
            $this->set('right', $right);
            $this->set('_serialize', ['user']);
        }
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        $right = $this->loadModel('UserRights')->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $right->user_id = $user->id;
                $right->fitur1 = 'none';
                $right->fitur2 = 'read';
                $right->fitur3 = 'read';
                $this->loadModel('UserRights')->save($right);
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur1 !== 'write')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $user = $this->Users->get($id, [
                'contain' => []
            ]);
            $userRight = $this->loadModel('UserRights')->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $userRight = $this->loadModel('UserRights')->patchEntity($userRight, $this->request->data);
                if ($this->loadModel('UserRights')->save($userRight)) {
                    $this->Flash->success(__('The user right has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The user right could not be saved. Please, try again.'));
                }
            }
            $users = $this->loadModel('UserRights')->Users->find('list', ['limit' => 200]);
            $this->set(compact('userRight', 'users'));
            $this->set(compact('user'));
            $this->set('_serialize', ['userRight']);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur1 !== 'write')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $this->request->allowMethod(['post', 'delete']);
            $user = $this->Users->get($id);
            if ($this->Users->delete($user)) {
                $this->Flash->success(__('The user has been deleted.'));
            } else {
                $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }

    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow(['add']);
    }
}
