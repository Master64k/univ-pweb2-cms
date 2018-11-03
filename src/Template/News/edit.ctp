<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

                            <?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $news->id], ['class' => 'btn btn-danger'],
                        ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $news->id)]
                    )
                ?>
                            <?= $this->Html->link(__('Listar News'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                                <?= $this->Html->link(__('Lista Photos'), ['controller' => 'Photos', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo Photo'), ['controller' => 'Photos', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Lista Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                    </div>
    </div>

</nav>
<div class="news form large-9 medium-8 columns content">
    <?= $this->Form->create($news) ?>
    <fieldset>
        <legend><?= __('Edit News') ?></legend>
        <?php
                                    echo $this->Form->control('title', ['class' => 'form-control']);
                        echo $this->Form->control('content', ['class' => 'form-control']);
                        echo $this->Form->control('date', ['class' => 'form-control']);
                        echo $this->Form->control('id_users', ['class' => 'form-control']);
                        echo $this->Form->control('created_at', ['class' => 'form-control']);
                        echo $this->Form->control('updated_at', ['class' => 'form-control']);
                        echo $this->Form->control('active', ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary mt-2']) ?>
    <?= $this->Form->end() ?>
</div>
