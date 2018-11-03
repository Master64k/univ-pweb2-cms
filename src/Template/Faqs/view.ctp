<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Faq'),  ['action' => 'edit', $faq->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Faq'), ['action' => 'delete', $faq->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $faq->id)] ) ?>
            <?= $this->Html->link(__('Listar Faqs'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Faq'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                </div>
    </div>
    <!--</ul>-->
</nav>
<div class="faqs view large-9 medium-8 columns content">
    <h3><?= h($faq->id) ?></h3>
    <table class="table table-striped table-responsive">
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
