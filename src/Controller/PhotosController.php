<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Photos Controller
 *
 * @property \App\Model\Table\PhotosTable $Photos
 *
 * @method \App\Model\Entity\Photo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PhotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['News']
        ];
        $photos = $this->paginate($this->Photos);

        $this->set(compact('photos'));
    }

    /**
     * View method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photo = $this->Photos->get($id, [
            'contain' => ['News', 'Pages', 'Banners']
        ]);

        $this->set('photo', $photo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photo = $this->Photos->newEntity();
        if ($this->request->is('post')) {
            $photo = $this->Photos->patchEntity($photo, $this->request->getData());
            if ($this->Photos->save($photo)) {
                $this->Flash->success(__('A foto foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A foto não pôde ser salva, tente novamente.'));
        }
        $news = $this->Photos->News->find('list', ['limit' => 200]);
        $pages = $this->Photos->Pages->find('list', ['limit' => 200]);
        $banners = $this->Photos->Banners->find('list', ['limit' => 200]);
        $this->set(compact('photo', 'news', 'pages', 'banners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photo = $this->Photos->get($id, [
            'contain' => ['Pages', 'Banners']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photo = $this->Photos->patchEntity($photo, $this->request->getData());
            if ($this->Photos->save($photo)) {
                $this->Flash->success(__('A foto foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A foto não pôde ser salva, tente novamente.'));
        }
        $news = $this->Photos->News->find('list', ['limit' => 200]);
        $pages = $this->Photos->Pages->find('list', ['limit' => 200]);
        $banners = $this->Photos->Banners->find('list', ['limit' => 200]);
        $this->set(compact('photo', 'news', 'pages', 'banners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photo = $this->Photos->get($id);
        if ($this->Photos->delete($photo)) {
            $this->Flash->success(__('A foto foi deletada.'));
        } else {
            $this->Flash->error(__('A foto não pôde ser deletada, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
