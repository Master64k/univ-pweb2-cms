<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PagesPhoto $pagesPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Pages Photo'),  ['action' => 'edit', $pagesPhoto->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Pages Photo'), ['action' => 'delete', $pagesPhoto->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $pagesPhoto->id)] ) ?>
            <?= $this->Html->link(__('Listar Pages Photos'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Pages Photo'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar Pages'), ['controller' => 'Pages', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Page'), ['controller' => 'Pages', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar Photos'), ['controller' => 'Photos', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Photo'), ['controller' => 'Photos', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                </div>
    </div>
    <!--</ul>-->
</nav>
<div class="pagesPhotos view large-9 medium-8 columns content">
    <h3><?= h($pagesPhoto->id) ?></h3>
    <table class="table table-striped table-responsive">
                                            <tr>
                <th scope="row"><?= __('Page') ?></th>
                <td><?= $pagesPhoto->has('page') ? $this->Html->link($pagesPhoto->page->title, ['controller' => 'Pages', 'class' => 'btn btn-secondary', 'action' => 'view', $pagesPhoto->page->id]) : '' ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Photo') ?></th>
                <td><?= $pagesPhoto->has('photo') ? $this->Html->link($pagesPhoto->photo->id, ['controller' => 'Photos', 'class' => 'btn btn-secondary', 'action' => 'view', $pagesPhoto->photo->id]) : '' ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($pagesPhoto->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($pagesPhoto->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($pagesPhoto->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Update At') ?></th>
                <td><?= h($pagesPhoto->update_at) ?></td>
            </tr>
                                    </table>
                        </div>
