<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Photo'), ['action' => 'edit', $photo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Photo'), ['action' => 'delete', $photo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pages'), ['controller' => 'Pages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page'), ['controller' => 'Pages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Banners'), ['controller' => 'Banners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banner'), ['controller' => 'Banners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="photos view large-9 medium-8 columns content">
    <h3><?= h($photo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Photo Name') ?></th>
            <td><?= h($photo->photo_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Title') ?></th>
            <td><?= h($photo->photo_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($photo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Page Id') ?></th>
            <td><?= $this->Number->format($photo->page_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('News Id') ?></th>
            <td><?= $this->Number->format($photo->news_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Banners Id') ?></th>
            <td><?= $this->Number->format($photo->banners_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($photo->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($photo->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($photo->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pages') ?></h4>
        <?php if (!empty($photo->pages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Banner Id') ?></th>
                <th scope="col"><?= __('Photos Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($photo->pages as $pages): ?>
            <tr>
                <td><?= h($pages->id) ?></td>
                <td><?= h($pages->title) ?></td>
                <td><?= h($pages->text) ?></td>
                <td><?= h($pages->slug) ?></td>
                <td><?= h($pages->banner_id) ?></td>
                <td><?= h($pages->photos_id) ?></td>
                <td><?= h($pages->created_at) ?></td>
                <td><?= h($pages->updated_at) ?></td>
                <td><?= h($pages->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pages', 'action' => 'view', $pages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pages', 'action' => 'edit', $pages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pages', 'action' => 'delete', $pages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related News') ?></h4>
        <?php if (!empty($photo->news)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Id Users') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($photo->news as $news): ?>
            <tr>
                <td><?= h($news->id) ?></td>
                <td><?= h($news->title) ?></td>
                <td><?= h($news->content) ?></td>
                <td><?= h($news->date) ?></td>
                <td><?= h($news->id_users) ?></td>
                <td><?= h($news->created_at) ?></td>
                <td><?= h($news->updated_at) ?></td>
                <td><?= h($news->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'News', 'action' => 'view', $news->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'News', 'action' => 'edit', $news->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'News', 'action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Banners') ?></h4>
        <?php if (!empty($photo->banners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Subtitle') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($photo->banners as $banners): ?>
            <tr>
                <td><?= h($banners->id) ?></td>
                <td><?= h($banners->title) ?></td>
                <td><?= h($banners->subtitle) ?></td>
                <td><?= h($banners->created_at) ?></td>
                <td><?= h($banners->updated_at) ?></td>
                <td><?= h($banners->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Banners', 'action' => 'view', $banners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Banners', 'action' => 'edit', $banners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Banners', 'action' => 'delete', $banners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
