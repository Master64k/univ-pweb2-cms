<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BannersPhoto $bannersPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Banners Photo'),  ['action' => 'edit', $bannersPhoto->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Banners Photo'), ['action' => 'delete', $bannersPhoto->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $bannersPhoto->id)] ) ?>
            <?= $this->Html->link(__('Listar Banners Photos'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Banners Photo'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar Banners'), ['controller' => 'Banners', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Banner'), ['controller' => 'Banners', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar Photos'), ['controller' => 'Photos', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Photo'), ['controller' => 'Photos', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                </div>
    </div>
    <!--</ul>-->
</nav>
<div class="bannersPhotos view large-9 medium-8 columns content">
    <h3><?= h($bannersPhoto->id) ?></h3>
    <table class="table table-striped table-responsive">
                                            <tr>
                <th scope="row"><?= __('Banner') ?></th>
                <td><?= $bannersPhoto->has('banner') ? $this->Html->link($bannersPhoto->banner->title, ['controller' => 'Banners', 'class' => 'btn btn-secondary', 'action' => 'view', $bannersPhoto->banner->id]) : '' ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($bannersPhoto->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($bannersPhoto->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($bannersPhoto->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($bannersPhoto->updated_at) ?></td>
            </tr>
                                    </table>
                        </div>
