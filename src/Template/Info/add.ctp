<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Info $info
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

                            <?= $this->Html->link(__('Listar Info'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                    </div>
    </div>

</nav>
<div class="info form large-9 medium-8 columns content">
    <?= $this->Form->create($info) ?>
    <fieldset>
        <legend><?= __('Add Info') ?></legend>
        <?php
                                    echo $this->Form->control('email', ['class' => 'form-control']);
                        echo $this->Form->control('phone', ['class' => 'form-control']);
                        echo $this->Form->control('facebook', ['class' => 'form-control']);
                        echo $this->Form->control('twitter', ['class' => 'form-control']);
                        echo $this->Form->control('instagram', ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary mt-2']) ?>
    <?= $this->Form->end() ?>
</div>
