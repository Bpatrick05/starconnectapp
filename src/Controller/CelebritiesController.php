<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Celebrities Controller
 *
 *
 * @method \App\Model\Entity\Celebrity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CelebritiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $celebrities = $this->paginate($this->Celebrities);

        $this->set(compact('celebrities'));
    }

    /**
     * View method
     *
     * @param string|null $id Celebrity id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $celebrity = $this->Celebrities->get($id, [
            'contain' => [],
        ]);

        $this->set('celebrity', $celebrity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $celebrity = $this->Celebrities->newEmptyEntity();
        if ($this->request->is('post')) {
            $celebrity = $this->Celebrities->patchEntity($celebrity, $this->request->getData());
            if ($this->Celebrities->save($celebrity)) {
                $this->Flash->success(__('The celebrity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The celebrity could not be saved. Please, try again.'));
        }
        $this->set(compact('celebrity'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Celebrity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $celebrity = $this->Celebrities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $celebrity = $this->Celebrities->patchEntity($celebrity, $this->request->getData());
            if ($this->Celebrities->save($celebrity)) {
                $this->Flash->success(__('The celebrity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The celebrity could not be saved. Please, try again.'));
        }
        $this->set(compact('celebrity'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Celebrity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $celebrity = $this->Celebrities->get($id);
        if ($this->Celebrities->delete($celebrity)) {
            $this->Flash->success(__('The celebrity has been deleted.'));
        } else {
            $this->Flash->error(__('The celebrity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
