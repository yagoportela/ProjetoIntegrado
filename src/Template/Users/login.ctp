<?= $this->Html->css('style.css') ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="geral">
  <div class="texto_lateral">
    <h4><b>Neuro Med</b></h4>
    <p>Um novo conceito em leilões</p>
    <hr>
    <p><i class="fa fa-users" aria-hidden="true"></i> Todas as empresas farmaceuticas estão aqui.</p>
    <p><i class="fa fa-bell" aria-hidden="true"></i> Cadastre já sua empresa.</p>
    <p><i class="fa fa-lock" aria-hidden="true"></i>
 Serviço com segurança</p>
  </div>
  <div class="formulario_login">
    <?= $this->Form->create() ?>
    <?= $this->Form->input('Login',['type'=>'text', "placeholder" => "Login",'name'=>'usuario']) ?>
    <?= $this->Form->input('Senha:', array( "placeholder"=>"Senha",'type'=>'password','name'=>'password')) ?>
    <?= $this->Form->button(__('Logar'),['value'=>"Logar"]) ?>
    <?= $this->Form->end()?>

  </div>
</div>

