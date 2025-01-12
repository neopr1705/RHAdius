@extends('layouts.app')

@section('content')
<div class="container-potensi">
    <!-- First Section with Background Color -->
    <section class="posters">
        <div class="poster">
            <img src="{{ asset('images/poster/poster-pra1.jpg') }}" alt="Poster Pra1" class="fade-in-img">
        </div>
    </section>

    <!-- Second Section with Background Color -->
    <section class="posters-potensi">
        <div class="poster">
            <img src="{{ asset('images/poster/poster-pra2.jpg') }}" alt="Poster Pra2" class="fade-in-img">
        </div>

        <!-- Button to Go to Index Page -->
        <div class="back-button-potensi">
            <a href="{{ route('materi.siaga') }}#materi" class="btn btn-primary-potensi">Kembali Ke Siaga Bencana</a>
        </div>
    </section>
</div>
@endsection
