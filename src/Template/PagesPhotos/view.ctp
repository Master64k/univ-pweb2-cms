<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PagesPhoto $pagesPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pages Photo'), ['action' => 'edit', $pagesPhoto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pages Photo'), ['action' => 'delete', $pagesPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagesPhoto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pages Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pages Photo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pages'), ['controller' => 'Pages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page'), ['controller' => 'Pages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pagesPhotos view large-9 medium-8 columns content">
    <h3><?= h($pagesPhoto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Page') ?></th>
            <td><?= $pagesPhoto->has('page') ? $this->Html->link($pagesPhoto->page->title, ['controller' => 'Pages', 'action' => 'view', $pagesPhoto->page->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= $pagesPhoto->has('photo') ? $this->Html->link($pagesPhoto->photo->id, ['controller' => 'Photos', 'action' => 'view', $pagesPhoto->photo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pagesPhoto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($pagesPhoto->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($pagesPhoto->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update At') ?></th>
            <td><?= h($pagesPhoto->update_at) ?></td>
        </tr>
    </table>
</div>
