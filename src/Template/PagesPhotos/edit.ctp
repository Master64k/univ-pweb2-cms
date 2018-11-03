<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PagesPhoto $pagesPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

                            <?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $pagesPhoto->id], ['class' => 'btn btn-danger'],
                        ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $pagesPhoto->id)]
                    )
                ?>
                            <?= $this->Html->link(__('Listar Pages Photos'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                                <?= $this->Html->link(__('Lista Pages'), ['controller' => 'Pages', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo Page'), ['controller' => 'Pages', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Lista Photos'), ['controller' => 'Photos', 'action' => 'index', 'class' => 'btn btn-secondary']) ?>
                    <?= $this->Html->link(__('Novo Photo'), ['controller' => 'Photos', 'action' => 'add', 'class' => 'btn btn-secondary']) ?>
                    </div>
    </div>

</nav>
<div class="pagesPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($pagesPhoto) ?>
    <fieldset>
        <legend><?= __('Edit Pages Photo') ?></legend>
        <?php
            
                        echo $this->Form->control('page_id', ['class' => 'form-control', 'options' => $pages, 'empty' => true]);

                        echo $this->Form->control('photo_id', ['class' => 'form-control', 'options' => $photos, 'empty' => true]);
                        echo $this->Form->control('created_at', ['class' => 'form-control']);
                        echo $this->Form->control('update_at', ['class' => 'form-control']);
                        echo $this->Form->control('active', ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary mt-2']) ?>
    <?= $this->Form->end() ?>
</div>
