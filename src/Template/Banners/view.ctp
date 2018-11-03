<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Banner'),  ['action' => 'edit', $banner->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Banner'), ['action' => 'delete', $banner->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $banner->id)] ) ?>
            <?= $this->Html->link(__('Listar Banners'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Banner'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                <?= $this->Html->link(__('Listar Pages'), ['controller' => 'Pages', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Page'), ['controller' => 'Pages', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                        <?= $this->Html->link(__('Listar Photos'), ['controller' => 'Photos', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Photo'), ['controller' => 'Photos', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                        </div>
    </div>
    <!--</ul>-->
</nav>
<div class="banners view large-9 medium-8 columns content">
    <h3><?= h($banner->title) ?></h3>
    <table class="table table-striped table-responsive">
                                    <tr>
                <th scope="row"><?= __('Title') ?></th>
                <td><?= h($banner->title) ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Subtitle') ?></th>
                <td><?= h($banner->subtitle) ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($banner->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($banner->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($banner->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($banner->updated_at) ?></td>
            </tr>
                                    </table>
                                                    <div class="related">
                <h4><?= __('Related Photos') ?></h4>
                <?php if (!empty($banner->photos)): ?>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                                                                <th scope="col"><?= __('Id') ?></th>
                                                                <th scope="col"><?= __('Photo Name') ?></th>
                                                                <th scope="col"><?= __('Photo Title') ?></th>
                                                                <th scope="col"><?= __('Page Id') ?></th>
                                                                <th scope="col"><?= __('News Id') ?></th>
                                                                <th scope="col"><?= __('Banners Id') ?></th>
                                                                <th scope="col"><?= __('Created At') ?></th>
                                                                <th scope="col"><?= __('Updated At') ?></th>
                                                                <th scope="col"><?= __('Active') ?></th>
                                                                <th scope="col" class="actions"><?= __('Ações') ?></th>
                                    </tr>
                                    <?php foreach ($banner->photos as $photos): ?>
                                    <tr>
                                                                <td><?= h($photos->id) ?></td>
                                                                <td><?= h($photos->photo_name) ?></td>
                                                                <td><?= h($photos->photo_title) ?></td>
                                                                <td><?= h($photos->page_id) ?></td>
                                                                <td><?= h($photos->news_id) ?></td>
                                                                <td><?= h($photos->banners_id) ?></td>
                                                                <td><?= h($photos->created_at) ?></td>
                                                                <td><?= h($photos->updated_at) ?></td>
                                                                <td><?= h($photos->active) ?></td>
                                                                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Photos', 'action' => 'view', 'class' => 'btn btn-primary', $photos->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Photos', 'action' => 'edit', 'class' => 'btn btn-secondary', $photos->id]) ?>
                    <?= $this->Form->postLink(__('Deletear'), ['controller' => 'Photos', 'action' => 'delete', 'class' => 'btn btn-danger', $photos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
                            <div class="related">
                <h4><?= __('Related Pages') ?></h4>
                <?php if (!empty($banner->pages)): ?>
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
                                    <?php foreach ($banner->pages as $pages): ?>
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
</div>
