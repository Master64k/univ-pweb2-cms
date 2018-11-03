<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PagesPhoto[]|\Cake\Collection\CollectionInterface $pagesPhotos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

        <?= $this->Html->link(__('Novo(a) Pages Photo'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Lista Pages'), ['controller' => 'Pages', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Novo(a) Page'), ['controller' => 'Pages', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Lista Photos'), ['controller' => 'Photos', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Novo(a) Photo'), ['controller' => 'Photos', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
    <!--</ul>-->
</nav>
<div class="pagesPhotos index large-9 medium-8 columns content">
    <h3><?= __('Pages Photos') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('page_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pagesPhotos as $pagesPhoto): ?>
            <tr>
                <td><?= $this->Number->format($pagesPhoto->id) ?></td>
                <td><?= $pagesPhoto->has('page') ? $this->Html->link($pagesPhoto->page->title, ['controller' => 'Pages', 'action' => 'view', $pagesPhoto->page->id]) : '' ?></td>
                <td><?= $pagesPhoto->has('photo') ? $this->Html->link($pagesPhoto->photo->id, ['controller' => 'Photos', 'action' => 'view', $pagesPhoto->photo->id]) : '' ?></td>
                <td><?= h($pagesPhoto->created_at) ?></td>
                <td><?= h($pagesPhoto->update_at) ?></td>
                <td><?= $this->Number->format($pagesPhoto->active) ?></td>
                <td class="actions">
                    <div class="btn-group">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $pagesPhoto->id], ['class' => 'btn btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pagesPhoto->id], ['class' => 'btn btn-sm btn-secondary']) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $pagesPhoto->id], ['class' => 'btn btn-sm btn-danger'], ['confirm' => __('Tem certeza de que quer deletar # {0}?', $pagesPhoto->id)]) ?>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        <ul class="pagination">
            <?= $this->Paginator->first('<< ') ?>
            <?= $this->Paginator->prev('<') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('>') ?>
            <?= $this->Paginator->last( '>>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{page}}, mostrando {{current}} registros de {{count}} total')]) ?></p>

</div>
