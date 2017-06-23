<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
    
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->script('jquery-3.2.1.js') ?>
    <?= $this->Html->script('cadastroFornecedores.js') ?>
    <?= $this->Html->css('style.css') ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>   
    

    <script type="text/javascript">
    $(document).ready(function(){
         $('#cep').blur(function(){
            var cep=$('#cep').val();
            var url='https://viacep.com.br/ws/'+cep+'/json/';
            $.get(url,function(data){                            
            $('#logradouro').val(data.logradouro);
            $('#bairro').val(data.bairro);
            $('#cidade').val(data.localidade);
            $('#uf').val(data.uf);
            });
        });
    });
       
    </script>
</head>
<body>

 <nav class="menu">
    <ul class="menu__topo">
            <li><?= $this->Html->link('Home',['controller'=>'Pages','action'=>'display'])?></li>
            <li><?= $this->Html->link('Produtos',['controller'=>'Products','action'=>'index'])?></li>
            <li><?= $this->Html->link('Quem Somos?',['controller'=>'Pages','action'=>'sobre'])?></li>                
            <li><?= $this->Html->link('Login',['controller'=>'users','action'=>'login','id'=>'login'])?></li>
            <li><?= $this->Html->link('Cadastrar',['controller'=>'Customers','action'=>'add' ,'id'=>'cadastrar'])?></li> 
            <li><?= $this->Html->link('Fornecedor',['controller'=>'Providers','action'=>'add' ,'id'=>'fornecedor'])?></li>     
            <li><?= $this->Html->link('Cadastrar Produto',['controller'=>'Products','action'=>'add'])?></li>               
            <li><?= $this->Html->link('Logout',['controller'=>'users','action'=>'logout' ,'id'=>'logout'])?></li>               
        </ul>    
</nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

    <ul>
    <!--<?php foreach ($todo as $item): ?>
      <li><?= $item ?></li>
    <?php endforeach; ?>-->
    </ul>
    
    <footer>
    </footer>
</body>
</html>