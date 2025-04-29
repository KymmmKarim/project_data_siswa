<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Berhasil Disimpan - Aplikasi Siswa</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

  <!-- Google Font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Poppins', sans-serif; }
    .container { max-width: 1200px; margin: 0 auto; padding: 0 15px; }
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="bg-white p-10 rounded-xl shadow-2xl text-center">
    <div class="text-green-500 mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
    </div>

    <h1 class="text-3xl font-bold text-gray-800 mb-4">Data Siswa Berhasil Ditambahkan!</h1>
    <p class="text-gray-600 mb-8">Data telah disimpan dengan sukses ke sistem kami.</p>

    <div class="flex justify-center space-x-6">
      <a href="pantau-siswa" class="bg-purple-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-purple-700 transition duration-200">
        Lanjut ke Pantau Siswa
      </a>
      <a href="beranda" class="bg-gray-300 text-gray-800 px-8 py-3 rounded-lg font-semibold hover:bg-gray-400 transition duration-200">
        Kembali ke Beranda
      </a>
    </div>
  </div>

</body>
</html>
