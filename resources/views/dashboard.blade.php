<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard - Aplikasi Siswa</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  
  <!-- Google Font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Poppins', sans-serif; }
    .container { max-width: 1200px; margin: 0 auto; padding: 0 15px; }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-gray-900 shadow-md">
    <div class="container flex justify-between items-center py-6">
      <h1 class="text-3xl font-extrabold text-white">Aplikasi Siswa</h1>
      <nav class="space-x-8 text-gray-300 font-semibold">
        <a href="pantau-siswa" class="hover:text-purple-500 transition">Pantau Data</a>
        <a href="beranda" class="hover:text-purple-500 transition">halaman utama</a>
      </nav>
    </div>
  </header>

  <!-- Dashboard - Input Data Siswa -->
  <section id="input-siswa" class="py-20 bg-white">
    <div class="container">
      <div class="bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-4xl font-semibold text-gray-900 mb-6">Input Data Siswa Baru</h2>
        <form action="#" method="POST" class="space-y-8">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <div>
              <label for="nama" class="block text-lg font-medium text-gray-700">Nama Lengkap</label>
              <input type="text" id="nama" name="nama" class="mt-2 block w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition" placeholder="Masukkan nama lengkap" />
            </div>
            <div>
              <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
              <input type="email" id="email" name="email" class="mt-2 block w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition" placeholder="Masukkan email siswa" />
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <div>
              <label for="kelas" class="block text-lg font-medium text-gray-700">Kelas</label>
              <input type="text" id="kelas" name="kelas" class="mt-2 block w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition" placeholder="Masukkan kelas siswa" />
            </div>
            <div>
              <label for="jurusan" class="block text-lg font-medium text-gray-700">Jurusan</label>
              <input type="text" id="jurusan" name="jurusan" class="mt-2 block w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition" placeholder="Masukkan jurusan siswa" />
            </div>
          </div>

          <div class="flex justify-center space-x-6 mt-8">
            <a href="sukses" type="submit" class="bg-purple-600 text-white px-8 py-3 rounded-lg font-semibold shadow-lg hover:bg-purple-700 transition duration-200">
              Simpan Data
            </a>
            <button type="button" class="bg-gray-200 text-gray-900 px-8 py-3 rounded-lg font-semibold shadow-md hover:bg-gray-300 transition duration-200">
              Batal
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Pantau Data Siswa -->
  <section id="pantau-siswa" class="py-20 bg-gray-50">
    <div class="container">
      <h2 class="text-4xl font-semibold text-gray-900 mb-8">Pantau Data Siswa</h2>
      
      <!-- Tabel Data Siswa -->
      <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
        <table class="min-w-full table-auto">
          <thead>
            <tr class="bg-gray-800 text-white">
              <th class="py-4 px-6 text-left">Nama</th>
              <th class="py-4 px-6 text-left">Email</th>
              <th class="py-4 px-6 text-left">Kelas</th>
              <th class="py-4 px-6 text-left">Jurusan</th>
              <th class="py-4 px-6 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- Data Siswa (Contoh) -->
            <tr class="border-b hover:bg-gray-100">
              <td class="py-4 px-6">Siswa A</td>
              <td class="py-4 px-6">siswaa@example.com</td>
              <td class="py-4 px-6">12 RPL</td>
              <td class="py-4 px-6">Rekayasa Perangkat Lunak</td>
              <td class="py-4 px-6 text-center">
                <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">Edit</button>
                <button class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-600 transition duration-200">Hapus</button>
              </td>
            </tr>
            <!-- Tambahkan Data Siswa lainnya disini -->
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white text-center py-8 mt-12">
    <p class="text-sm">&copy; 2025 Aplikasi Siswa. Semua hak dilindungi.</p>
  </footer>

</body>
</html>