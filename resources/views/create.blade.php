<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Criar Contato</title>
</head>
<body>
    <!-- component -->
<nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0 inner">
  
      <a href="home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Agenda Contatos</a><br>
      <span class="text-xs text-grey-dark">Pedro Góes</span>
  
    </div>
  
    <div class="sm:mb-0 self-center">
      <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
      <a href="#" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">CRUD - Tipos de contatos</a>
      <!-- </div> -->
  
    </div>
  </nav>

  <!-- component -->
<!--
  UI Design Prototype
  Link : https://dribbble.com/shots/10452538-React-UI-Components
-->
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
      <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
        <div class="max-w-md mx-auto">
          <div class="flex items-center space-x-5">
            <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
            <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
              <h2 class="leading-relaxed">Cadastrar Contato</h2>
              <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <form action="{{route('salvar_contato')}}" method="POST">
          <div class="divide-y divide-gray-200">
            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
              <div class="flex flex-col">
                <label class="leading-loose">Nome</label>
                <input type="text" 
                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" 
                placeholder="Event title"
                name="nome"
                for="nome">
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Endereço</label>
                <input type="text" 
                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" 
                placeholder="Optional"
                name="endereco"
                for="endereco">
              </div>
              <div class="flex items-center space-x-4">
                <div class="flex flex-col">
                  <label class="leading-loose">Data de Aniversário</label>
                  <div class="relative focus-within:text-gray-600 text-gray-400">
                    <input type="text" 
                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" 
                    placeholder="25/02/2020"
                    name="data_niver"
                    for="data_niver">
                    <div class="absolute left-3 top-2">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pt-4 flex items-center space-x-4">
                <a href="home"><button class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                  <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                </button></a>
                <button class="bg-blue-500 flex justify-center items-center w-full text-white px-2 py-2 rounded-md focus:outline-none">Create</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>