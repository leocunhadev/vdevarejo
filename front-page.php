<?php
/* Template Name: Página Inicial */
get_header();
?>

  <!-- Hero Section -->
  <section class="hero-gradient py-20 md:py-32">
    <div class="container mx-auto px-4 relative z-10">
      <div class=" mx-auto text-center">
        <h1 class="text-hero mb-8">
          Seu varejo parou em 1980.<br>
          <span class="text-gradient">É hora de virar o jogo.</span>
        </h1>

        <p class="text-2xl mb-12 opacity-90 md:text-2xl text-secondary-foreground/90 max-w-3xl mx-auto font-medium">
          A primeira plataforma do Brasil 100% focada em transformar varejistas tradicionais em líderes de mercado.
          Metodologia validada. Comunidade de elite. Resultados mensuráveis.
        </p>

        <div class="flex flex-col sm:flex-row gap-6 justify-center">
          <a href="fundador.html">
            <button data-slot="button"
              class="cursor-pointer btn btn-primary inline-block text-xl px-12 py-4 rounded-md bg-laranja">
              QUERO ESSA TRANSFORMAÇÃO
            </button>
          </a>

          <a href="metodologia.html">
            <button data-slot="button"
              class="inline-flex items-center justify-center gap-2 whitespace-nowrap transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive shadow-xs dark:bg-transparent dark:border-input dark:hover:bg-input/50 h-10 rounded-md has-[>svg]:px-4 text-lg px-10 py-7 font-bold bg-transparent border-2 border-white text-white hover:bg-white hover:text-laranja cursor-pointer">Conheça
              a Metodologia</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Seção Problema -->
  <section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-center mb-12 text-3xl md:text-4xl font-poppins font-extrabold text-black">
        Reconhece alguma dessas situações?
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="card text-center">
          <div class="w-20 h-20 mx-auto mb-6 bg-laranja/10 rounded-full flex items-center justify-center">
            <span class="text-4xl">📉</span>
          </div>
          <h3 class="text-xl md:text-2xl mb-4 font-poppins font-bold">Parado no Tempo</h3>
          <p class="text-cinza-medio">
            Você faz tudo igual há 20 anos enquanto a concorrência avança. O que funcionava antes não funciona mais,
            mas você não sabe o que mudar.
          </p>
        </div>

        <div class="card text-center">
          <div class="w-20 h-20 mx-auto mb-6 bg-laranja/10 rounded-full flex items-center justify-center">
            <span class="text-4xl">👥</span>
          </div>
          <h3 class="text-xl md:text-2xl mb-4 font-poppins font-bold">Sucessão Ameaçada</h3>
          <p class="text-cinza-medio">
            Você construiu um império, mas tem medo de que tudo desmorone quando passar o bastão. Seu filho(a) não te
            escuta.
          </p>
        </div>

        <div class="card text-center">
          <div class="w-20 h-20 mx-auto mb-6 bg-laranja/10 rounded-full flex items-center justify-center">
            <span class="text-4xl">💰</span>
          </div>
          <h3 class="text-xl md:text-2xl mb-4 font-poppins font-bold">Vende Muito, Lucra Pouco</h3>
          <p class="text-cinza-medio">
            O faturamento até vai bem, mas no fim do mês não sobra nada. Onde está o erro?
          </p>
        </div>
      </div>

      <p class="text-center mt-12 max-w-3xl mx-auto text-lg md:text-xl text-cinza-chumbo leading-relaxed">
        Se você se identificou com pelo menos uma dessas situações, você não está sozinho.
        <strong class="text-laranja">98% dos varejistas PME enfrentam esses mesmos desafios.</strong>
        A boa notícia? Existe uma solução.
      </p>
    </div>
  </section>

  <section class="bg-dark py-16 md:py-24 text-white bg-black">
    <div class="container mx-auto px-4">
      <div class="text-center">
        <h2 class="text-3xl md:text-[2.5rem] leading-tight font-poppins font-extrabold mb-6">
          Apresentamos o VdeVAREJO:<br>
          <span class="text-gradient">A transformação que o seu negócio precisa.</span>
        </h2>

        <p class="text-lg md:text-xl max-w-3xl mx-auto opacity-90 leading-relaxed">
          Não vendemos cursos. Entregamos transformação. Um ecossistema completo para tirar seu varejo da estagnação e
          construir um legado de sucesso.
        </p>
      </div>
    </div>
  </section>

  <!-- Seção Fundadores -->
  <section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-center mb-12 text-3xl md:text-[2.5rem] font-poppins font-extrabold text-black leading-tight">
        A dupla perfeita para transformar o seu varejo.
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">

        <div class="card text-center flex flex-col items-center">
          <div class="w-30 h-30 mb-6 bg-cinza-claro rounded-full flex items-center justify-center">
            <span class="text-5xl font-black text-laranja">AF</span>
          </div>

          <div class="inline-block bg-laranja text-white px-4 py-2 rounded-full text-sm font-bold mb-4 shadow-sm">
            Sócio-Fundador
          </div>

          <h3 class="text-2xl font-poppins font-bold mb-2">Amir Faria</h3>
          <p class="text-laranja font-bold mb-4">A Força do Mercado</p>
          <p class="text-cinza-medio text-[0.9375rem] leading-relaxed">
            Idealizador do VdeVAREJO e proprietário da CHUA Distribuidora. Atende milhares de varejistas e conhece a dor
            de quem está no balcão.
          </p>
        </div>

        <div class="card text-center flex flex-col items-center">
          <div class="w-[120px] h-[120px] mb-6 bg-cinza-claro rounded-full flex items-center justify-center">
            <span class="text-5xl font-black text-laranja">DO</span>
          </div>

          <div class="inline-block bg-laranja text-white px-4 py-2 rounded-full text-sm font-bold mb-4 shadow-sm">
            Sócio-Fundador
          </div>

          <h3 class="text-2xl font-poppins font-bold mb-2">Douglas Oliveira</h3>
          <p class="text-laranja font-bold mb-4">A Mente Estratégica</p>
          <p class="text-cinza-medio text-[0.9375rem] leading-relaxed">
            21 anos de experiência em marketing para gigantes do varejo. Fundador da Dolivs. Com uma estratégia
            humanizada vem ativando grandes marcas pelo país.
          </p>
        </div>

      </div>
    </div>
  </section>

  <section class="bg-black py-20 md:py-28 text-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-[2.5rem] font-poppins font-extrabold mb-6 leading-tight">
        Seja um dos 100 primeiros do VdeVAREJO.
      </h2>

      <p class="text-lg md:text-xl mb-10 max-w-3xl mx-auto opacity-90">
        Oferta exclusiva e limitada. 20% de desconto vitalício em todos os nossos programas + benefícios VIP para quem
        entrar agora.
      </p>

      <a href="fundador.html" class="cursor-pointer btn btn-primary inline-block text-xl px-12 py-4 rounded-md bg-laranja">
        QUERO ESSA TRANSFORMAÇÃO
      </a>

      <p class="mt-6 text-sm md:text-base text-cinza-claro">
        ⏰ Oferta válida até 30 de Janeiro ou até esgotar as 100 vagas.
      </p>
    </div>
  </section>

<?php get_footer(); ?>
