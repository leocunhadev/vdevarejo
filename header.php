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
      <div class="md:hidden">
        <div class="flex justify-between items-center relative">
          <button id="menu-btn" class="block md:hidden text-preto focus:outline-none cursor-pointer">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>


  </header>
  <div id="menu" class="top-0 right-0 z-40 flex-col md:hidden transition-all bg-preto/80 h-screen w-screen fixed hidden">
    <div class="p-8 top-0 right-0 bg-branco h-full absolute">
      <ul class="pt-16 top-full left-0 w-full flex-col space-y-4 md:static md:flex-row md:w-auto md:p-0 md:space-y-0 md:space-x-8 transition-all">
        <li><a href="<?php echo home_url( '/' ); ?>" class="text-preto hover:text-laranja transition-colors font-bold">Início</a></li>
        <li><a href="<?php echo home_url( '/sobre' ); ?>" class="text-preto hover:text-laranja transition-colors font-bold">Sobre Nós</a></li>
        <li><a href="<?php echo home_url( '/metodologia' ); ?>" class="text-preto hover:text-laranja transition-colors font-bold">A Metodologia</a></li>
        <li><a href="<?php echo home_url( '/como-funciona' ); ?>" class="text-preto hover:text-laranja transition-colors font-bold">Como Funciona</a></li>
        <li><a href="<?php echo home_url( '/contato' ); ?>" class="text-preto hover:text-laranja transition-colors font-bold">Contato</a></li>
        <li><a href="<?php echo home_url( '/fundador' ); ?>" class="btn btn-primary px-6 p-1 text-xs! text-white hover:text-white! bg-laranja">
          QUERO ESSA TRANSFORMAÇÃO
        </a></li>
      </ul>
    </div>
  </div>
