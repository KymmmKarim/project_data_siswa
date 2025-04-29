<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pantau Data Siswa - Aplikasi Siswa</title>

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
        <a href="dashboard" class="hover:text-purple-500 transition">Input Data</a>
        <a href="beranda" class="hover:text-purple-500 transition">halaman utama</a>
      </nav>
    </div>
  </header>

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

            <!-- Contoh data lainnya -->
            <tr class="border-b hover:bg-gray-100">
              <td class="py-4 px-6">Siswa B</td>
              <td class="py-4 px-6">siswab@example.com</td>
              <td class="py-4 px-6">11 RPL</td>
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
