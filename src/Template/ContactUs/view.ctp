<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactU $contactU
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Contact U'),  ['action' => 'edit', $contactU->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Contact U'), ['action' => 'delete', $contactU->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $contactU->id)] ) ?>
            <?= $this->Html->link(__('Listar Contact Us'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Contact U'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                </div>
    </div>
    <!--</ul>-->
</nav>
<div class="contactUs view large-9 medium-8 columns content">
    <h3><?= h($contactU->title) ?></h3>
    <table class="table table-striped table-responsive">
                                    <tr>
                <th scope="row"><?= __('Title') ?></th>
                <td><?= h($contactU->title) ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($contactU->email) ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($contactU->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($contactU->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($contactU->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($contactU->updated_at) ?></td>
            </tr>
                                    </table>
                            <div class="row">
                <h4><?= __('Message') ?></h4>
                <?= $this->Text->autoParagraph(h($contactU->message)); ?>
            </div>
                                </div>
