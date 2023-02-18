<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsReceivedNote Controller
 *
 * @property \App\Model\Table\ProductsReceivedNoteTable $ProductsReceivedNote
 * @method \App\Model\Entity\ProductsReceivedNote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsReceivedNoteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productsReceivedNote = $this->paginate($this->ProductsReceivedNote);

        $this->set(compact('productsReceivedNote'));
    }

    /**
     * View method
     *
     * @param string|null $id Products Received Note id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsReceivedNote = $this->ProductsReceivedNote->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productsReceivedNote'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsReceivedNote = $this->ProductsReceivedNote->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsReceivedNote = $this->ProductsReceivedNote->patchEntity($productsReceivedNote, $this->request->getData());
            if ($this->ProductsReceivedNote->save($productsReceivedNote)) {
                $this->Flash->success(__('The products received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products received note could not be saved. Please, try again.'));
        }
        $this->set(compact('productsReceivedNote'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Received Note id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsReceivedNote = $this->ProductsReceivedNote->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsReceivedNote = $this->ProductsReceivedNote->patchEntity($productsReceivedNote, $this->request->getData());
            if ($this->ProductsReceivedNote->save($productsReceivedNote)) {
                $this->Flash->success(__('The products received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products received note could not be saved. Please, try again.'));
        }
        $this->set(compact('productsReceivedNote'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Received Note id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsReceivedNote = $this->ProductsReceivedNote->get($id);
        if ($this->ProductsReceivedNote->delete($productsReceivedNote)) {
            $this->Flash->success(__('The products received note has been deleted.'));
        } else {
            $this->Flash->error(__('The products received note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
