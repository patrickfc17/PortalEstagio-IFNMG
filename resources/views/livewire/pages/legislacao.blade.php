<div>
    <!-- Seção Legislação -->
    <section class="py-16 bg-[#F5FFFD]">
      <div class="max-w-screen-lg px-4 mx-auto">
        <!-- Título -->
        <h1 class="mb-6 text-4xl font-extrabold text-[#111311]">Legislação</h1>

        <!-- Texto de exemplo -->
        <p class="mb-8 text-lg text-gray-700">
            A legislação brasileira que regula as atividades de estágio está prevista na Lei nº 11.788, de 25 de setembro de 2008, também conhecida como a Lei do Estágio. Essa norma tem como objetivo estabelecer diretrizes claras para a realização de estágios no país, garantindo direitos aos estudantes e definindo as responsabilidades de instituições de ensino, concedentes de estágio e estagiários.
        </p>

        <!-- Espaço para imagem -->
        <div class="flex justify-center mb-8">
          <!-- Substitua o link pela imagem real -->
          <img src="{{ asset('img/legislacao.jpg') }}" alt="Imagem sobre legislação" class="rounded-lg shadow-lg">
        </div>

        <!-- Download do PDF -->
        <div class="flex items-center p-4 space-x-4 bg-white border border-gray-300 rounded-lg shadow-md">
          <img src="https://via.placeholder.com/80" alt="Icone PDF" class="h-12">
          <div>
            <h2 class="text-lg font-semibold text-[#111311]">Lei do Estágio (Lei N°11.788)</h2>
            <div class="mt-2 space-x-4">
              <a href="{{ route('legislacao-download') }}" target="_blank" class="text-[#FF2020] font-medium hover:underline">&#x2193; Download (.pdf)</a>
              <span>|</span>
              <a href="#" class="text-[#03D216] font-medium hover:underline">Visualizar</a>
            </div>
          </div>
        </div>
        <div class="flex items-center p-4 mt-12 space-x-4 bg-white border border-gray-300 rounded-lg shadow-md">
            <img src="https://via.placeholder.com/80" alt="Icone PDF" class="h-12">
            <div>
              <h2 class="text-lg font-semibold text-[#111311]">Regulamento</h2>
              <div class="mt-2 space-x-4">
                <a href="{{ route('regulamento-download') }}" target="_blank" class="text-[#FF2020] font-medium hover:underline">&#x2193; Download (.pdf)</a>
                <span>|</span>
                <a href="#" class="text-[#03D216] font-medium hover:underline">Visualizar</a>
              </div>
            </div>
          </div>
      </div>
    </section>
</div>
