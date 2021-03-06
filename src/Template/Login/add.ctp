<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Login'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="login form large-9 medium-8 columns content">
    <?= $this->Form->create($login) ?>
    <fieldset>
        <legend><?= __('Add Login') ?></legend>
        <?php
            echo $this->Form->control('id_cliente');
            echo $this->Form->control('id_fornecedor');
            echo $this->Form->control('usuario');
            echo $this->Form->control('password');
            echo $this->Form->control('permissao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit') ) ?>
    <?= $this->Form->end() ?>
</div>
