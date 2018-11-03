<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page[]|\Cake\Collection\CollectionInterface $pages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

        <?= $this->Html->link(__('Novo(a) Page'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Lista Banners'), ['controller' => 'Banners', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Novo(a) Banner'), ['controller' => 'Banners', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Lista Photos'), ['controller' => 'Photos', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Novo(a) Photo'), ['controller' => 'Photos', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
    <!--</ul>-->
</nav>
<div class="pages index large-9 medium-8 columns content">
    <h3><?= __('Pages') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?= $this->Number->format($page->id) ?></td>
                <td><?= h($page->title) ?></td>
                <td><?= h($page->slug) ?></td>
                <td><?= $page->has('banner') ? $this->Html->link($page->banner->title, ['controller' => 'Banners', 'action' => 'view', $page->banner->id]) : '' ?></td>
                <td><?= $this->Number->format($page->photos_id) ?></td>
                <td><?= h($page->created_at) ?></td>
                <td><?= h($page->updated_at) ?></td>
                <td><?= $this->Number->format($page->active) ?></td>
                <td class="actions">
                    <div class="btn-group">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $page->id], ['class' => 'btn btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $page->id], ['class' => 'btn btn-sm btn-secondary']) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $page->id], ['class' => 'btn btn-sm btn-danger'], ['confirm' => __('Tem certeza de que quer deletar # {0}?', $page->id)]) ?>
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
