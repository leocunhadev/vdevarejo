<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Header -->
  <header class="sticky top-0 z-50 w-full border-b border-border bg-background/95 backdrop-blur supports-backdrop-filter:bg-background/60">
    <div class="container">
      <div class="logo">
        <a href="<?php echo home_url( '/' ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-black.svg" alt="VdeVAREJO">
        </a>
      </div>
      <nav>
        <a href="<?php echo home_url( '/' ); ?>">Início</a>
        <a href="<?php echo home_url( '/sobre' ); ?>">Sobre Nós</a>
        <a href="<?php echo home_url( '/metodologia' ); ?>">A Metodologia</a>
        <a href="<?php echo home_url( '/como-funciona' ); ?>">Como Funciona</a>
        <!-- <a href="<?php // echo home_url( '/cases' ); ?>">Cases</a> -->
        <a href="<?php echo home_url( '/contato' ); ?>">Contato</a>
        <a href="<?php echo home_url( '/fundador' ); ?>" class="btn btn-primary px-6 py-3 text-base text-white hover:text-white! bg-laranja">
          QUERO ESSA TRANSFORMAÇÃO
        </a>
      </nav>
    </div>
  </header>
