<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Home</title>
</head>
<body>

    <!-- component -->
<nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0 inner">
  
      <a href="#" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Agenda de Contatos</a><br>
      <span class="text-xs text-grey-dark">Pedro Góes</span>
  
    </div>
  
    <div class="sm:mb-0 self-center">
      <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
      <a href="#" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">CRUD-Tipos de Contatos</a>
      <!-- </div> -->
  
    </div>
  </nav>
    <!-- component -->
<div class="w-full max-w-screen-xl mx-auto px-6">
    <div class="flex justify-center p-4 px-3 py-10">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                    Item List
                </div>
                <div class="flex items-center bg-gray-200 rounded-md">
                    <div class="pl-2">
                        <svg class="fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path class="heroicon-ui"
                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                        </svg>
                    </div>
                    <input
                        class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none py-2 px-2"
                        id="search" type="text" placeholder="Search teams or members">
                </div>
                    <a href= "/create"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" style="margin-top: 15px;">
                        Novo Cadastro
                    </button></a>
                <div class="py-3 text-sm">
                    <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                        <span class="bg-gray-400 h-2 w-2 m-2 rounded-full"></span>
                        <div class="flex-grow font-medium px-2">Tighten Co.</div>
                        <div class="text-sm font-normal text-gray-500 tracking-wide">Team</div>
                    </div>
                    <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                        <span class="bg-green-400 h-2 w-2 m-2 rounded-full"></span>
                        <div class="flex-grow font-medium px-2">Taylor Otwell</div>
                        <div class="text-sm font-normal text-gray-500 tracking-wide">Member</div>
                    </div>
                    <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                        <span class="bg-gray-400 h-2 w-2 m-2 rounded-full"></span>
                        <div class="flex-grow font-medium px-2">Adam Wathan</div>
                        <div class="text-sm font-normal text-gray-500 tracking-wide">Member</div>
                    </div>
                    <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                        <span class="bg-gray-400 h-2 w-2 m-2 rounded-full"></span>
                        <div class="flex-grow font-medium px-2">Duke Street Studio Inc.</div>
                        <div class="text-sm font-normal text-gray-500 tracking-wide">Team</div>
                    </div>
                    <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                        <span class="bg-green-400 h-2 w-2 m-2 rounded-full"></span>
                        <div class="flex-grow font-medium px-2">Jeffrey Wey</div>
                        <div class="text-sm font-normal text-gray-500 tracking-wide">Member</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>