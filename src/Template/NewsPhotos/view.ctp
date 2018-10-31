<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsPhoto $newsPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit News Photo'), ['action' => 'edit', $newsPhoto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete News Photo'), ['action' => 'delete', $newsPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsPhoto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List News Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News Photo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="newsPhotos view large-9 medium-8 columns content">
    <h3><?= h($newsPhoto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($newsPhoto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id News') ?></th>
            <td><?= $this->Number->format($newsPhoto->id_news) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($newsPhoto->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($newsPhoto->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($newsPhoto->updated_at) ?></td>
        </tr>
    </table>
</div>
