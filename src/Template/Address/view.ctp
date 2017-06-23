<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Addres'), ['action' => 'edit', $addres->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Addres'), ['action' => 'delete', $addres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="address view large-9 medium-8 columns content">
    <h3><?= h($addres->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($addres->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Logradouro') ?></th>
            <td><?= h($addres->tipo_logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($addres->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($addres->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($addres->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($addres->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($addres->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf') ?></th>
            <td><?= h($addres->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($addres->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Cliente') ?></th>
            <td><?= $this->Number->format($addres->id_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Fornecedor') ?></th>
            <td><?= $this->Number->format($addres->id_fornecedor) ?></td>
        </tr>
    </table>
</div>
