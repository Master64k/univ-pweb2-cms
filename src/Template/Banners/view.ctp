<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banner'), ['action' => 'edit', $banner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banner'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pages'), ['controller' => 'Pages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page'), ['controller' => 'Pages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="banners view large-9 medium-8 columns content">
    <h3><?= h($banner->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($banner->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($banner->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($banner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($banner->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($banner->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($banner->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Photos') ?></h4>
        <?php if (!empty($banner->photos)): ?>
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
            <?php foreach ($banner->photos as $photos): ?>
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
        <h4><?= __('Related Pages') ?></h4>
        <?php if (!empty($banner->pages)): ?>
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
            <?php foreach ($banner->pages as $pages): ?>
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
</div>
