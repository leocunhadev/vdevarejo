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
  <header>
    <div class="container">
      <div class="logo">
        <a href="<?php echo home_url( '/' ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-header.png" alt="VdeVAREJO">
        </a>
      </div>
      <nav>
        <a href="<?php echo home_url( '/' ); ?>">Início</a>
        <a href="<?php echo home_url( '/sobre' ); ?>">Sobre Nós</a>
        <a href="<?php echo home_url( '/metodologia' ); ?>">A Metodologia</a>
        <a href="<?php echo home_url( '/como-funciona' ); ?>">Como Funciona</a>
        <a href="<?php echo home_url( '/cases' ); ?>">Cases</a>
        <a href="<?php echo home_url( '/contato' ); ?>">Contato</a>
        <a href="<?php echo home_url( '/fundador' ); ?>" class="btn btn-primary px-6 py-3 text-base hover:text-white">QUERO ESSA
          TRANSFORMAÇÃO</a>
      </nav>
    </div>
  </header>
