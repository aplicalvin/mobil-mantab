<?php 
require 'func/function.php';
$user_profile = mysqli_fetch_assoc(mysqli_query($conn, 'SELECT * FROM identifikasi_pengguna'));
// var_dump($user_profile);

if(isset($_POST['button'])){
  $user_nama = $_POST['nama'];
  $user_password = $_POST['password'];
  $result = mysqli_fetch_assoc( mysqli_query($conn, "SELECT * FROM identifikasi_pengguna WHERE username = '$user_nama' AND password = '$user_password'"));
  var_dump($result);
  if($result){
    header("Location: dashboard.php");
  }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("components/metadata.php"); ?>
</head>

<body>
  <div class="flex w-full   h-screen">
    <!-- For Login -->
    <div class="grid w-1/2">
      <!-- Memanggil Navbar -->
      <nav class="w-full px-16 py-8">
        <img src="assets/Font-Logo-red.png" width="123" alt="">
      </nav>

      <!-- Login -->
      <div class=" w-full  ">
        <div class="grid max-w-xs    mx-4 md:mx-auto gap-4">
          <div class="grid gap-2 ">
            <h1 class="text-2xl md:text-3xl font-semibold text-neutral-600">Selamat Datang,</h1>
            <p class="text-neutral-600 text-sm md:text-base font-light">
              Masuk untuk dapat membeli Mobil
            </p>
          </div>

          <form class="grid gap-2" method="POST">
            <div class="">
              <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
              <input type="username" id="username" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                placeholder="" required="" />
            </div>
            <div class="">
              <label for="password" class="flex mb-2 text-sm font-medium text-gray-900  ">
                <p class="w-full">Password</p> <a href=""
                  class="underline text-red-700 font-bold w-full text-right">Lupa
                  Password</a>
              </label>
              <input type="password" id="password" name="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                required="" />
            </div>
            <div class="flex items-start mb-6">
              <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value=""
                  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-red-300"
                  required="" />
              </div>
              <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Remember me</label>
            </div>
            <button type="submit" name="button"
              class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-base w-full sm:w-auto px-5 py-2.5 text-center text-bold">
              Masuk
            </button>
            <p class="font-thin text-center text-neutral-600 my-5 text-sm">
              Belum punya akun? <a href="sign-up.php" class="underline font-bold"> Daftar Disini</a>
            </p>
          </form>
        </div>
      </div>

      <!-- Footer -->
      <footer class="  h-fit">
        <h1 class="text-center">ArlanTheDev ©2022 All Right Reserved</h1>
      </footer>
    </div>

    <!-- Image -->
    <div class="w-1/2">
      <img src="assets/dummy/shugora-1.jpg" class="w-full h-screen" alt="" srcset="">
    </div>
  </div>


</body>

</html>