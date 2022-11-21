    <?php
    require 'func/function.php';
    $user_profile = mysqli_query($conn, 'SELECT * FROM identifikasi_pengguna WHERE id = 1');
    $user_profile = mysqli_fetch_assoc($user_profile);

    ?>
    
    <nav class="w-full bg-primary border-gray-200  px-2 sm:px-4 py-2.5 rounded-none">
      <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
          <img src="assets/Font-Logo.png" class="mr-3 h-6 sm:h-9" alt="MobilMantab Logo">
          <!-- <span class="self-center text-xl font-semibold whitespace-nowrap">Flowbite</span> -->
        </a>
        <div class="flex items-center md:order-2">
          <button type="button"
            class="flex mr-3 text-sm bg-inherit rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300"
            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-lg border-white border-2" src="assets/dummy/shugora-1.jpg" alt="user photo">
          </button>
          <!-- Dropdown menu -->
          <div
            class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow"
            id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 621.25px);">
            <div class="py-3 px-4">
              <span class="block text-sm text-gray"><?= $user_profile['nama_pengguna'] ?></span>
              <span class="block text-sm font-medium text-gray-700 truncate"><?= $user_profile['email'] ?></span>
            </div>
            <ul class="py-1" aria-labelledby="user-menu-button">
              <li>
                <a href="dashboard.php"
                  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
              </li>
              <li>
                <a href="#"
                  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
              </li>
              <li>
                <a href="#"
                  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Earnings</a>
              </li>
              <li>
                <a href="#"
                  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Sign
                  out</a>
              </li>
            </ul>
          </div>
          <button data-collapse-toggle="mobile-menu-2" type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-white/70 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
            aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
          <ul
            class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-inherit">
            <li>
              <a href="cari-mobil.php"
                class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-red-600 hover:text-white rounded md:bg-transparent md:text-white/70 md:p-0 md:hover:bg-inherit md:hover:text-white"
                aria-current="page">Cari Mobil</a>
            </li>
            <li>
              <a href="lihat-fitur.php"
                class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-red-600 hover:text-white rounded md:bg-transparent md:text-white/70 md:p-0 md:hover:bg-inherit md:hover:text-white"
                aria-current="page">Lihat Fitur</a>
            </li>
            <li>
              <a href="cek-garansi.php"
                class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-red-600 hover:text-white rounded md:bg-transparent md:text-white/70 md:p-0 md:hover:bg-inherit md:hover:text-white"
                aria-current="page">Cek Garansi</a>
            </li>
            <li>
              <a href="cari-toko.php"
                class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-red-600 hover:text-white rounded md:bg-transparent md:text-white/70 md:p-0 md:hover:bg-inherit md:hover:text-white"
                aria-current="page">Toko Terdekat</a>
            </li>
            <!-- <li>
              <a href="#"
                class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-red-600 hover:text-white rounded md:bg-transparent md:text-white/70 md:p-0 md:hover:bg-inherit md:hover:text-white"
                aria-current="page">FAQ</a>
            </li> -->
            <li>
              <a href="tentang-kami.php"
                class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-red-600 hover:text-white rounded md:bg-transparent md:text-white/70 md:p-0 md:hover:bg-inherit md:hover:text-white"
                aria-current="page">Tentang Kami</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Javascript -->
    <script src="css/flowbite.js"></script>
