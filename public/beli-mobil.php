<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("components/metadata.php"); ?>

    <!-- SwiperJS -->
    <link rel="stylesheet" href="swiperjs/swiper-bundle.min.css" />
  </head>
  <body>
    <!-- Memanggil Navbar -->
    <?php include("components/navbar.php"); ?>

    <div class="grid lg:flex my-8 max-w-7xl mx-auto">
        <div class="w-full lg:w-3/5  p-4">
            <img src="assets/dummy/shugora-1.jpg" class="w-full h-3p4 object-cover object-center rounded-3xl" alt="">
        </div>
        <div class="grid w-full lg:w-2/5 p-8 gap-4">
            <div class="grid gap-2">
                <p class="text-sm md:text-xl">2022 Mantab Variant</p>
                <h1 class="font-bold text-2xl md:text-4xl">MobilMantab Mantan Pacar Variant</h1>
                <div class="flex ">
                    <p class="text-xs md:text-base">Harga Mulai</p>
                    <h5 class="text-red-600 text-base md:text-3xl font-bold">Rp. 355.200.000,00</h5>
                </div>
            </div>
            <hr>
            <div class="grid gap-4">
                <div class="grid gap-2">
                    <h4 class="text-sm md:text-xl font-bold">Fitur Mobil</h4>
                    <div>
                        <ul class="flex gap-4 ">
                            <li class="w-fit px-2 py-1 text-sm md:text-xl text-white bg-stone-400 rounded-md">Car Feature</li>
                            <li class="w-fit px-2 py-1 text-sm md:text-xl text-white bg-stone-400 rounded-md">Car Feature</li>
                            <li class="w-fit px-2 py-1 text-sm md:text-xl text-white bg-stone-400 rounded-md">Car Feature</li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-2">
                    <h4 class="text-sm md:text-xl font-bold">Deskripsi</h4>
                    <p class="text-sm md:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ipsam recusandae nulla laboriosam iusto magni harum voluptatibus ab, quos sequi vitae hic tempore earum error maiores, officiis pariatur, commodi ipsum quam nihil cumque dolores. Voluptas magni error nam cumque inventore eveniet aliquid repellendus quidem neque tempora rem corrupti, animi atque.</p>
                </div>
            </div>
            <div class="grid w-full h-fit">
                <a href="" class="text-center bg-red-700 hover:bg-red-800 w-full py-2 text-white font-bold rounded-md">Get Started</a>
            </div>
        </div>
    </div>

    <!-- Memanggil Footer -->
    <?php include("components/footer.php"); ?>
  </body>
</html>
