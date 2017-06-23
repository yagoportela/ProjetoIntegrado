<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Provider'), ['action' => 'edit', $provider->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Provider'), ['action' => 'delete', $provider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Providers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="providers view large-9 medium-8 columns content">
    <h3><?= h($provider->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Razao Social') ?></th>
            <td><?= h($provider->razao_social) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Fantasia') ?></th>
            <td><?= h($provider->nome_fantasia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($provider->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($provider->email) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($provider->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Cadastro') ?></th>
            <td><?= h($provider->data_cadastro) ?></td>
        </tr>
    </table>
</div>
