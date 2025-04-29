<!-- resources/views/beranda.blade.php -->
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beranda - Aplikasi Siswa</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  
  <!-- Google Font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
  
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    body { font-family: 'Poppins', sans-serif; }
  </style>
</head>
<body class="bg-gradient-to-br from-gray-800 to-black text-white">

  <!-- Header -->
  <header class="bg-gray-900 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-purple-600">Aplikasi Siswa</h1>
      <nav class="space-x-6 text-gray-300 font-medium">
        <a href="tentang" class="hover:text-purple-600">Tentang</a>
        <a href="kontak" class="hover:text-purple-600">Kontak</a>
        <a href="dashboard" class="hover:text-purple-600">mulai</a>
      </nav>
    </div>
  </header>

  <!-- Slideshow -->
  <div class="mySwiper swiper w-full h-[400px] md:h-[500px]">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 text-center px-6 py-12">
        <div>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Kelola Data Siswa Lebih Cepat</h2>
          <p class="text-2xl md:text-3xl mb-4">Input, edit, dan pantau informasi siswa dalam hitungan detik.</p>
          <h2 class="text-8xl">📊</h2>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide flex items-center justify-center bg-gradient-to-r from-green-500 to-blue-600 text-center px-6 py-12">
        <div>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Keamanan Data Terjamin</h2>
          <p class="text-2xl md:text-3xl mb-4">Akses hanya oleh pengguna berwenang.</p>
          <h2 class="text-8xl">🔐</h2>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide flex items-center justify-center bg-gradient-to-r from-pink-500 to-yellow-500 text-center px-6 py-12">
        <div>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Mudah Digunakan oleh Siapa Saja</h2>
          <p class="text-2xl md:text-3xl mb-4">Antarmuka simpel dan intuitif, cocok untuk semua pengguna.</p>
          <h2 class="text-8xl">🚀</h2>
        </div>
      </div>
    </div>

    <!-- Navigasi & Pagination -->
    <div class="swiper-button-next text-white"></div>
    <div class="swiper-button-prev text-white"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Tentang -->
  <section id="tentang" class="py-20 bg-gray-900 scroll-mt-24">
<div class="max-w-5xl mx-auto px-4 text-center">
<h3 class="text-3xl font-bold text-white mb-4">Kenapa Memilih Kami?</h3>
<p class="text-gray-300 text-lg mb-12">Aplikasi kami dirancang untuk memudahkan pengelolaan informasi siswa secara profesional dan efisien.</p>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
  @foreach ($keunggulan as $item)
    <div class="bg-gray-800 bg-opacity-70 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-3 hover:scale-105 backdrop-blur-md cursor-pointer group"
      style="background-color: {{ $item->warna }}">
      <h4 class="text-xl font-semibold text-purple-600 mb-2">{{ $item->judul }}</h4>
      <p class="text-gray-300">{{ $item->deskripsi }}</p>
    </div>
  @endforeach
  </div>
  </section>

  <!-- CTA -->
  <section class="py-20 bg-gradient-to-r from-purple-600 to-black text-white text-center">
    <h3 class="text-3xl font-bold mb-4">Siap untuk mulai?</h3>
    <p class="mb-8 text-lg">Hubungi kami hari ini dan dapatkan solusi terbaik untuk sekolah Anda.</p>
    <a href="#kontak" class="bg-white text-purple-600 font-semibold px-8 py-3 rounded-full shadow hover:bg-gray-100 transition-all">
      Kontak Sekarang
    </a>
  </section>

  <!-- Kontak -->
  <section id="kontak" class="py-20 bg-gray-900 scroll-mt-24">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h3 class="text-3xl font-bold text-white mb-6">Hubungi Kami</h3>
      <p class="text-gray-300 mb-4">Email: aplikasisiswa@example.com</p>
      <p class="text-gray-300">Telp: +62 812-3456-7890</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 border-t mt-12 py-6">
    <div class="max-w-7xl mx-auto px-4 text-center text-sm text-gray-500">
      &copy; 2025 Aplikasi Siswa. Semua hak dilindungi.
    </div>
  </footer>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Swiper Init -->
  <script>
    const swiper = new Swiper('.mySwiper', {
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>

</body>
</html>
