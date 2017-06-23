<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 *
 * @method \App\Model\Entity\Addres[] paginate($object = null, array $settings = [])
 */
class AddressController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $address = $this->paginate($this->Address);

        $this->set(compact('address'));
        $this->set('_serialize', ['address']);
    }

    /**
     * View method
     *
     * @param string|null $id Addres id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addres = $this->Address->get($id, [
            'contain' => []
        ]);

        $this->set('addres', $addres);
        $this->set('_serialize', ['addres']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($controller,$id)
    {
        $addres = $this->Address->newEntity();
        if ($this->request->is('post')) {
            $addres = $this->Address->patchEntity($addres, $this->request->getData());
             ($controller=='cliente')?$addres['id_cliente'] =$id:$addres['id_fornecedor']=$id;             
            if ($this->Address->save($addres)) {
                $this->Flash->success(__('The addres has been saved.'));

                return $this->redirect(['controller'=>'Users','action' => 'add',$controller,$id]);
            }
            $this->Flash->error(__('The addres could not be saved. Please, try again.'));
        }
        $this->set(compact('addres'));
        $this->set('_serialize', ['addres']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Addres id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addres = $this->Address->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addres = $this->Address->patchEntity($addres, $this->request->getData());
            if ($this->Address->save($addres)) {
                $this->Flash->success(__('The addres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The addres could not be saved. Please, try again.'));
        }
        $this->set(compact('addres'));
        $this->set('_serialize', ['addres']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Addres id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addres = $this->Address->get($id);
        if ($this->Address->delete($addres)) {
            $this->Flash->success(__('The addres has been deleted.'));
        } else {
            $this->Flash->error(__('The addres could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(\Cake\Event\Event $event){
        $this->Auth->allow(['add']);
    }
}
