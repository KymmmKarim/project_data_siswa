<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kontak Kami</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gradient-to-br from-blue-100 to-purple-100 min-h-screen flex flex-col justify-between">

  <!-- Header -->
  <header class="bg-white shadow-lg py-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
      <div>
        <h1 class="text-4xl font-bold text-purple-700">Kontak Kami</h1>
        <p class="text-gray-500 text-sm">Kami senang mendengar dari Anda</p>
      </div>
      <nav class="space-x-6 text-gray-600 font-semibold text-sm">
        <a href="beranda" class="hover:text-purple-500 hover:underline transition duration-200">🏠 Halaman Utama</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-grow py-12">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10">

      <!-- Formulir Kontak -->
      <div class="bg-white rounded-3xl shadow-xl p-8 transform hover:scale-105 transition duration-500">
        <h2 class="text-2xl font-semibold text-blue-700 mb-6">📬 Kirim Pesan</h2>
        <form action="#" method="POST" class="space-y-5">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" id="name" name="name" required class="w-full p-3 border border-gray-300 rounded-xl focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded-xl focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
            <textarea id="message" name="message" rows="5" required class="w-full p-3 border border-gray-300 rounded-xl focus:ring-purple-500 focus:border-purple-500"></textarea>
          </div>
          <button type="submit" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-6 py-3 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
            Kirim Pesan
          </button>
        </form>
      </div>

      <!-- Info Kontak -->
      <div class="bg-white rounded-3xl shadow-xl p-8 transform hover:scale-105 transition duration-500">
        <h2 class="text-2xl font-semibold text-purple-700 mb-6">📌 Informasi Kontak</h2>
        <div class="text-gray-700 space-y-4 text-base">
          <p><strong>Alamat:</strong> Jl. Mawar No. 123, Bandung</p>
          <p><strong>Email:</strong> kontak@aplikasisiswa.com</p>
          <p><strong>Telepon:</strong> +62 812 3456 7890</p>
          <p><strong>Jam Operasional:</strong> Senin - Jumat, 08.00 - 17.00 WIB</p>
        </div>

        <div class="mt-8">
          <h3 class="text-lg font-medium text-gray-800 mb-3">🔗 Sosial Media</h3>
          <div class="flex space-x-3">
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm">Facebook</a>
            <a href="#" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-full text-sm">YouTube</a>
            <a href="#" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-full text-sm">Instagram</a>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white py-6 border-t text-center text-sm text-gray-500">
    <div class="max-w-7xl mx-auto px-4">
      &copy; 2025 Aplikasi Siswa. Semua Hak Dilindungi.
    </div>
  </footer>

</body>
</html>
