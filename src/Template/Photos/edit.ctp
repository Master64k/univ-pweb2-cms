<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

                            <?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $photo->id], ['class' => 'btn btn-danger'],
                        ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $photo->id)]
                    )
                ?>
                            <?= $this->Html->link(__('Listar Photos'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                                <?= $this->Html->link(__('Lista News'), ['controller' => 'News', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo News'), ['controller' => 'News', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                                <?= $this->Html->link(__('Lista Pages'), ['controller' => 'Pages', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo Page'), ['controller' => 'Pages', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Lista Banners'), ['controller' => 'Banners', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo Banner'), ['controller' => 'Banners', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                    </div>
    </div>

</nav>
<div class="photos form large-9 medium-8 columns content">
    <?= $this->Form->create($photo) ?>
    <fieldset>
        <legend><?= __('Edit Photo') ?></legend>
        <?php
                                    echo $this->Form->control('photo_name', ['class' => 'form-control']);
                        echo $this->Form->control('photo_title', ['class' => 'form-control']);
                        echo $this->Form->control('page_id', ['class' => 'form-control']);

                        echo $this->Form->control('news_id', ['class' => 'form-control', 'options' => $news, 'empty' => true]);
                        echo $this->Form->control('banners_id', ['class' => 'form-control']);
                        echo $this->Form->control('created_at', ['class' => 'form-control']);
                        echo $this->Form->control('updated_at', ['class' => 'form-control']);
                        echo $this->Form->control('active', ['class' => 'form-control']);
                        echo $this->Form->control('pages._ids', ['options' => $pages]);
                        echo $this->Form->control('banners._ids', ['options' => $banners]);
                    ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary mt-2']) ?>
    <?= $this->Form->end() ?>
</div>
