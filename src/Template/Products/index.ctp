<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>


    <div class="content-box">
<?php foreach ($products as $product): ?>
    
        <div class="conteudo">

        
               <?= !empty($product->foto)? $this->Html->image("produtos/$product->foto",['alt'=>"$product->nome"]):$this->Html->image('350x150.png',['alt'=>'sem foto'])?>
                
            
                <p><?= h($product->nome) ?></p>
                <p>R$<?= $this->Number->format($product->preco_venda) ?></p>
                <div align="center">
                    <button class="leia-mais">
                        <a href="#">Acesse</a>
                    </button>
                </div>
        </div>
<?php endforeach; ?>
    </div>



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
