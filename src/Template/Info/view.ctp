<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Info $info
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Info'), ['action' => 'edit', $info->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Info'), ['action' => 'delete', $info->id], ['confirm' => __('Are you sure you want to delete # {0}?', $info->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Info'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="info view large-9 medium-8 columns content">
    <h3><?= h($info->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($info->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($info->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($info->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter') ?></th>
            <td><?= h($info->twitter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instageam') ?></th>
            <td><?= h($info->instageam) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($info->id) ?></td>
        </tr>
    </table>
</div>
