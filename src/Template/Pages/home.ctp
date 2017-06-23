<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$descricao = 'Um mercado para você farmaceutica';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $descricao ?>
    </title>


     <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('carousel.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>


    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery-3.2.1.js') ?>
    <?= $this->Html->script('cadastroFornecedores.js') ?>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:500" rel="stylesheet">

</head>
<body class="home">

     <nav class="menu">
        <ul class="menu__topo">
                <li><?= $this->Html->link('Home',['controller'=>'Pages','action'=>'display'])?></li>
                <li><?= $this->Html->link('Produtos',['controller'=>'Products','action'=>'index'])?></li>
                <<li><?= $this->Html->link('Quem Somos?',['controller'=>'Pages','action'=>'sobre'])?></li>                
                <li><?= $this->Html->link('Login',['controller'=>'users','action'=>'login','id'=>'login'])?></li>
                <li><?= $this->Html->link('Cadastrar',['controller'=>'Customers','action'=>'add' ,'id'=>'cadastrar'])?></li> 
                <li><?= $this->Html->link('Fornecedor',['controller'=>'Providers','action'=>'add' ,'id'=>'fornecedor'])?></li>
                <li><?= $this->Html->link('Cadastrar Produto',['controller'=>'Products','action'=>'add'])?></li>              
                <li><?= $this->Html->link('Logout',['controller'=>'users','action'=>'logout' ,'id'=>'logout'])?></li>        
        </ul>    
    </nav>

<!--=============================_Topo do Home=======================================================-->
        <div class="navbar-wrapper">
            <div class="container">
            </div>
        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li style="border-color:#000000" data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li style="border-color:#000000" data-target="#myCarousel" data-slide-to="1"></li>
                <li style="border-color:#000000" data-target="#myCarousel" data-slide-to="2"></li>
                <li style="border-color:#000000" data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <?= $this->Html->image('images1.jpg', array('class' => 'first-slide', 'alt' => 'First slide', 'style'=> 'width:100%;height:100%;' )) ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 style="color:#696969">Os melhores remédios!</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                 <?= $this->Html->image('images2.jpg', array('class' => 'second-slide', 'alt' => 'Second slide', 'style'=> 'width:100%;height:100%;' )) ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 style="color:#000000">As melhores marcas</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                 <?= $this->Html->image('images3.jpg', array('class' => 'third-slide', 'alt' => 'Third slide', 'style'=> 'width:100%;height:100%;' )) ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 style="color:#4169E1">Os melhores fretes</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                 <?= $this->Html->image('images4.jpg', array('class' => 'for-slide', 'alt' => 'For slide', 'style'=> 'width:100%;height:100%;' )) ?>
                    <div class="carousel-caption">
                        <h1 style="color:#FF0000">Os melhores preços</h1>
                    </div>
                </div>
            </div>
             <?= $this->Html->tag('span', '', array('class' => 'left carousel-control', 'role' => 'button', 'data-slide' => 'prev', 'href' => '#myCarousel'))?>

             <?= $this->Html->tag('span', '', array('class' => 'right carousel-control', 'role' => 'button', 'data-slide' => 'next', 'href' => '#myCarousel'))?>
        </div>

        <!--==============================================================================================================-->


    <div class="content-box">


        <div class="conteudo">
            <?=  $this->Html->image('350x150.png',['alt'=>'qualquer coisa'])?>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum accusantium quaerat, doloremque nesciunt asperiores sed, culpa officiis! </p>
            <div align="center">
                <button class="leia-mais">
                    <a href="#">Acesse</a>
                    <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>

                </button>
            </div>
        </div>

        <div class="conteudo">
            <?=  $this->Html->image('350x150.png',['alt'=>'qualquer coisa'])?>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum accusantium quaerat, doloremque nesciunt asperiores sed, culpa officiis! </p>
            <div align="center">
                <button class="leia-mais">
                    <a href="#">Acesse</a>
                   <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>

                </button>
            </div>
        </div>

        <div class="conteudo">
            <?=  $this->Html->image('350x150.png',['alt'=>'qualquer coisa'])?>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum accusantium quaerat, doloremque nesciunt asperiores sed, culpa officiis! </p>
            <div align="center">
                <button class="leia-mais">
                    <a href="#">Acesse</a>
                    <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>

                </button>
            </div>
        </div>

        <div class="conteudo">
            <?=  $this->Html->image('350x150.png',['alt'=>'qualquer coisa'])?>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum accusantium quaerat, doloremque nesciunt asperiores sed, culpa officiis! </p>
            <div align="center">
                <button class="leia-mais">
                    <a href="#">Acesse</a>
                    <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>

                </button>
            </div>
        </div>

</div>



</body>
</html>