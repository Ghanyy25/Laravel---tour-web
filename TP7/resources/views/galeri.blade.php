@extends('layouts.master')

@section('title', 'Galeri Foto - Eksplor Makassar')

@section('content')
    <h2>Galeri Foto Makassar</h2>
    <p>Menikmati keindahan Makassar melalui tangkapan lensa.</p>

    <div class="gallery-grid">
        <img src="{{ asset('images/galeri-1-masjid-99kubah.jpg') }}" alt="Masjid 99 Kubah">
        <img src="{{ asset('images/galeri-2-losari-senja.jpg') }}" alt="Senja di Losari">
        <img src="{{ asset('images/galeri-3-rotterdam-sore.jpg') }}" alt="Benteng Rotterdam">
        <img src="{{ asset('images/galeri-4-kuliner-coto.jpg') }}" alt="Coto Makassar">
        <img src="{{ asset('images/galeri-5-kapal-phinisi.jpg') }}" alt="Kapal Phinisi">
        <img src="{{ asset('images/galeri-6-samalona.jpg') }}" alt="Pulau Samalona">
    </div>
@endsection