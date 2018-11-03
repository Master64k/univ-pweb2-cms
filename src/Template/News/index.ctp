<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

        <?= $this->Html->link(__('Novo(a) News'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Lista Photos'), ['controller' => 'Photos', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Novo(a) Photo'), ['controller' => 'Photos', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Lista Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Novo(a) Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
    <!--</ul>-->
</nav>
<div class="news index large-9 medium-8 columns content">
    <h3><?= __('News') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_users') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $news): ?>
            <tr>
                <td><?= $this->Number->format($news->id) ?></td>
                <td><?= h($news->title) ?></td>
                <td><?= h($news->date) ?></td>
                <td><?= $this->Number->format($news->id_users) ?></td>
                <td><?= h($news->created_at) ?></td>
                <td><?= h($news->updated_at) ?></td>
                <td><?= $this->Number->format($news->active) ?></td>
                <td class="actions">
                    <div class="btn-group">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $news->id], ['class' => 'btn btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $news->id], ['class' => 'btn btn-sm btn-secondary']) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $news->id], ['class' => 'btn btn-sm btn-danger'], ['confirm' => __('Tem certeza de que quer deletar # {0}?', $news->id)]) ?>
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
