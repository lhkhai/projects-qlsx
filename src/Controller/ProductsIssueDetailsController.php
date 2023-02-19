<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsIssueDetails Controller
 *
 * @property \App\Model\Table\ProductsIssueDetailsTable $ProductsIssueDetails
 * @method \App\Model\Entity\ProductsIssueDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsIssueDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products'],
        ];
        $productsIssueDetails = $this->paginate($this->ProductsIssueDetails);

        $this->set(compact('productsIssueDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Products Issue Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsIssueDetail = $this->ProductsIssueDetails->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set(compact('productsIssueDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsIssueDetail = $this->ProductsIssueDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsIssueDetail = $this->ProductsIssueDetails->patchEntity($productsIssueDetail, $this->request->getData());
            if ($this->ProductsIssueDetails->save($productsIssueDetail)) {
                $this->Flash->success(__('The products issue detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products issue detail could not be saved. Please, try again.'));
        }
        $products = $this->ProductsIssueDetails->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productsIssueDetail', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Issue Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsIssueDetail = $this->ProductsIssueDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsIssueDetail = $this->ProductsIssueDetails->patchEntity($productsIssueDetail, $this->request->getData());
            if ($this->ProductsIssueDetails->save($productsIssueDetail)) {
                $this->Flash->success(__('The products issue detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products issue detail could not be saved. Please, try again.'));
        }
        $products = $this->ProductsIssueDetails->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productsIssueDetail', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Issue Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsIssueDetail = $this->ProductsIssueDetails->get($id);
        if ($this->ProductsIssueDetails->delete($productsIssueDetail)) {
            $this->Flash->success(__('The products issue detail has been deleted.'));
        } else {
            $this->Flash->error(__('The products issue detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
