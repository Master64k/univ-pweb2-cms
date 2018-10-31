<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Faq'), ['action' => 'edit', $faq->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Faq'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Faqs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faq'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="faqs view large-9 medium-8 columns content">
    <h3><?= h($faq->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= h($faq->question) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answer') ?></th>
            <td><?= h($faq->answer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($faq->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($faq->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($faq->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($faq->updated_at) ?></td>
        </tr>
    </table>
</div>
