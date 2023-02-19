<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsReceivedNotes Controller
 *
 * @method \App\Model\Entity\ProductsReceivedNote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsReceivedNotesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productsReceivedNotes = $this->paginate($this->ProductsReceivedNotes);

        $this->set(compact('productsReceivedNotes'));
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
        $productsReceivedNote = $this->ProductsReceivedNotes->get($id, [
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
        $productsReceivedNote = $this->ProductsReceivedNotes->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsReceivedNote = $this->ProductsReceivedNotes->patchEntity($productsReceivedNote, $this->request->getData());
            if ($this->ProductsReceivedNotes->save($productsReceivedNote)) {
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
        $productsReceivedNote = $this->ProductsReceivedNotes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsReceivedNote = $this->ProductsReceivedNotes->patchEntity($productsReceivedNote, $this->request->getData());
            if ($this->ProductsReceivedNotes->save($productsReceivedNote)) {
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
        $productsReceivedNote = $this->ProductsReceivedNotes->get($id);
        if ($this->ProductsReceivedNotes->delete($productsReceivedNote)) {
            $this->Flash->success(__('The products received note has been deleted.'));
        } else {
            $this->Flash->error(__('The products received note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
