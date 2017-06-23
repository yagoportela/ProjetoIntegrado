<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Providers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="providers form large-9 medium-8 columns content">
    <?= $this->Form->create($provider,['id'=>'fornecedorr']) ?>
    <fieldset>
        <legend><?= __('Adicionar Fornecedores') ?></legend>
        <?php
            echo $this->Form->control('razao_social',['class'=>'Fornecedores']);
            echo $this->Form->control('nome_fantasia',['class'=>'Fornecedores']);
            echo $this->Form->control('cnpj',['class'=>'Fornecedores']);
            echo $this->Form->control('email',['class'=>'Fornecedores']);            
            

        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar'),['class'=>'botao-cadastro']) ?>
    <?= $this->Form->end() ?>
</div>
