<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VideosGallery Controller
 *
 * @property \App\Model\Table\VideosGalleryTable $VideosGallery
 *
 * @method \App\Model\Entity\VideosGallery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VideosGalleryController extends AppController
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
        $videosGallery = $this->paginate($this->VideosGallery);

        $this->set(compact('videosGallery'));
    }

    /**
     * View method
     *
     * @param string|null $id Videos Gallery id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $videosGallery = $this->VideosGallery->get($id, [
            'contain' => ['News']
        ]);

        $this->set('videosGallery', $videosGallery);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $videosGallery = $this->VideosGallery->newEntity();
        if ($this->request->is('post')) {
            $videosGallery = $this->VideosGallery->patchEntity($videosGallery, $this->request->getData());
            if ($this->VideosGallery->save($videosGallery)) {
                $this->Flash->success(__('A galeria de vídeos foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A galeria de videos não pôde ser salva, tente novamente.'));
        }
        $news = $this->VideosGallery->News->find('list', ['limit' => 200]);
        $this->set(compact('videosGallery', 'news'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Videos Gallery id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $videosGallery = $this->VideosGallery->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $videosGallery = $this->VideosGallery->patchEntity($videosGallery, $this->request->getData());
            if ($this->VideosGallery->save($videosGallery)) {
                $this->Flash->success(__('A galeria de vídeos foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A galeria de videos não pôde ser salva, tente novamente.'));
        }
        $news = $this->VideosGallery->News->find('list', ['limit' => 200]);
        $this->set(compact('videosGallery', 'news'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Videos Gallery id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $videosGallery = $this->VideosGallery->get($id);
        if ($this->VideosGallery->delete($videosGallery)) {
            $this->Flash->success(__('A galeria de vídeos foi deletada.'));
        } else {
            $this->Flash->error(__('A galeria de videos não pôde ser deletada, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
