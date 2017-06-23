<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $addres->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="address form large-9 medium-8 columns content">
    <?= $this->Form->create($addres) ?>
    <fieldset>
        <legend><?= __('Edit Addres') ?></legend>
        <?php
            echo $this->Form->control('cep');
            echo $this->Form->control('tipo_logradouro');
            echo $this->Form->control('logradouro');
            echo $this->Form->control('numero');
            echo $this->Form->control('complemento');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cidade');
            echo $this->Form->control('uf');
            echo $this->Form->control('id_cliente');
            echo $this->Form->control('id_fornecedor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
