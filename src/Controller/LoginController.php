<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Login Controller
 *
 * @property \App\Model\Table\LoginTable $Login
 *
 * @method \App\Model\Entity\Login[] paginate($object = null, array $settings = [])
 */
class LoginController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $login = $this->paginate($this->Login);

        $this->set(compact('login'));
        $this->set('_serialize', ['login']);
    }

    /**
     * View method
     *
     * @param string|null $id Login id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $login = $this->Login->get($id, [
            'contain' => []
        ]);

        $this->set('login', $login);
        $this->set('_serialize', ['login']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($controller,$id)
    {
        $login = $this->Login->newEntity();
        if ($this->request->is('post')) {
            $login = $this->Login->patchEntity($login, $this->request->getData());
            ($controller=='cliente')?$login['id_cliente'] =$id:$login['id_fornecedor']=$id;            
            $login['permissao']=($controller=='cliente')?1:2;
            if ($this->Login->save($login)) {
                $this->Flash->success(__('Login Criado com sucesso.'));

                return $this->redirect(['controller'=>'Login','action' => 'login']);
            }
            $this->Flash->error(__('Falha ao criar o login. Por favor, tente novamente.'));
        }
        $this->set(compact('login'));
        $this->set('_serialize', ['login']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Login id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $login = $this->Login->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $login = $this->Login->patchEntity($login, $this->request->getData());
            if ($this->Login->save($login)) {
                $this->Flash->success(__('The login has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The login could not be saved. Please, try again.'));
        }
        $this->set(compact('login'));
        $this->set('_serialize', ['login']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Login id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $login = $this->Login->get($id);
        if ($this->Login->delete($login)) {
            $this->Flash->success(__('The login has been deleted.'));
        } else {
            $this->Flash->error(__('The login could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login(){
        if ($this->request->is('post')) {
            $login = $_POST['usuario'];
            $password=$_POST['password'];
            $retorno=$this->find()->select(['usuario','password','permissao']);
            debug($retorno);exit;
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Usuario ou Senha invalidos');
               
        }
    }

    public function logout(){
        $this->Flash->success('Você se deslogou');
        return $this->redirect($this->Auth->logout());
    }

    public function beforeFilter(\Cake\Event\Event $event){
        $this->Auth->allow(['add','login']);
    }
}
