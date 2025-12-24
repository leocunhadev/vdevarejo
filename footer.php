<footer class="bg-black py-12 md:py-16 text-white border-t border-cinza-chumbo">
    <div class="container mx-auto px-4">
      <div class="mb-10">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="VdeVAREJO" class="h-16 w-auto">
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="flex flex-col">
          <h4 class="text-laranja font-poppins font-bold text-lg mb-4">Navegação</h4>
          <nav class="flex flex-col gap-2">
            <a href="<?php echo home_url( '/' ); ?>" class="text-cinza-claro hover:text-laranja transition-colors">Início</a>
            <a href="<?php echo home_url( '/sobre' ); ?>" class="text-cinza-claro hover:text-laranja transition-colors">Sobre Nós</a>
            <a href="<?php echo home_url( '/metodologia' ); ?>" class="text-cinza-claro hover:text-laranja transition-colors">A Metodologia</a>
            <a href="<?php echo home_url( '/como-funciona' ); ?>" class="text-cinza-claro hover:text-laranja transition-colors">Como Funciona</a>
            <!-- <a href="<?php // echo home_url( '/cases' ); ?>" class="text-cinza-claro hover:text-laranja transition-colors">Cases</a> -->
            <a href="<?php echo home_url( '/contato' ); ?>" class="text-cinza-claro hover:text-laranja transition-colors">Contato</a>
          </nav>
        </div>

        <div class="flex flex-col">
          <h4 class="text-laranja font-poppins font-bold text-lg mb-4">Contato</h4>
          <a href="mailto:contato@vdevarejo.com.br" class="text-cinza-claro hover:text-laranja transition-colors mb-4">
            contato@vdevarejo.com.br
          </a>
          <p class="text-cinza-claro">Governador Valadares - MG</p>
        </div>

        <div class="flex flex-col">
          <h4 class="text-laranja font-poppins font-bold text-lg mb-4">Redes Sociais</h4>
          <nav class="flex flex-col gap-2">
            <a href="https://instagram.com/vde.varejo" class="text-cinza-claro hover:text-laranja transition-colors">Instagram</a>
            <a href="#" class="text-cinza-claro hover:text-laranja transition-colors">LinkedIn</a>
          </nav>
        </div>
      </div>

      <div class="mt-12 pt-8 border-t border-cinza-chumbo text-center">
        <p class="text-cinza-medio text-sm">
          &copy; <?php echo date("Y"); ?> VdeVAREJO. Todos os direitos reservados.
        </p>
      </div>
    </div>
  </footer>

  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>