<!-- resources/views/beranda.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Beranda - Aplikasi Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 text-gray-800">

  <section id="tentang" class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-4 text-center">
      <h3 class="text-3xl font-bold text-gray-800 mb-4">Kenapa Memilih Kami?</h3>
      <p class="text-gray-600 text-lg mb-8">Aplikasi kami dirancang untuk memudahkan pengelolaan informasi siswa secara profesional dan efisien.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
        @foreach ($keunggulan as $item)
          <div class="bg-{{ $item->warna }} p-6 rounded-xl shadow">
            <h4 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->judul }}</h4>
            <p class="text-gray-600">{{ $item->deskripsi }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

</body>
</html>