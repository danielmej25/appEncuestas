<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserTests Controller
 *
 * @property \App\Model\Table\UserTestsTable $UserTests
 *
 * @method \App\Model\Entity\UserTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserTestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $userTests = $this->paginate($this->UserTests);

        $this->set(compact('userTests'));
    }

    /**
     * Funcion que determina las autorizaciones de los usuarios en el 
     * Controlador de userTest
     * 
     */ 
    
    public function isAuthorized($user)
    {
        // Default deny
        return parent::isAuthorized($user);
    }

    /**
     * View method
     *
     * @param string|null $id User Test id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userTest = $this->UserTests->get($id, [
            'contain' => [],
        ]);

        $this->set('userTest', $userTest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userTest = $this->UserTests->newEntity();
        if ($this->request->is('post')) {
            $userTest = $this->UserTests->patchEntity($userTest, $this->request->getData());
            if ($this->UserTests->save($userTest)) {
                $this->Flash->success(__('The user test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user test could not be saved. Please, try again.'));
        }
        $this->set(compact('userTest'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userTest = $this->UserTests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userTest = $this->UserTests->patchEntity($userTest, $this->request->getData());
            if ($this->UserTests->save($userTest)) {
                $this->Flash->success(__('The user test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user test could not be saved. Please, try again.'));
        }
        $this->set(compact('userTest'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userTest = $this->UserTests->get($id);
        if ($this->UserTests->delete($userTest)) {
            $this->Flash->success(__('The user test has been deleted.'));
        } else {
            $this->Flash->error(__('The user test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
