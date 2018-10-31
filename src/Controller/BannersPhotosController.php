<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BannersPhotos Controller
 *
 * @property \App\Model\Table\BannersPhotosTable $BannersPhotos
 *
 * @method \App\Model\Entity\BannersPhoto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BannersPhotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Banners', 'Photos']
        ];
        $bannersPhotos = $this->paginate($this->BannersPhotos);

        $this->set(compact('bannersPhotos'));
    }

    /**
     * View method
     *
     * @param string|null $id Banners Photo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bannersPhoto = $this->BannersPhotos->get($id, [
            'contain' => ['Banners', 'Photos']
        ]);

        $this->set('bannersPhoto', $bannersPhoto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bannersPhoto = $this->BannersPhotos->newEntity();
        if ($this->request->is('post')) {
            $bannersPhoto = $this->BannersPhotos->patchEntity($bannersPhoto, $this->request->getData());
            if ($this->BannersPhotos->save($bannersPhoto)) {
                $this->Flash->success(__('The banners photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banners photo could not be saved. Please, try again.'));
        }
        $banners = $this->BannersPhotos->Banners->find('list', ['limit' => 200]);
        $photos = $this->BannersPhotos->Photos->find('list', ['limit' => 200]);
        $this->set(compact('bannersPhoto', 'banners', 'photos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banners Photo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bannersPhoto = $this->BannersPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bannersPhoto = $this->BannersPhotos->patchEntity($bannersPhoto, $this->request->getData());
            if ($this->BannersPhotos->save($bannersPhoto)) {
                $this->Flash->success(__('The banners photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banners photo could not be saved. Please, try again.'));
        }
        $banners = $this->BannersPhotos->Banners->find('list', ['limit' => 200]);
        $photos = $this->BannersPhotos->Photos->find('list', ['limit' => 200]);
        $this->set(compact('bannersPhoto', 'banners', 'photos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banners Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bannersPhoto = $this->BannersPhotos->get($id);
        if ($this->BannersPhotos->delete($bannersPhoto)) {
            $this->Flash->success(__('The banners photo has been deleted.'));
        } else {
            $this->Flash->error(__('The banners photo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
