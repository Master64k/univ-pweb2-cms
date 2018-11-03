<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

            <?= $this->Html->link(__('Editar News'),  ['action' => 'edit', $news->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Deletar News'), ['action' => 'delete', $news->id],['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $news->id)] ) ?>
            <?= $this->Html->link(__('Listar News'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Novo(a) News'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                                                <?= $this->Html->link(__('Listar Photos'), ['controller' => 'Photos', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Photo'), ['controller' => 'Photos', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                <?= $this->Html->link(__('Listar Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Novo(a) Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
                                                                                </div>
    </div>
    <!--</ul>-->
</nav>
<div class="news view large-9 medium-8 columns content">
    <h3><?= h($news->title) ?></h3>
    <table class="table table-striped table-responsive">
                                    <tr>
                <th scope="row"><?= __('Title') ?></th>
                <td><?= h($news->title) ?></td>
            </tr>
                                                            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($news->id) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Id Users') ?></th>
                <td><?= $this->Number->format($news->id_users) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $this->Number->format($news->active) ?></td>
            </tr>
                                            <tr>
                <th scope="row"><?= __('Date') ?></th>
                <td><?= h($news->date) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($news->created_at) ?></td>
            </tr>
                    <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($news->updated_at) ?></td>
            </tr>
                                    </table>
                            <div class="row">
                <h4><?= __('Content') ?></h4>
                <?= $this->Text->autoParagraph(h($news->content)); ?>
            </div>
                                                            <div class="related">
                <h4><?= __('Related Photos') ?></h4>
                <?php if (!empty($news->photos)): ?>
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
                                    <?php foreach ($news->photos as $photos): ?>
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
                <h4><?= __('Related Videos Gallery') ?></h4>
                <?php if (!empty($news->videos_gallery)): ?>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                                                                <th scope="col"><?= __('Id') ?></th>
                                                                <th scope="col"><?= __('News Id') ?></th>
                                                                <th scope="col"><?= __('Name') ?></th>
                                                                <th scope="col"><?= __('Created At') ?></th>
                                                                <th scope="col"><?= __('Updated At') ?></th>
                                                                <th scope="col"><?= __('Active') ?></th>
                                                                <th scope="col" class="actions"><?= __('Ações') ?></th>
                                    </tr>
                                    <?php foreach ($news->videos_gallery as $videosGallery): ?>
                                    <tr>
                                                                <td><?= h($videosGallery->id) ?></td>
                                                                <td><?= h($videosGallery->news_id) ?></td>
                                                                <td><?= h($videosGallery->name) ?></td>
                                                                <td><?= h($videosGallery->created_at) ?></td>
                                                                <td><?= h($videosGallery->updated_at) ?></td>
                                                                <td><?= h($videosGallery->active) ?></td>
                                                                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'VideosGallery', 'action' => 'view', 'class' => 'btn btn-primary', $videosGallery->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'VideosGallery', 'action' => 'edit', 'class' => 'btn btn-secondary', $videosGallery->id]) ?>
                    <?= $this->Form->postLink(__('Deletear'), ['controller' => 'VideosGallery', 'action' => 'delete', 'class' => 'btn btn-danger', $videosGallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosGallery->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
