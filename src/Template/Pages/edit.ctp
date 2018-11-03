<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

                            <?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $page->id], ['class' => 'btn btn-danger'],
                        ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $page->id)]
                    )
                ?>
                            <?= $this->Html->link(__('Listar Pages'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                                <?= $this->Html->link(__('Lista Banners'), ['controller' => 'Banners', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo Banner'), ['controller' => 'Banners', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                                <?= $this->Html->link(__('Lista Photos'), ['controller' => 'Photos', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo Photo'), ['controller' => 'Photos', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                    </div>
    </div>

</nav>
<div class="pages form large-9 medium-8 columns content">
    <?= $this->Form->create($page) ?>
    <fieldset>
        <legend><?= __('Edit Page') ?></legend>
        <?php
                                    echo $this->Form->control('title', ['class' => 'form-control']);
                        echo $this->Form->control('text', ['class' => 'form-control']);
                        echo $this->Form->control('slug', ['class' => 'form-control']);

                        echo $this->Form->control('banner_id', ['class' => 'form-control', 'options' => $banners, 'empty' => true]);
                        echo $this->Form->control('photos_id', ['class' => 'form-control']);
                        echo $this->Form->control('created_at', ['class' => 'form-control']);
                        echo $this->Form->control('updated_at', ['class' => 'form-control']);
                        echo $this->Form->control('active', ['class' => 'form-control']);
                        echo $this->Form->control('photos._ids', ['options' => $photos]);
                    ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary mt-2']) ?>
    <?= $this->Form->end() ?>
</div>
