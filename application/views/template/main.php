<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <?php /* codeigniter-boilerplate: Page Title *******************************/ ?>
  <?php if($title):?>
  <?php /* Page title: used if the page object has a title */?>
  <title><?php echo $title?></title>
  <?else:?>
  <?php /* Generic site title: used if the page object has not a title */?>
  <title>__YOUR SITE TITLE HERE__</title>
  <?php endif;?>

  <?php /* codeigniter-boilerplate: Page Description**************************/ ?>
  <?php if($description):?>
  <?php /* Page description: used if the page object has a description */?>
  <meta name="description" content="<?php echo $description?>">
  <?else:?>
  <?php /* Generic site description: used if the page object has not a description */?>
  <meta name="description" content="__SITE DESCRIPTION HERE__">
  <?php endif;?>
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS concatenated and minified via ant build script-->
  <?php /* codeigniter-boilerplate: Styles **********************************/ ?>
  <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
  <?php foreach($css as $c):?>
  <link rel="stylesheet" href="<?php echo base_url()?>css/<?php echo $c?>">
  <?php endforeach;?>  
  <!-- end CSS-->

  <script src="<?php echo base_url()?>js/libs/modernizr-2.0.6.min.js"></script>
  
  <?php /* codeigniter-boilerplate: Google Fonts ****************************/ ?>
  <?php foreach($GFont as $f):?>
  <link  href="http://fonts.googleapis.com/css?family=<?php echo $f?>" rel="stylesheet" type="text/css" >
  <?php endforeach;?>  
  
</head>

<body>

  <div id="container">
    <header>
    <?php 
    /* codeigniter-boilerplate: main navigation *******************************/
    echo $nav
    ?>
    </header>
    <div id="main" role="main">
    <?php 
    /* codeigniter-boilerplate: content from single views *********************/
    echo $content
    ?>
    </div>
    <footer>

    </footer>
  </div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo base_url()?>js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="<?php echo base_url()?>js/plugins.js"></script>
  <script defer src="<?php echo base_url()?>js/script.js"></script>
  <!-- end scripts-->
  
  <?php /* codeigniter-boilerplate: Scripts *********************************/?>
  <?php foreach($javascript as $js):?>
  <script defer src="<?php echo base_url()?>js/<?php echo $js?>"></script>
  <?php endforeach;?>

  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>