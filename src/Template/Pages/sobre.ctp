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

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery-3.2.1.js') ?>
    <?= $this->Html->script('cadastroFornecedores.js') ?>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:500" rel="stylesheet">
</head>
<body class="home">

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


 <div class="container marketing">
            <h1>Desenvolvedores</h1>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">Yago Oliveira</h2>
                    <p class="lead">Desenvolvedor
                    </p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <?= $this->Html->image('Perfil_Yago.jg', array('class' => 'first-slide', 'alt' => 'First slide', 'style'=> 'width:70%;height:70%;' )) ?>
                </div>
            </div>
            
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
            </footer>
        </div>

        </body>
        </html>