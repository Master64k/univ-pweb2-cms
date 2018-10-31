<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BannersPhoto $bannersPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banners Photo'), ['action' => 'edit', $bannersPhoto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banners Photo'), ['action' => 'delete', $bannersPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bannersPhoto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Banners Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banners Photo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Banners'), ['controller' => 'Banners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banner'), ['controller' => 'Banners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bannersPhotos view large-9 medium-8 columns content">
    <h3><?= h($bannersPhoto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Banner') ?></th>
            <td><?= $bannersPhoto->has('banner') ? $this->Html->link($bannersPhoto->banner->title, ['controller' => 'Banners', 'action' => 'view', $bannersPhoto->banner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bannersPhoto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($bannersPhoto->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($bannersPhoto->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($bannersPhoto->updated_at) ?></td>
        </tr>
    </table>
</div>
