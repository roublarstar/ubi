<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $this->fetch('title'); ?>
    </title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="p.terrier">
     
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('bootstrap-responsive.min');
    echo $this->Html->css('ubi');   
        
    echo $this->fetch('meta');
    echo $this->fetch('css');
    ?>
  </head>

  <body>

    <?php echo $this->Element('navbar'); ?>

    <div class="container">
        <?php echo $this->fetch('content'); ?>
    </div>
    
    <?php
    echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    echo $this->Html->script('bootstrap');
    echo $this->fetch('script');
    ?>
  </body>
</html>
