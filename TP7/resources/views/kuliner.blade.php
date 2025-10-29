@extends('layouts.master')

@section('title', 'Kuliner Khas - Eksplor Makassar')

@section('content')
    <h2>Kuliner Khas Makassar</h2>
    <p>Jangan lewatkan untuk mencicipi hidangan lezat khas Makassar berikut ini:</p>

    <div class="card-container">
        <x-card 
            imageUrl="coto-makassar.jpg" 
            title="Coto Makassar" 
            description="Soto kental berkuah kaya rempah yang berisi jeroan dan daging sapi, biasanya dinikmati dengan buras atau ketupat." 
        />
        
        <x-card 
            imageUrl="pallu-basa.jpg" 
            title="Pallu Basa" 
            description="Mirip dengan Coto, namun kuahnya lebih kental karena ditambahkan kelapa parut sangrai. Sering disajikan dengan kuning telur mentah." 
        />
        
        <x-card 
            imageUrl="pisang-epe.jpg" 
            title="Pisang Epe" 
            description="Pisang kepok bakar yang dipipihkan, kemudian disiram dengan saus gula merah cair yang legit." 
        />
    </div>
@endsection