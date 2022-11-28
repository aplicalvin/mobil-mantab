<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("components/metadata.php"); ?>
  </head>
  <body>
    <!-- Memanggil Navbar -->
    <?php include("components/navbar.php"); ?>

    <div class="grid text-center py-8 gap-2">
      <h1 class="font-bold text-base sm:text-3xl md:text-5xl">
        Cek Garansi Mobil Anda, Disini!
      </h1>
      <p class="text-xs sm:text-base md:text-2xl">
        Mulai dari mobil untuk pribadi, mobil keluarga, hingga mobil untuk
        Angkutan. MobilMantab menyediakan semua solusi untuk kebutuhan kendaraan
        anda.
      </p>
    </div>

    <div class="flex justify-center mx-8">
      <form class="flex items-center w-full max-w-2xl">
        <label for="voice-search" class="sr-only">Telusuri</label>
        <div class="relative w-full">
          <div
            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
          ></div>
          <input
            type="text"
            id="voice-search"
            class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5"
            placeholder="Masukkan nomer seri mobil anda"
            required
          />
          <button
            type="button"
            class="absolute inset-y-0 right-0 flex items-center pr-3"
          ></button>
        </div>
        <button
          type="submit"
          class="inline-flex py-2.5 px-3 ml-2 text-sm font-medium text-white bg-red-600 rounded-lg border border-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300"
        >
          <svg
            aria-hidden="true"
            class="w-5 h-5 mr-2 -ml-1 md:hidden"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
            ></path>
          </svg>
          <p class="hidden md:flex">Telusuri</p>
        </button>
      </form>
    </div>

    <!-- Memanggil Footer -->
    <?php include("components/footer.php"); ?>
  </body>
</html>
