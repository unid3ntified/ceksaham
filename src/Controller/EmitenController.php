<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emiten Controller
 *
 * @property \App\Model\Table\EmitenTable $Emiten
 */
class EmitenController extends AppController
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
        if ($right->fitur2 == 'none')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $this->set('emiten', $this->paginate($this->Emiten));
            $this->set('_serialize', ['emiten']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Emiten id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur2 == 'none')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $emiten = $this->Emiten->get($id, [
                'contain' => []
            ]);
            $this->set('emiten', $emiten);
            $this->set('_serialize', ['emiten']);
        }
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur2 !== 'write')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $emiten = $this->Emiten->newEntity();
            if ($this->request->is('post')) {
                $emiten = $this->Emiten->patchEntity($emiten, $this->request->data);
                if ($this->Emiten->save($emiten)) {
                    $this->Flash->success(__('The emiten has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The emiten could not be saved. Please, try again.'));
                }
            }
            $this->set(compact('emiten'));
            $this->set('_serialize', ['emiten']);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Emiten id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur2 !== 'write')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $emiten = $this->Emiten->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $emiten = $this->Emiten->patchEntity($emiten, $this->request->data);
                if ($this->Emiten->save($emiten)) {
                    $this->Flash->success(__('The emiten has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The emiten could not be saved. Please, try again.'));
                }
            }
            $this->set(compact('emiten'));
            $this->set('_serialize', ['emiten']);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Emiten id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur2 !== 'write')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $this->request->allowMethod(['post', 'delete']);
            $emiten = $this->Emiten->get($id);
            if ($this->Emiten->delete($emiten)) {
                $this->Flash->success(__('The emiten has been deleted.'));
            } else {
                $this->Flash->error(__('The emiten could not be deleted. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }
    }
}
