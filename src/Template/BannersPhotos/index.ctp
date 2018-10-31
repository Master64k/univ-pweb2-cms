<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BannersPhoto[]|\Cake\Collection\CollectionInterface $bannersPhotos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Banners Photo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['controller' => 'Banners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banner'), ['controller' => 'Banners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bannersPhotos index large-9 medium-8 columns content">
    <h3><?= __('Banners Photos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banners_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bannersPhotos as $bannersPhoto): ?>
            <tr>
                <td><?= $this->Number->format($bannersPhoto->id) ?></td>
                <td><?= $bannersPhoto->has('banner') ? $this->Html->link($bannersPhoto->banner->title, ['controller' => 'Banners', 'action' => 'view', $bannersPhoto->banner->id]) : '' ?></td>
                <td><?= h($bannersPhoto->created_at) ?></td>
                <td><?= h($bannersPhoto->updated_at) ?></td>
                <td><?= $this->Number->format($bannersPhoto->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bannersPhoto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bannersPhoto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bannersPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bannersPhoto->id)]) ?>
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
