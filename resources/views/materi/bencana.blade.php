@extends('layouts.app')

@section('content')
<div id="pasca-banjir" class="container-potensi">
    <!-- First Section with Background Color -->
    <section id="pasca-banjir-1" class="posters">
        <div class="poster">
            <img src="{{ asset('images/poster/pasca-banjir1.png') }}" alt="Poster Pasca Banjir 1" class="fade-in-img">
        </div>
    </section>

    <!-- Second Section with Background Color -->
    <section id="pasca-banjir-2" class="posters-potensi">
        <div class="poster">
            <img src="{{ asset('images/poster/pasca-banjir2.png') }}" alt="Poster Pasca Banjir 2" class="fade-in-img">
        </div>

        <!-- Button to Go to Index Page -->
        <div class="back-button-potensi">
            <a href="{{ route('materi.siaga') }}#materi" class="btn btn-primary">Kembali Ke Siaga Bencana</a>
        </div>
    </section>
</div>
@endsection
