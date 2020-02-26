<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


/**
 * Tests Controller
 *
 * @property \App\Model\Table\TestsTable $Tests
 *
 * @method \App\Model\Entity\Test[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tests = $this->paginate($this->Tests);
        $this->set(compact('tests'));
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function agregarcorreos(){
        $tests = $this->paginate($this->Tests);
        $this->set(compact('tests'));

    }
    public function beforeFilter(Event $event) {
        parent:: beforeFilter($event);
        $this->Auth->allow(['actualizar']);
        $this->Auth->allow(['insertardatabd']);

        
    }
    public function actualizar(){
        
        $infoCorreos = file_get_contents($this->Auth->user()['username'].".json");
        //FormatoJson
        $varCorreo = json_decode($infoCorreos,true);
        //Cedula
		//Agregamos las tareas del usuario
        $i=0;
        $arrayC = array();

        foreach ($varCorreo['correos'] as $item) {
        	array_push($arrayC,$item['email']);
        }
        array_push($arrayC,$_GET['correo']);
        $len =sizeof($arrayC);
        $texto .="{\n\"correos\":[\n";
        for ($i=0; $i < $len; $i++) { 
            if($i ==($len-1)){
                $texto .="	{	\n	\"email\":\"".$arrayC[$i]."\"\n}";	
            }else{
                $texto .="	{	\n	\"email\":\"".$arrayC[$i]."\"\n},";	
            }
        }
        $texto .="]\n}";
        unlink($this->Auth->user()['username'].".json");

		$fh = fopen( $this->Auth->user()['username'].".json", 'w') or die("Se produjo un error al crear el archivo");
		fwrite($fh, $texto) or die("No se pudo escribir en el archivo");
		fclose($fh);
    }
    /**
     * View method
     *
     * @param string|null $id Test id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $test = $this->Tests->get($id, [
            'contain' => [],
        ]);

        $this->set('test', $test);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $test = $this->Tests->newEntity();
        if ($this->request->is('post')) {
            $test = $this->Tests->patchEntity($test, $this->request->getData());
            if ($this->Tests->save($test)) {
                $this->Flash->success(__('The test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test could not be saved. Please, try again.'));
        }
        $this->set(compact('test'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $test = $this->Tests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $test = $this->Tests->patchEntity($test, $this->request->getData());
            if ($this->Tests->save($test)) {
                $this->Flash->success(__('The test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test could not be saved. Please, try again.'));
        }
        $this->set(compact('test'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $test = $this->Tests->get($id);
        if ($this->Tests->delete($test)) {
            $this->Flash->success(__('The test has been deleted.'));
        } else {
            $this->Flash->error(__('The test could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Funcion que determina las autorizaciones de los usuarios en el Controlador
     */ 
    
    public function isAuthorized($user)
    {   
              
        if(isset($user['role']) && $user['role'] === 'investigador'){
                return true;        
        }
        // Default deny
        return parent::isAuthorized($user);
    }
}
