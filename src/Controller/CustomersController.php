<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Http\Response;
/**
 * Customers Controller
 *
 * @property \App\Model\Table\CustomersTable $Customers
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
   
    public function index()
    {
        $customers = $this->paginate($this->Customers);

        $this->set(compact('customers'));
    }
    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id=null)
    {
        
        $customer = $this->Customers->get($id);
        $result = ['customer' =>$customer->toArray()];
        return $this->response->withType('application/json')->withStringBody(json_encode($result));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function list(){ 
        //$this->request->is('get');
         $customer = $this->Customers->find('all');
         $result = ['customer' => $customer->toArray()];
           return $this->response->withType('application/json')
    ->withStringBody(json_encode($result));
    }
    

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
   // public function capnhat($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }

    }
    public function add()
    {$customer = $this->Customers->newEmptyEntity();
        if ($this->request->is('post')) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            
                
                $result = $this->Customers->save($customer);
                
            } 
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        
        $this->set(compact('customer'));
    }
    public function addtest() {
        if ($this->request->is('post')) {
            /*$name = $this->request->data('name');
            $address = $this->request->data('address');
            $type = $this->require->data('type');
            $telephone = $this->request->data('telephone');
            $customer = $this->User->newEntity();
            $customer->name = $name;
            $customer->address = $address;
            $customer->telephone= $telephone;*/
            
            if ($this->Customer->save($customer)) {
                $this->response->statusCode(201);
                $this->set([
                    'message' => 'Customer created successfully',
                    'customer' => $customer,
                    '_serialize' => ['message', 'customer']
                ]);
            } else {
                $this->response->statusCode(400);
                $this->set([
                    'message' => 'Could not create customer',
                    '_serialize' => ['message']
                ]);
            }
 
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customers->get($id);
        if ($this->Customers->delete($customer)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
//if user wants to delete a record by a GET request ,allowMethod() method give an Exception as the only available request for deleting is POST or delete for Rest http request

}
