<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Video $video
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Video'), ['action' => 'edit', $video->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Video'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="videos view large-9 medium-8 columns content">
    <h3><?= h($video->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Videos Gallery') ?></th>
            <td><?= $video->has('videos_gallery') ? $this->Html->link($video->videos_gallery->name, ['controller' => 'VideosGallery', 'action' => 'view', $video->videos_gallery->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($video->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Youtube Url') ?></th>
            <td><?= h($video->youtube_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($video->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($video->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($video->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($video->updated_at) ?></td>
        </tr>
    </table>
</div>
