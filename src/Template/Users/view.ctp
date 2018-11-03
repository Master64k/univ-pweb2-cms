<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar User'),  ['action' => 'edit', $user->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar User'), ['action' => 'delete', $user->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $user->id)] ) ?>
            <?= $this->Html->link(__('Listar Users'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) User'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                </div>
    </div>
    <!--</ul>-->
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="table table-striped table-responsive">
                                    <tr>
                <th scope="row"><?= __('Login') ?></th>
                <td><?= h($user->login) ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Password') ?></th>
                <td><?= h($user->password) ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($user->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($user->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($user->updated_at) ?></td>
            </tr>
                                    </table>
                        </div>
