<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar Page'),  ['action' => 'edit', $page->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar Page'), ['action' => 'delete', $page->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $page->id)] ) ?>
            <?= $this->Html->link(__('Listar Pages'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) Page'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar Banners'), ['controller' => 'Banners', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Banner'), ['controller' => 'Banners', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                                        <?= $this->Html->link(__('Listar Photos'), ['controller' => 'Photos', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Photo'), ['controller' => 'Photos', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                        </div>
    </div>
    <!--</ul>-->
</nav>
<div class="pages view large-9 medium-8 columns content">
    <h3><?= h($page->title) ?></h3>
    <table class="table table-striped table-responsive">
                                    <tr>
                <th scope="row"><?= __('Title') ?></th>
                <td><?= h($page->title) ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Slug') ?></th>
                <td><?= h($page->slug) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Banner') ?></th>
                <td><?= $page->has('banner') ? $this->Html->link($page->banner->title, ['controller' => 'Banners', 'class' => 'btn btn-secondary', 'action' => 'view', $page->banner->id]) : '' ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($page->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Photos Id') ?></th>
                <td><?= $this->Number->format($page->photos_id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($page->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($page->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($page->updated_at) ?></td>
            </tr>
                                    </table>
                            <div class="row">
                <h4><?= __('Text') ?></h4>
                <?= $this->Text->autoParagraph(h($page->text)); ?>
            </div>
                                                            <div class="related">
                <h4><?= __('Related Photos') ?></h4>
                <?php if (!empty($page->photos)): ?>
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
                                    <?php foreach ($page->photos as $photos): ?>
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
</div>
