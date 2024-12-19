<div>
  <div class="flex items-center justify-center min-h-screen bg-paper">
    <div class="max-w-xl p-12 bg-white border rounded-lg shadow-xl border-leaf">
      <a href="#">
        <h5 class="mb-10 text-3xl font-bold tracking-tight text-center text-leaf">Atenção!</h5>
      </a>
      <p class="w-full font-bold text-center mb-14 text-ink">
        Para continuar, é necessário preencher a ficha de cadastro do estagiário.
      </p>
      <div class="space-y-4 text-center">
        <a href="{{ route('/') }}" class="inline-flex items-center justify-center w-full px-6 py-4 text-lg font-medium text-center transition rounded-lg text-paper bg-grade hover:bg-ink focus:ring-4 focus:outline-none focus:ring-blue-300">
          Voltar
        </a>
        <a href="#" class="inline-flex items-center justify-center w-full px-6 py-4 text-lg font-medium text-center transition rounded-lg text-paper bg-leaf hover:bg-ink focus:ring-4 focus:outline-none focus:ring-blue-300">
          Continuar
          <svg class="w-5 h-5 rtl:rotate-180 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>
