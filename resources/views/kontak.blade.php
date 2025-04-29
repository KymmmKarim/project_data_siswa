<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kontak Kami</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="bg-gradient-to-br from-indigo-50 to-indigo-100 min-h-screen">

  <!-- Header -->
  <header class="bg-white shadow-lg py-8">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-5xl font-extrabold text-indigo-800">Kontak Kami</h1>
          <p class="text-gray-600 text-lg">Kami siap melayani pertanyaan Anda.</p>
        </div>
        <nav class="space-x-8 text-gray-600 font-medium">
          <a href="beranda" class="hover:text-indigo-500 hover:underline transition">🏠 Halaman Utama</a>
        </nav>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-12">
      
      <!-- Formulir Kontak -->
      <div class="bg-white rounded-3xl shadow-lg p-10">
        <h2 class="text-3xl font-semibold text-indigo-700 mb-8">📬 Kirim Pesan</h2>
        <form action="#" method="POST" class="space-y-6">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" id="name" name="name" required class="w-full mt-1 p-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" required class="w-full mt-1 p-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500">
          </div>
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
            <textarea id="message" name="message" rows="6" required class="w-full mt-1 p-4 border border-gray-300 rounded-xl focus:ring-indigo-500 focus:border-indigo-500"></textarea>
          </div>
          <button type="submit" class="bg-gradient-to-r from-indigo-600 to-indigo-500 text-white px-8 py-4 rounded-xl shadow-lg hover:scale-105 transform transition duration-300">
            Kirim Pesan 🚀
          </button>
        </form>
      </div>

      <!-- Info Kontak -->
      <div class="bg-white rounded-3xl shadow-lg p-10">
        <h2 class="text-3xl font-semibold text-indigo-700 mb-8">📌 Informasi Kontak</h2>
        <div class="text-gray-700 space-y-6 text-lg">
          <p><strong>Alamat:</strong> Jl.gagak no.143c</p>
          <p><strong>Email:</strong> kontak@aplikasisiswa.com</p>
          <p><strong>Telepon:</strong> +62 812 3456 7890</p>
          <p><strong>Jam Operasional:</strong> Senin - Jumat, 09.00 - 16.00 WIB</p>
        </div>

        <div class="mt-8">
          <h3 class="text-xl font-medium text-gray-800 mb-4">🔗 Sosial Media</h3>
          <div class="flex space-x-6">
            <a href="https://www.facebook.com/" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl text-lg">Facebook</a>
            <a href="https://www.youtube.com/" target="_blank" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-xl text-lg">Youtube</a>
            <a href="https://www.instagram.com/" target="_blank" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded-xl text-lg">Instagram</a>
          </div>
        </div>

        <!-- Tombol WhatsApp -->
        <div class="mt-8">
          <a href="https://wa.me/6281234567890" target="_blank"
             class="inline-flex items-center px-8 py-4 bg-green-500 hover:bg-green-600 text-white text-xl font-semibold rounded-xl shadow-lg transition transform hover:scale-105">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M20.52 3.48A11.89 11.89 0 0 0 12 0C5.37 0 0 5.37 0 12c0 2.1.55 4.17 1.6 6l-1.6 6 6-1.6a11.93 11.93 0 0 0 6 1.6c6.63 0 12-5.37 12-12 0-3.18-1.24-6.2-3.48-8.52zM12 22c-1.62 0-3.2-.4-4.6-1.18l-.32-.17-3.54.94.94-3.54-.17-.32A9.97 9.97 0 0 1 2 12c0-5.52 4.48-10 10-10s10 4.48 10 10-4.48 10-10 10zm5.2-7.8c-.28-.14-1.63-.8-1.88-.9s-.44-.14-.62.14-.72.9-.88 1.1-.32.21-.6.07c-.28-.14-1.18-.43-2.25-1.38-.83-.74-1.4-1.65-1.57-1.93s-.02-.43.12-.57c.12-.12.28-.32.42-.48.14-.16.18-.28.28-.46.14-.28.07-.52-.04-.72s-.62-1.5-.86-2.06c-.22-.53-.45-.46-.62-.47H7.9c-.14 0-.37.05-.57.28s-.75.75-.75 1.83.77 2.13.88 2.28c.1.14 1.52 2.32 3.7 3.26.52.22.93.36 1.25.46.52.16.98.14 1.35.09.41-.06 1.25-.51 1.43-1 .18-.49.18-.91.13-.99-.06-.08-.24-.13-.5-.26z"/></svg>
            Chat WhatsApp
          </a>
        </div>
      </div>
    </div>

    <!-- Testimoni -->
    <div class="max-w-7xl mx-auto px-6 mt-16">
      <div class="bg-white rounded-3xl shadow-lg p-10">
        <h2 class="text-3xl font-semibold text-indigo-700 mb-8">💬 Testimoni Pelanggan</h2>
        <div class="space-y-6">
          <div class="bg-gray-50 p-6 rounded-xl shadow-md">
            <p class="text-xl font-semibold text-indigo-600">"Pelayanan yang luar biasa! Sangat memuaskan dan cepat responnya!"</p>
            <p class="text-sm text-gray-500">- Ahmad Rizki, Pelanggan Setia</p>
          </div>
          <div class="bg-gray-50 p-6 rounded-xl shadow-md">
            <p class="text-xl font-semibold text-indigo-600">"Layanan pelanggan sangat ramah dan selalu siap membantu!"</p>
            <p class="text-sm text-gray-500">- Nurul Aulia, Pelanggan</p>
          </div>
          <div class="bg-gray-50 p-6 rounded-xl shadow-md">
            <p class="text-xl font-semibold text-indigo-600">"Produk yang sangat berkualitas dan sesuai dengan kebutuhan saya!"</p>
            <p class="text-sm text-gray-500">- Taufik Hidayat, Pelanggan</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Peta Lokasi -->
    <div class="max-w-7xl mx-auto px-6 mt-16">
      <div class="bg-white rounded-3xl shadow-lg p-10">
        <h2 class="text-3xl font-semibold text-indigo-700 mb-8">📍 Lokasi Kami</h2>
        <div class="w-full h-96">
          <iframe src="https://www.google.com/maps?q=Jl.+Gagak+No.143,+Sadang+Serang,+Kecamatan+Coblong,+Kota+Bandung,+Jawa+Barat+40133&hl=id&z=17&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white mt-24 py-8 border-t">
    <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-500">
      &copy; 2025 Aplikasi Siswa. Semua Hak Dilindungi.
    </div>
  </footer>

</body>
</html>
