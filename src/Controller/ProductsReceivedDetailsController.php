<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsReceivedDetails Controller
 *
 * @method \App\Model\Entity\ProductsReceivedDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsReceivedDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productsReceivedDetails = $this->paginate($this->ProductsReceivedDetails);

        $this->set(compact('productsReceivedDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Products Received Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsReceivedDetail = $this->ProductsReceivedDetails->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productsReceivedDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsReceivedDetail = $this->ProductsReceivedDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsReceivedDetail = $this->ProductsReceivedDetails->patchEntity($productsReceivedDetail, $this->request->getData());
            if ($this->ProductsReceivedDetails->save($productsReceivedDetail)) {
                $this->Flash->success(__('The products received detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products received detail could not be saved. Please, try again.'));
        }
        $this->set(compact('productsReceivedDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Received Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsReceivedDetail = $this->ProductsReceivedDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsReceivedDetail = $this->ProductsReceivedDetails->patchEntity($productsReceivedDetail, $this->request->getData());
            if ($this->ProductsReceivedDetails->save($productsReceivedDetail)) {
                $this->Flash->success(__('The products received detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products received detail could not be saved. Please, try again.'));
        }
        $this->set(compact('productsReceivedDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Received Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsReceivedDetail = $this->ProductsReceivedDetails->get($id);
        if ($this->ProductsReceivedDetails->delete($productsReceivedDetail)) {
            $this->Flash->success(__('The products received detail has been deleted.'));
        } else {
            $this->Flash->error(__('The products received detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
