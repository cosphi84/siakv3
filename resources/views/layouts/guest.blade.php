<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>[x-cloak] { display: none !important; }</style>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- Scripts -->
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="bg-gray-200 dark:bg-dark w-full min-h-screen flex items-center justify-center">
            <div class="w-full py-8">                
                <div class="bg-white dark:bg-red-900 w-5/6 md:w-3/4 lg:w-2/3 xl:w-[500px] 2xl:w-[550px] mt-8 mx-auto md:px-10 lg:px-16 px-5 py-8 rounded-lg shadow-2xl">
                    <h2 class="text-center text-2xl font-bold tracking-wide text-gray-800 dark:text-gray-300 pb-2">Login ke SIAK</h2>                  
                    <hr />
                    <form method="POST" class="text-sm" action={{ route('login')}} >
                        @csrf
                        <div class="flex flex-col my-4">                            
                            <x-input-label for="username" :value="__('Username')" class="text-gray-700 dark:text-gray-300" />
                            <x-text-input 
                                id="username"
                                class="block mt-1"
                                name="username"
                                placeholder="Username"
                                type="text"
                                :value="old('username')"
                                required
                                autofocus
                                autocomplete="current-username" />
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>
                        
                        <div class="flex flex-col my-2">
                            <x-input-label for="username" :value="__('Password')" class="text-gray-700 dark:text-gray-300" />
                            <x-input-password 
                                id="password" 
                                class="blox mt-1 w-full" 
                                name="password" 
                                required
                                placeholder="Kata sandi"
                                />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex items-center mt-4">
                            <input type="checkbox" name="remember_me" id="remember_me" class="mr-2 focus:ring-0 rounded">
                            <label for="remember_me" class="text-gray-700 dark:text-gray-300">Tetap masuk</label>
                        </div>
                    
                        <div class="my-4 flex items-center justify-end space-x-4">
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-300 hover:underline">Lupa Sandi&nbsp;
                            <i class="fa-regular fa-face-frown hover:underline"></i> </a>
                            <button class="bg-teal-900 hover:bg-teal-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">
                                <i class="fa-solid fa-lock-open"></i>&nbsp; Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
