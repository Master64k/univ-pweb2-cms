<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactU $contactU
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!--<ul class="side-nav">-->
    <h2 class="heading"><?= __('Ações') ?></h2>
    <div class="btn-toolbar" role="toolbar" >
        <div class="btn-group btn-group-sm" >

                            <?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $contactU->id], ['class' => 'btn btn-danger'],
                        ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $contactU->id)]
                    )
                ?>
                            <?= $this->Html->link(__('Listar Contact Us'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                    </div>
    </div>

</nav>
<div class="contactUs form large-9 medium-8 columns content">
    <?= $this->Form->create($contactU) ?>
    <fieldset>
        <legend><?= __('Edit Contact U') ?></legend>
        <?php
                                    echo $this->Form->control('title', ['class' => 'form-control']);
                        echo $this->Form->control('email', ['class' => 'form-control']);
                        echo $this->Form->control('message', ['class' => 'form-control']);
                        echo $this->Form->control('created_at', ['class' => 'form-control']);
                        echo $this->Form->control('updated_at', ['class' => 'form-control']);
                        echo $this->Form->control('active', ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary mt-2']) ?>
    <?= $this->Form->end() ?>
</div>
