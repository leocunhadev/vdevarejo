/** @type {import('tailwindcss').Config} */
module.exports = {
    // 1. Mapeia onde o Tailwind deve procurar as classes no seu HTML
    content: [
        "./src/**/*.{html,js}",
        "./*.html"
    ],
    theme: {
        extend: {
            // 2. Adiciona as suas cores personalizadas
            colors: {
                // O Tailwind agora buscará o valor de --laranja definido no seu CSS
                'laranja': 'var(--laranja)',
                'laranja-hover': 'var(--laranja-hover)',
                'preto': 'var(--preto)',
                'cinza-chumbo': 'var(--cinza-chumbo)',
                'cinza-medio': 'var(--cinza-medio)',
                'cinza-claro': 'var(--cinza-claro)',
                'branco': 'var(--branco)',
            },
            // 3. Adiciona as suas fontes personalizadas
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [],
}