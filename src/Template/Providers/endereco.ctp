<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="address form large-9 medium-8 columns content">
    <?= $this->Form->create($address) ?>
    <fieldset>
        <legend><?= __('Add Addres') ?></legend>
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
