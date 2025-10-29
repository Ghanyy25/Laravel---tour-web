@extends('template.master')

@section('title', 'Kontak - Eksplor Makassar')

@section('content')
    <h2>Hubungi Kami</h2>
    <p>Silakan hubungi kami jika Anda memiliki pertanyaan lebih lanjut.</p>

    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <h3>Informasi Kontak</h3>
            <p><strong>Alamat:</strong><br>Jl. Pariwisata No. 123, Makassar, Sulawesi Selatan</p>
            <p><strong>Email:</strong><br>info@eksplormakassar.com</p>
            <p><strong>Telepon:</strong><br>(0411) 123-456</p>
        </div>

        <div style="flex: 2;">
            <h3>Form Kontak Sederhana</h3>
            <form action="#" method="POST" class="contact-form" onsubmit="return false;">
                <div class="form-group">
                    <label for="nama">Nama Anda:</label>
                    <input type="text" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email Anda:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan:</label>
                    <textarea id="pesan" name="pesan" rows="5"></textarea>
                </div>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </div>
@endsection