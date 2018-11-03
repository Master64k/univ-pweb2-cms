<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Photo'),  ['action' => 'edit', $photo->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Photo'), ['action' => 'delete', $photo->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $photo->id)] ) ?>
            <?= $this->Html->link(__('Listar Photos'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Photo'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar News'), ['controller' => 'News', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) News'), ['controller' => 'News', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                        <?= $this->Html->link(__('Listar Pages'), ['controller' => 'Pages', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Page'), ['controller' => 'Pages', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar Banners'), ['controller' => 'Banners', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Banner'), ['controller' => 'Banners', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                        </div>
    </div>
    <!--</ul>-->
</nav>
<div class="photos view large-9 medium-8 columns content">
    <h3><?= h($photo->id) ?></h3>
    <table class="table table-striped table-responsive">
                                    <tr>
                <th scope="row"><?= __('Photo Name') ?></th>
                <td><?= h($photo->photo_name) ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Photo Title') ?></th>
                <td><?= h($photo->photo_title) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('News') ?></th>
                <td><?= $photo->has('news') ? $this->Html->link($photo->news->title, ['controller' => 'News', 'class' => 'btn btn-secondary', 'action' => 'view', $photo->news->id]) : '' ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($photo->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Page Id') ?></th>
                <td><?= $this->Number->format($photo->page_id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Banners Id') ?></th>
                <td><?= $this->Number->format($photo->banners_id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($photo->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($photo->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($photo->updated_at) ?></td>
            </tr>
                                    </table>
                                                    <div class="related">
                <h4><?= __('Related Pages') ?></h4>
                <?php if (!empty($photo->pages)): ?>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                                                                <th scope="col"><?= __('Id') ?></th>
                                                                <th scope="col"><?= __('Title') ?></th>
                                                                <th scope="col"><?= __('Text') ?></th>
                                                                <th scope="col"><?= __('Slug') ?></th>
                                                                <th scope="col"><?= __('Banner Id') ?></th>
                                                                <th scope="col"><?= __('Photos Id') ?></th>
                                                                <th scope="col"><?= __('Created At') ?></th>
                                                                <th scope="col"><?= __('Updated At') ?></th>
                                                                <th scope="col"><?= __('Active') ?></th>
                                                                <th scope="col" class="actions"><?= __('Ações') ?></th>
                                    </tr>
                                    <?php foreach ($photo->pages as $pages): ?>
                                    <tr>
                                                                <td><?= h($pages->id) ?></td>
                                                                <td><?= h($pages->title) ?></td>
                                                                <td><?= h($pages->text) ?></td>
                                                                <td><?= h($pages->slug) ?></td>
                                                                <td><?= h($pages->banner_id) ?></td>
                                                                <td><?= h($pages->photos_id) ?></td>
                                                                <td><?= h($pages->created_at) ?></td>
                                                                <td><?= h($pages->updated_at) ?></td>
                                                                <td><?= h($pages->active) ?></td>
                                                                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Pages', 'action' => 'view', 'class' => 'btn btn-primary', $pages->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Pages', 'action' => 'edit', 'class' => 'btn btn-secondary', $pages->id]) ?>
                    <?= $this->Form->postLink(__('Deletear'), ['controller' => 'Pages', 'action' => 'delete', 'class' => 'btn btn-danger', $pages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
                            <div class="related">
                <h4><?= __('Related Banners') ?></h4>
                <?php if (!empty($photo->banners)): ?>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                                                                <th scope="col"><?= __('Id') ?></th>
                                                                <th scope="col"><?= __('Title') ?></th>
                                                                <th scope="col"><?= __('Subtitle') ?></th>
                                                                <th scope="col"><?= __('Created At') ?></th>
                                                                <th scope="col"><?= __('Updated At') ?></th>
                                                                <th scope="col"><?= __('Active') ?></th>
                                                                <th scope="col" class="actions"><?= __('Ações') ?></th>
                                    </tr>
                                    <?php foreach ($photo->banners as $banners): ?>
                                    <tr>
                                                                <td><?= h($banners->id) ?></td>
                                                                <td><?= h($banners->title) ?></td>
                                                                <td><?= h($banners->subtitle) ?></td>
                                                                <td><?= h($banners->created_at) ?></td>
                                                                <td><?= h($banners->updated_at) ?></td>
                                                                <td><?= h($banners->active) ?></td>
                                                                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Banners', 'action' => 'view', 'class' => 'btn btn-primary', $banners->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Banners', 'action' => 'edit', 'class' => 'btn btn-secondary', $banners->id]) ?>
                    <?= $this->Form->postLink(__('Deletear'), ['controller' => 'Banners', 'action' => 'delete', 'class' => 'btn btn-danger', $banners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
