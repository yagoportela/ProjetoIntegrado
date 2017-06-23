<?= $this->Html->css('style.css') ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="customers form large-6 medium-6 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Cadastro') ?></legend>
        <?php
            echo $this->Form->control('razao_social');
            echo $this->Form->control('nome_fantasia');
            echo $this->Form->control('cnpj');
            echo $this->Form->Control('email');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar'),['class'=>'botao-cadastro']) ?>
    <?= $this->Form->end() ?>
</div>
