<?php
/**
  * @var \App\View\AppView $this
  */
?>
<script type="text/javascript">
$(document).ready(function(){
    $('#cep').blur(function(){
        var cep=$('#cep').val();
        $.ajax({
            url:'http://correiosapi.apphb.com/cep/'+cep,
            dataType:'json',
            crossDomain:true,
            contentType:"appliacation/json"
        },function(data){
            $('#tipo-logradouro').val(data.tipodelogradouro);
            $('#logradouro').val(data.logradouro);
            $('#bairro').val(data.bairro);
            $('#cidade').val(data.cidade);
            $('#uf').val(data.estado);
        });
    
    });
});
</script>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="address form large-9 medium-8 columns content">
    <?= $this->Form->create($addres) ?>
    <fieldset>
        <legend><?= __('Add Addres') ?></legend>
        <?php
            echo $this->Form->control('cep');
            echo $this->Form->control('tipo_logradouro');
            echo $this->Form->control('logradouro');
            echo $this->Form->control('numero');
            echo $this->Form->control('complemento');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cidade');
            echo $this->Form->control('uf');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
