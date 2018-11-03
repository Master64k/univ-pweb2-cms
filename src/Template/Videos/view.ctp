<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Video $video
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Video'),  ['action' => 'edit', $video->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Video'), ['action' => 'delete', $video->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $video->id)] ) ?>
            <?= $this->Html->link(__('Listar Videos'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Video'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                </div>
    </div>
    <!--</ul>-->
</nav>
<div class="videos view large-9 medium-8 columns content">
    <h3><?= h($video->name) ?></h3>
    <table class="table table-striped table-responsive">
                                            <tr>
                <th scope="row"><?= __('Videos Gallery') ?></th>
                <td><?= $video->has('videos_gallery') ? $this->Html->link($video->videos_gallery->name, ['controller' => 'VideosGallery', 'class' => 'btn btn-secondary', 'action' => 'view', $video->videos_gallery->id]) : '' ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($video->name) ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Youtube Url') ?></th>
                <td><?= h($video->youtube_url) ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($video->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($video->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($video->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($video->updated_at) ?></td>
            </tr>
                                    </table>
                        </div>
