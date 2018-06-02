<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <!-- Bootstrap -->
    <?php wp_head(); ?>

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
  <div class="container-fluid">
    <div class="row">

        <div class="show">
          <?php

              $header_menu_args = array(
            'theme_location'  => 'Principal',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'collapse navbar-collapse',
            'menu_id'         => 'bs-example-navbar-collapse-1',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
            'depth'           => 3,
            'walker'          => ''
            );

            $menu_nav_right = array(
          'theme_location'  => 'navbar-right',
          'menu'            => '',
          'container'       => 'nav',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => '',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav navbar-right">%3$s</ul>',
          'depth'           => 3,
          'walker'          => ''
          );

          $menu_callapse = array(
        'theme_location'  => 'callapse',
        'menu'            => '',
        'container'       => 'nav',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav navbar-right">%3$s</ul>',
        'depth'           => 3,
        'walker'          => ''
        );






          ?>

        <div class="container-fluid">
            <div class="row">
              <?php putRevSlider('home', 'homepage'); ?>
                <div class="show">
                  <!-- MEUNU NAV -->
                  <nav class="navbar-personal navbar  navbar-fixed-top sombra">
                    <div class="container">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                          <?php $template_directory = get_template_directory_uri(); ?>
                        <a class="navbar-brand" href="#"><img class="logo" src="<?php echo $template_directory;?>/img/logo-recanto-da-serra.png"/></a>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <?php wp_nav_menu($header_menu_args); ?>
                      <?php wp_nav_menu($menu_nav_right);?>
              </nav>




  <h1><?php //bloginfo('name'); ?></h1>
  <?php //bloginfo('description'); ?>
