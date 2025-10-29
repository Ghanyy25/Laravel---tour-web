@extends('template.master')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Wisata Anda</title>
    
    {{-- Menggunakan Tailwind CSS via CDN untuk kemudahan --}}
    {{-- Dalam proyek nyata, gunakan Vite (npm run dev) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- (Opsional) Jika Anda menggunakan plugin Tailwind --}}
    <script>
      tailwind.config = {
        plugins: [
          require('@tailwindcss/line-clamp'),
        ],
      }
    </script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <a href="/" class="text-2xl font-bold text-blue-600">TravelGo</a>
                </div>
                <div class="flex space-x-6">
                    <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
                    <a href="{{ route('destinations.index') }}" class="text-blue-600 font-semibold">Destinasi</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600">Tentang Kami</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600">Kontak</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        {{-- Di sinilah konten dari file 'index.blade.php' akan disuntikkan --}}
        @yield('content')
    </main>
    <footer class="bg-gray-800 text-gray-300 py-8 mt-16">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; {{ date('Y') }} TravelGo. Semua Hak Dilindungi.</p>
            <p class="text-sm text-gray-500 mt-2">
                Dibuat dengan ❤️ di Laravel
            </p>
        </div>
    </footer>
    </body>
</html>

@endsection