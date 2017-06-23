<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="address index large-9 medium-8 columns content">
    <h3><?= __('Address') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_fornecedor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($address as $addres): ?>
            <tr>
                <td><?= $this->Number->format($addres->id) ?></td>
                <td><?= h($addres->cep) ?></td>
                <td><?= h($addres->tipo_logradouro) ?></td>
                <td><?= h($addres->logradouro) ?></td>
                <td><?= h($addres->numero) ?></td>
                <td><?= h($addres->complemento) ?></td>
                <td><?= h($addres->bairro) ?></td>
                <td><?= h($addres->cidade) ?></td>
                <td><?= h($addres->uf) ?></td>
                <td><?= $this->Number->format($addres->id_cliente) ?></td>
                <td><?= $this->Number->format($addres->id_fornecedor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $addres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
