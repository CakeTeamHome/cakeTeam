<?php

$cakeDescription = 'MY First Cake Project';
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <title><?= $cakeDescription ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Realtor | Real Estate HTML5 Templates" >
        <meta name="description" content="Realtor | Real Estate HTML5 Template">
        <meta name="author" content="M_Adnan">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">-->
        <!-- FONTS ONLINE -->
<!--        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->

        <!--MAIN STYLE-->
<?php
echo $this->Html->css('bootstrap.min.css');
echo $this->Html->css('main.css');
echo $this->Html->css('style.css');
echo $this->Html->css('animate.css');
echo $this->Html->css('responsive.css');
echo $this->Html->css('font-awesome.min.css');
echo $this->Html->script('jquery-1.11.0.min.js');
echo $this->Html->script('wow.min.js');
echo $this->Html->script('bootstrap-select.js');
echo $this->Html->script('bootstrap.min.js');
echo $this->Html->script('owl.carousel.min.js');
echo $this->Html->script('jquery.sticky.js');
echo $this->Html->script('own-menu.js');
echo $this->Html->script('jquery.nouislider.min.js');
echo $this->Html->script('main.js');
?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <?= $this->Html->charset() ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    </head>
    <body>
        <div id="wrap" class="home-1"> 
        <?php echo $this->element('header'); ?>
        <?php echo $this->element('banner'); ?>

            <?php //$this->Flash->render() ?>

                <?php //$this->fetch('content') ?>
        <?php echo $this->element('footer'); ?>
        </div>
    </body>
</html>