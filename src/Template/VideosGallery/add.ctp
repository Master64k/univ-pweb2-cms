<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosGallery $videosGallery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

                            <?= $this->Html->link(__('Listar Videos Gallery'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                                <?= $this->Html->link(__('Lista News'), ['controller' => 'News', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo News'), ['controller' => 'News', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                    </div>
    </div>

</nav>
<div class="videosGallery form large-9 medium-8 columns content">
    <?= $this->Form->create($videosGallery) ?>
    <fieldset>
        <legend><?= __('Add Videos Gallery') ?></legend>
        <?php
            
                        echo $this->Form->control('news_id', ['class' => 'form-control', 'options' => $news, 'empty' => true]);
                        echo $this->Form->control('name', ['class' => 'form-control']);
                        echo $this->Form->control('created_at', ['class' => 'form-control']);
                        echo $this->Form->control('updated_at', ['class' => 'form-control']);
                        echo $this->Form->control('active', ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary mt-2']) ?>
    <?= $this->Form->end() ?>
</div>
