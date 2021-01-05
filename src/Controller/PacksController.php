<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Packs Controller
 *
 *
 * @method \App\Model\Entity\Pack[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PacksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $packs = $this->paginate($this->Packs);

        $this->set(compact('packs'));
    }

    /**
     * View method
     *
     * @param string|null $id Pack id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pack = $this->Packs->get($id, [
            'contain' => [],
        ]);

        $this->set('pack', $pack);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pack = $this->Packs->newEmptyEntity();
        if ($this->request->is('post')) {
            $pack = $this->Packs->patchEntity($pack, $this->request->getData());
            if ($this->Packs->save($pack)) {
                $this->Flash->success(__('The pack has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pack could not be saved. Please, try again.'));
        }
        $this->set(compact('pack'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pack id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pack = $this->Packs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pack = $this->Packs->patchEntity($pack, $this->request->getData());
            if ($this->Packs->save($pack)) {
                $this->Flash->success(__('The pack has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pack could not be saved. Please, try again.'));
        }
        $this->set(compact('pack'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pack id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pack = $this->Packs->get($id);
        if ($this->Packs->delete($pack)) {
            $this->Flash->success(__('The pack has been deleted.'));
        } else {
            $this->Flash->error(__('The pack could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
