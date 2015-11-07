<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FinancialStatement Controller
 *
 * @property \App\Model\Table\FinancialStatementTable $FinancialStatement
 */
class FinancialStatementController extends AppController
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
        if ($right->fitur3 == 'none')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $this->set('financialStatement', $this->paginate($this->FinancialStatement));
            $this->set('_serialize', ['financialStatement']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Financial Statement id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur3 == 'none')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $financialStatement = $this->FinancialStatement->get($id, [
                'contain' => []
            ]);
            $this->set('financialStatement', $financialStatement);
            $this->set('_serialize', ['financialStatement']);
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
        if ($right->fitur3 !== 'write')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $financialStatement = $this->FinancialStatement->newEntity();
            if ($this->request->is('post')) {
                $financialStatement = $this->FinancialStatement->patchEntity($financialStatement, $this->request->data);
                if ($this->FinancialStatement->save($financialStatement)) {
                    $this->Flash->success(__('The financial statement has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The financial statement could not be saved. Please, try again.'));
                }
            }
            $this->set(compact('financialStatement'));
            $this->set('_serialize', ['financialStatement']);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Financial Statement id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur3 !== 'write')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $financialStatement = $this->FinancialStatement->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $financialStatement = $this->FinancialStatement->patchEntity($financialStatement, $this->request->data);
                if ($this->FinancialStatement->save($financialStatement)) {
                    $this->Flash->success(__('The financial statement has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The financial statement could not be saved. Please, try again.'));
                }
            }
            $this->set(compact('financialStatement'));
            $this->set('_serialize', ['financialStatement']);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Financial Statement id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $right = $right = $this->loadModel('UserRights')->get($this->Auth->user('id'), [
            'contain' => []
        ]);
        if ($right->fitur3 !== 'write')
        {
            return $this->redirect('/pages/accessdenied');
        }
        else
        {
            $this->request->allowMethod(['post', 'delete']);
            $financialStatement = $this->FinancialStatement->get($id);
            if ($this->FinancialStatement->delete($financialStatement)) {
                $this->Flash->success(__('The financial statement has been deleted.'));
            } else {
                $this->Flash->error(__('The financial statement could not be deleted. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }
    }
}
