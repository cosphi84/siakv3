<!DOCTYPE html>
<html>
  <head>
    <title>404: Halaman tidak ada</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <style type="text/css">
      .text-9xl{
      font-size: 14rem;
      }
      @media(max-width: 645px){
      .text-9xl{
      font-size: 5.75rem;
      }
      .text-6xl{
      font-size: 1.75rem;
      }
      .text-2xl {
      font-size: 1rem;
      line-height: 1.2rem;
      }
      .py-8 {
      padding-top: 1rem;
      padding-bottom: 1rem;
      }
      .px-6 {
      padding-left: 1.2rem;
      padding-right: 1.2rem;
      }
      .mr-6{
      margin-right: 0.5rem;
      }
      .px-12 {
      padding-left: 1rem;
      padding-right: 1rem;
      }
      }
    </style>
  </head>
  <body>
    <div class="bg-gradient-to-r from-purple-300 to-blue-200 dark:bg-gradient-to-r dark:from-slate-900 dark:to-slate-700">
      <div class="w-9/12 m-auto py-16 min-h-screen flex items-center justify-center">
        <div class="bg-white dark:bg-slate-600 shadow overflow-hidden sm:rounded-lg pb-8">
          <div class="border-t border-gray-200 text-center pt-8">
            <h1 class="text-9xl font-bold text-gray-700 dark:text-gray-300">404</h1>
            <h1 class="text-6xl font-medium py-8 tetx-gray-300 dark:text-gray-300">Halaman tidak ada. <i class="fa-solid fa-face-sad-cry"></i></h1>
            <p class="text-2xl pb-8 px-12 font-medium text-gray-700 dark:text-gray-300">Wah, halaman yang kamu minta tidak ada gaes. Coba cek kembali yaa. <i class="fa-solid fa-hands-praying"></i></p>
            <a href="{{ route('home')}}">
              <button class="bg-gradient-to-r from-purple-400 to-blue-500 hover:from-pink-500 hover:to-orange-500 text-white font-semibold px-6 py-3 rounded-md mr-6">
                <i class="fa-solid fa-house"></i> Depan
              </button>
            </a>
            <button class="bg-gradient-to-r from-red-400 to-red-500 hover:from-red-500 hover:to-red-500 text-white font-semibold px-6 py-3 rounded-md">
            Contact Us
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>