<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});

// Route Daftar Destinasi (Data Langsung di Sini)
Route::get('/destinasi', function () {
    // Data destinasi didefinisikan langsung di sini
    $destinasi = [
        [
            'slug' => 'benteng-rotterdam',
            'nama' => 'Benteng Rotterdam',
            'deskripsi_singkat' => 'Jejak sejarah peninggalan Kolonial Belanda yang megah berdiri kokoh di tepi pantai...',
            'gambar' => 'https://images.unsplash.com/photo-1618503610190-3f4103c0a5a5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' // Ganti URL/path gambar
        ],
        [
            'slug' => 'pantai-losari',
            'nama' => 'Pantai Losari',
            'deskripsi_singkat' => 'Ikon Kota Makassar yang terkenal dengan anjungan unik dan pemandangan matahari terbenam...',
            'gambar' => 'https://images.unsplash.com/photo-1587391219616-724f3316f0a3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' // Ganti URL/path gambar
        ],
        [
            'slug' => 'pulau-samalona',
            'nama' => 'Pulau Samalona',
            'deskripsi_singkat' => 'Surga kecil dekat Makassar dengan pasir putih halus dan air laut jernih...',
            'gambar' => 'https://images.unsplash.com/photo-1608657683186-e5c94b7a1e0b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' // Ganti URL/path gambar
        ],
        // Tambahkan destinasi lain di sini jika perlu
    ];
    // Kirim data langsung ke view 'destinasi'
    return view('destinasi', ['destinasiList' => $destinasi]);
})->name('destinasi.index'); // Nama route untuk daftar destinasi

Route::get('/kuliner', function () {
    return view('kuliner');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route Detail Destinasi (Data Langsung di Sini)
Route::get('/destinasi/{slug}', function ($slug) {
    // Data detail destinasi didefinisikan langsung di sini
    $dataDestinasi = [
        'benteng-rotterdam' => [
            'namaDestinasi' => 'Benteng Rotterdam',
            'gambarUrl' => 'https://images.unsplash.com/photo-1618503610190-3f4103c0a5a5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', // Ganti URL/path gambar
            'deskripsiLengkap' => 'Benteng Rotterdam, atau Fort Rotterdam, adalah salah satu benteng peninggalan kolonial Belanda yang paling terawat di Indonesia. Terletak strategis di tepi Pantai Makassar, benteng ini awalnya merupakan bagian dari Kerajaan Gowa-Tallo sebelum direbut dan dibangun ulang oleh VOC pada abad ke-17. Bentuknya yang menyerupai penyu melambangkan filosofi kerajaan. Di dalamnya kini terdapat Museum La Galigo yang menyimpan berbagai artefak sejarah dan budaya Sulawesi Selatan. Pengunjung dapat berjalan-jalan di sekitar bastion, dinding tebal, dan bangunan-bangunan tua, merasakan atmosfer sejarah yang kental.',
            'lokasi' => 'Jl. Ujung Pandang No.1, Bulo Gading, Kec. Ujung Pandang, Kota Makassar',
            'jamBuka' => 'Setiap Hari, 08:00 - 18:00 WITA',
            'tiket' => 'Gratis (Museum mungkin berbayar)'
        ],
        'pantai-losari' => [
            'namaDestinasi' => 'Pantai Losari',
            'gambarUrl' => 'https://images.unsplash.com/photo-1587391219616-724f3316f0a3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', // Ganti URL/path gambar
            'deskripsiLengkap' => 'Pantai Losari adalah ikon yang tak terpisahkan dari Kota Makassar. Berbeda dari pantai pada umumnya, Losari tidak memiliki pasir, melainkan anjungan beton yang menjorok ke laut. Tempat ini menjadi pusat aktivitas warga, terutama saat sore hari menjelang matahari terbenam. Pemandangan sunset di Losari sangat terkenal keindahannya. Di sepanjang anjungan, terdapat banyak penjual makanan khas seperti Pisang Epe, Coto Makassar, dan hidangan laut segar. Tulisan raksasa "PANTAI LOSARI" dan "MAKASSAR" menjadi spot foto favorit pengunjung.',
            'lokasi' => 'Jl. Penghibur, Kota Makassar',
            'jamBuka' => '24 Jam',
            'tiket' => 'Gratis'
        ],
        'pulau-samalona' => [
            'namaDestinasi' => 'Pulau Samalona',
            'gambarUrl' => 'https://images.unsplash.com/photo-1608657683186-e5c94b7a1e0b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', // Ganti URL/path gambar
            'deskripsiLengkap' => 'Pulau Samalona adalah sebuah pulau kecil yang terletak tidak jauh dari lepas pantai Makassar, dapat dicapai sekitar 30-45 menit dengan perahu motor. Pulau ini menawarkan pesona pantai tropis dengan pasir putih yang sangat halus dan air laut biru jernih. Samalona menjadi destinasi favorit untuk aktivitas snorkeling dan diving ringan karena keindahan terumbu karang dan biota laut di sekitarnya. Pengunjung juga bisa menyewa pondok-pondok kecil untuk bersantai atau menikmati hidangan laut segar yang ditawarkan oleh penduduk setempat.',
            'lokasi' => 'Sekitar 7 km dari Pantai Losari (via perahu)',
            'jamBuka' => 'Umumnya pagi hingga sore',
            'tiket' => 'Gratis (biaya perahu & sewa fasilitas berlaku)'
        ],
        // Tambahkan data detail untuk slug destinasi lain jika ada
    ];

    // Cari data berdasarkan slug yang diterima dari URL
    $destinasi = $dataDestinasi[$slug] ?? null;

    // Jika data tidak ditemukan, tampilkan halaman 404 Not Found
    if (!$destinasi) {
        abort(404);
    }

    // Kirim data yang ditemukan ke view 'destinasi-detail'
    return view('destinasi-detail', $destinasi);

})->name('destinasi.show'); // Nama route untuk detail destinasi