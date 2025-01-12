@extends('layouts.app')

@section('content')
<section id="materi" class="materi-section">
    <div class="container">
        <h2>Respon Bencana !</h2>
        <div class="news-grid">
            <article class="news-card pra">
                <img src="{{ asset('images/work-in-progress.png') }}" alt="Logo" width="80" height="5rem">
                <h3>Pra-Banjir</h3>
                <p>Bersiap sebelum banjir tiba. Periksa saluran air, perkuat tanggul, dan simpan perlengkapan darurat. Tingkatkan kewaspadaan dengan memantau prakiraan cuaca dan informasi terkini. Cegah risiko, selamatkan lingkungan!</p>
                <a href="{{ route('materi.potensi') }}" class="read-more">Baca Selengkapnya</a>
            </article>
            <article class="news-card saat">
                <img src="{{ asset('images/work-in-progress.png') }}" alt="Logo" width="80" height="5rem">
                <h3>Intra-Banjir</h3>
                <p>Saat banjir terjadi, utamakan keselamatan. Cari tempat tinggi yang aman, matikan aliran listrik, dan hindari arus deras. Bantu sesama dan ikuti arahan evakuasi. Bertindak cepat, lindungi nyawa dan harta benda!</p>
                <a href="{{ route('materi.respon') }}" class="read-more">Baca Selengkapnya</a>
            </article>
            <article class="news-card pasca">
                <img src="{{ asset('images/work-in-progress.png') }}" alt="Logo" width="80" height="5rem">
                <h3>Edukasi Siap Siaga Bencana</h3>
                <p>Setelah banjir surut, periksa kondisi rumah dan pastikan keamanan listrik serta air bersih. Bersihkan lumpur dan sampah untuk mencegah penyakit. Bersama, kita bangkit dan membangun kembali kehidupan. Pulih lebih kuat, lindungi masa depan!</p>
                <a href="{{ route('materi.bencana') }}" class="read-more">Baca Selengkapnya</a>
            </article>
            <article class="news-card pra">
                <img src="{{ asset('images/work-in-progress.png') }}" alt="Logo" width="80" height="5rem">
                <h3>Pra-Banjir</h3>
                <p>Bersiap sebelum banjir tiba. Periksa saluran air, perkuat tanggul, dan simpan perlengkapan darurat. Tingkatkan kewaspadaan dengan memantau prakiraan cuaca dan informasi terkini. Cegah risiko, selamatkan lingkungan!</p>
                <a href="{{ route('materi.potensi') }}" class="read-more">Baca Selengkapnya</a>
            </article>
        </div>
    </div>
</section>
@endsection