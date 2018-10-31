<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq[]|\Cake\Collection\CollectionInterface $faqs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Faq'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="faqs index large-9 medium-8 columns content">
    <h3><?= __('Faqs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question') ?></th>
                <th scope="col"><?= $this->Paginator->sort('answer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($faqs as $faq): ?>
            <tr>
                <td><?= $this->Number->format($faq->id) ?></td>
                <td><?= h($faq->question) ?></td>
                <td><?= h($faq->answer) ?></td>
                <td><?= h($faq->created_at) ?></td>
                <td><?= h($faq->updated_at) ?></td>
                <td><?= $this->Number->format($faq->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $faq->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $faq->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id)]) ?>
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
