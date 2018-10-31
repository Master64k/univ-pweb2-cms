<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit News'), ['action' => 'edit', $news->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete News'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?> </li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="news view large-9 medium-8 columns content">
    <h3><?= h($news->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($news->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($news->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Users') ?></th>
            <td><?= $this->Number->format($news->id_users) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($news->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($news->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($news->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($news->updated_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($news->content)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Photos') ?></h4>
        <?php if (!empty($news->photos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Photo Name') ?></th>
                <th scope="col"><?= __('Photo Title') ?></th>
                <th scope="col"><?= __('Page Id') ?></th>
                <th scope="col"><?= __('News Id') ?></th>
                <th scope="col"><?= __('Banners Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($news->photos as $photos): ?>
            <tr>
                <td><?= h($photos->id) ?></td>
                <td><?= h($photos->photo_name) ?></td>
                <td><?= h($photos->photo_title) ?></td>
                <td><?= h($photos->page_id) ?></td>
                <td><?= h($photos->news_id) ?></td>
                <td><?= h($photos->banners_id) ?></td>
                <td><?= h($photos->created_at) ?></td>
                <td><?= h($photos->updated_at) ?></td>
                <td><?= h($photos->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Photos', 'action' => 'view', $photos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Photos', 'action' => 'edit', $photos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Photos', 'action' => 'delete', $photos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Videos Gallery') ?></h4>
        <?php if (!empty($news->videos_gallery)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('News Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($news->videos_gallery as $videosGallery): ?>
            <tr>
                <td><?= h($videosGallery->id) ?></td>
                <td><?= h($videosGallery->news_id) ?></td>
                <td><?= h($videosGallery->name) ?></td>
                <td><?= h($videosGallery->created_at) ?></td>
                <td><?= h($videosGallery->updated_at) ?></td>
                <td><?= h($videosGallery->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VideosGallery', 'action' => 'view', $videosGallery->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'VideosGallery', 'action' => 'edit', $videosGallery->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VideosGallery', 'action' => 'delete', $videosGallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosGallery->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
