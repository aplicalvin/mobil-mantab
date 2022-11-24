<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("components/metadata.php"); ?>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      MobilMantab - Mobil Listrik Berkualitas, Lebih Hemat, Ramah Lingkungan
    </title>
    <link rel="shortcut icon" href="assets/Favicon.png" type="image/x-icon" />
    <!-- css -->
    <link rel="stylesheet" href="css/output.css" />
    <link rel="stylesheet" href="css/suplement.css" />

    <!-- SwiperJS -->
    <link rel="stylesheet" href="swiperjs/swiper-bundle.min.css" />

    <!-- Leaflet -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
      integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
      crossorigin=""
    />
    <script
      src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
      integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
      crossorigin=""
    ></script>

    <script>
      ACCESS_TOKEN =
        "pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw";
      MB_ATTR =
        'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
      MB_URL =
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=" +
        ACCESS_TOKEN;
      OSM_URL = "https://tile.openstreetmap.org/{z}/{x}/{y}.png";
      OSM_ATTRIB =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    </script>
  </head>

  <body class="lg:h-screen">
    <!-- Memanggil Navbar -->
    <?php include("components/navbar.php"); ?>

    <div class="grid lg:flex lg:w-full h-screen lg:h-full">
      <div
        class="grid order-2 lg:order-1 w-full lg:max-w-lg cekbang sm:py-8 sm:px-16 gap-2"
      >
        <form class="flex items-center">
          <label for="simple-search" class="sr-only">Cari Toko Terdekat</label>
          <div class="relative w-full">
            <div
              class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
            >
            </div>
            <input
              type="text"
              id="simple-search"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 p-2.5"
              placeholder="Cari Toko Terdekat"
              required
            />
          </div>
          <button
            type="submit"
            class="py-2.5 px-5 ml-2 text-sm font-medium text-white bg-primary rounded-lg border border-red-600 focus:ring-4 focus:outline-none focus:ring-red-300"
          >
            <svg
              class="w-5 h-5"
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
            <span class="sr-only">Search</span>
          </button>
        </form>

        <div class="w-full h-fit cekbang">

        </div>

      </div>
      <div class="order-1 lg:order-2 w-full">
        <div id="map" class="w-full h-full"></div>
      </div>
    </div>

    <script>
      var map = L.map("map").setView(
        [-6.990350800440675, 110.41996679792149],
        90
      );

      L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      }).addTo(map);

      L.marker([-6.990350800440675, 110.41996679792149])
        .addTo(map)
        .bindPopup("Cabang SMKN8 Semarang")
        .openPopup();
    </script>
  </body>
</html>
