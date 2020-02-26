<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
    public function insertardatabd(){

        $infoCorreos = file_get_contents($this->Auth->user()['username'].".json");
        //FormatoJson
        $varCorreo = json_decode($infoCorreos,true);
        //Cedula
        $currentTimeinSeconds = time();  
        
        // converts the time in seconds to current date  
        $currentDate = date('Y/m/d', $currentTimeinSeconds); 

		//Agregamos las tareas del usuario
        $i=0;
        
        
        $arrayC = array();
        foreach ($varCorreo['correos'] as $item) {
        	array_push($arrayC,$item['email']);
        }
        
        
        $UserTests = TableRegistry::get('user_tests');
        $userTest = $UserTests->newEntity();
        $lista= $UserTests->find();
        $arrayT = array();
        $i=0;
        foreach($lista as $item) {
            $arrayT[$i]=$item['id_user_test'];
            $i=$i+1;
        }   
        $id=0;
        if(sizeof($arrayT)==0){
            $id=1;
        }else{
            $id = $arrayT[sizeof($arrayT) -1]+1;
        }
        $userTest->id_user_test=$id;
        
        $query = $UserTests->query();
        $query->insert(['id_user_test', 'url_page','max_date','id_test','username '])
        ->values([
            'id_user_test' => $id,
            'url_page' => $_GET['url'],
            'max_date' =>$_GET['max_date'],
            'id_test'=>$_GET['id_test'],
            'username '=>$this->Auth->user()['username']
        ])
        ->execute();


/*
        $arrayUt= $UserTests->find();
        $ultimoUserTest=sizeof($arrayUt);
        $id_userTest=0;
        if($ultimoUserTest==0){
            $id_userTest=1;
        }else{
            $id_userTest=$arrayUt[$ultimoUserTest-1]->id_user_test +1;
        }
*/
      

/*
        $ut = TableRegistry::get('user_tests');
        $arrayUt= $ut->find();
        //$id = $arrayUTests[$max-1]->id_test;//ultimo registro, que es el que guardamos
        for ($i=0; $i <1 ; $i++) { 
            $evaluations = TableRegistry::get('evaluations');
            $evaluation = $evaluations->newEntity();
            $evaluation->email="quemado";
            $evaluation->token="token";
            $evaluation->state=false;
            $evaluation->email="null";
            $evaluation->location="null";
            $evaluation->date=$currentDate;
            $evaluation->id_user_test=1;
            $evaluations->save($evaluation);

        }

       */


    }
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
