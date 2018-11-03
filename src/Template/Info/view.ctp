<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Info $info
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Info'),  ['action' => 'edit', $info->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Info'), ['action' => 'delete', $info->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $info->id)] ) ?>
            <?= $this->Html->link(__('Listar Info'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Info'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                </div>
    </div>
    <!--</ul>-->
</nav>
<div class="info view large-9 medium-8 columns content">
    <h3><?= h($info->id) ?></h3>
    <table class="table table-striped table-responsive">
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
                <td><?= h($info->instagram) ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($info->id) ?></td>
            </tr>
                                            </table>
                        </div>
