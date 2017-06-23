<?php
/**
  * @var \App\View\AppView $this
  */

    
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product,['enctype'=>'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('preco_custo');
            echo $this->Form->control('preco_venda');
            echo $this->Form->control('peso_bruto');
            echo $this->Form->control('peso_liquido');
            echo $this->Form->control('id_categoria');
            
            echo $this->Form->control('quantiade');
            echo $this->Form->control('foto',['type'=>'file']);
            echo $this->Form->control('informacoes_adicionais');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
