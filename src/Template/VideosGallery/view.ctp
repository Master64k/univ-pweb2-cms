<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosGallery $videosGallery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Videos Gallery'),  ['action' => 'edit', $videosGallery->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Videos Gallery'), ['action' => 'delete', $videosGallery->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $videosGallery->id)] ) ?>
            <?= $this->Html->link(__('Listar Videos Gallery'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Videos Gallery'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar News'), ['controller' => 'News', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) News'), ['controller' => 'News', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                </div>
    </div>
    <!--</ul>-->
</nav>
<div class="videosGallery view large-9 medium-8 columns content">
    <h3><?= h($videosGallery->name) ?></h3>
    <table class="table table-striped table-responsive">
                                            <tr>
                <th scope="row"><?= __('News') ?></th>
                <td><?= $videosGallery->has('news') ? $this->Html->link($videosGallery->news->title, ['controller' => 'News', 'class' => 'btn btn-secondary', 'action' => 'view', $videosGallery->news->id]) : '' ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($videosGallery->name) ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($videosGallery->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($videosGallery->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($videosGallery->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($videosGallery->updated_at) ?></td>
            </tr>
                                    </table>
                        </div>
