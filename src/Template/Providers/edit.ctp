<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $provider->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Providers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="providers form large-9 medium-8 columns content">
    <?= $this->Form->create($provider) ?>
    <fieldset>
        <legend><?= __('Edit Provider') ?></legend>
        <?php
            echo $this->Form->control('razao_social');
            echo $this->Form->control('nome_fantasia');
            echo $this->Form->control('cnpj');
            echo $this->Form->control('email');
            echo $this->Form->control('data_cadastro', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
