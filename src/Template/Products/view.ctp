<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($product->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><?= h($product->foto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Custo') ?></th>
            <td><?= $this->Number->format($product->preco_custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Venda') ?></th>
            <td><?= $this->Number->format($product->preco_venda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso Bruto') ?></th>
            <td><?= $this->Number->format($product->peso_bruto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso Liquido') ?></th>
            <td><?= $this->Number->format($product->peso_liquido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Categoria') ?></th>
            <td><?= $this->Number->format($product->id_categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Fornecedor') ?></th>
            <td><?= $this->Number->format($product->id_fornecedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantiade') ?></th>
            <td><?= $this->Number->format($product->quantiade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Cadastro') ?></th>
            <td><?= h($product->data_cadastro) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Informacoes Adicionais') ?></h4>
        <?= $this->Text->autoParagraph(h($product->informacoes_adicionais)); ?>
    </div>
</div>
