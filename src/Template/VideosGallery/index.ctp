<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosGallery[]|\Cake\Collection\CollectionInterface $videosGallery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Videos Gallery'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videosGallery index large-9 medium-8 columns content">
    <h3><?= __('Videos Gallery') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $videosGallery->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $videosGallery->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $videosGallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosGallery->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
