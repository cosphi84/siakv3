<div x-data="{ show: false }" class="relative my-2 flex items-center w-full">
    <input :type=" show ? 'text' : 'password' " {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
    
    <button @click="show = !show" type="button" class="absolute right-2 bg-transparent flex items-center justify-center text-gray-700">
        <i class="fa-solid fa-eye-slash dark:text-white" x-show="!show"></i>
        <i class="fa-solid fa-eye dark:text-white" x-show="show"></i>
    </button>
</div>