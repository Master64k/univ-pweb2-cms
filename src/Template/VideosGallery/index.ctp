<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosGallery[]|\Cake\Collection\CollectionInterface $videosGallery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

        <?= $this->Html->link(__('Novo(a) Videos Gallery'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Lista News'), ['controller' => 'News', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link(__('Novo(a) News'), ['controller' => 'News', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
    <!--</ul>-->
</nav>
<div class="videosGallery index large-9 medium-8 columns content">
    <h3><?= __('Videos Gallery') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('news_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($videosGallery as $videosGallery): ?>
            <tr>
                <td><?= $this->Number->format($videosGallery->id) ?></td>
                <td><?= $videosGallery->has('news') ? $this->Html->link($videosGallery->news->title, ['controller' => 'News', 'action' => 'view', $videosGallery->news->id]) : '' ?></td>
                <td><?= h($videosGallery->name) ?></td>
                <td><?= h($videosGallery->created_at) ?></td>
                <td><?= h($videosGallery->updated_at) ?></td>
                <td><?= $this->Number->format($videosGallery->active) ?></td>
                <td class="actions">
                    <div class="btn-group">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $videosGallery->id], ['class' => 'btn btn-sm btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $videosGallery->id], ['class' => 'btn btn-sm btn-secondary']) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $videosGallery->id], ['class' => 'btn btn-sm btn-danger'], ['confirm' => __('Tem certeza de que quer deletar # {0}?', $videosGallery->id)]) ?>
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
