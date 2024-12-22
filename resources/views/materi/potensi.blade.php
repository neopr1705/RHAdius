@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Rapid Health Assessment</h1>
    <p>Rapid Health Assessment (RHA) adalah metode cepat untuk mengevaluasi dampak bencana terhadap kesehatan masyarakat. Evaluasi ini membantu tim respons dalam mengidentifikasi kebutuhan mendesak, sumber daya yang diperlukan, dan tindakan prioritas untuk menyelamatkan nyawa serta mengurangi dampak jangka panjang.</p>

    <h2>Informasi Bencana Terkini</h2>
    <p>Berikut adalah detail terkini tentang bencana yang terjadi dan dampaknya terhadap komunitas:</p>

    <div class="disaster-info">
        <ul>
            <li><strong>Jenis Bencana:</strong> Gempa Bumi</li>
            <li><strong>Lokasi:</strong> Kabupaten X</li>
            <li><strong>Skala:</strong> 6.5 SR</li>
            <li><strong>Korban Jiwa:</strong> 50 Orang</li>
            <li><strong>Jumlah Pengungsi:</strong> 2.000 Orang</li>
        </ul>
    </div>

    <h2>Langkah-Langkah Rapid Health Assessment</h2>
    <ol>
        <li><strong>Pengumpulan Data:</strong> Menggunakan survei cepat di lapangan untuk mengidentifikasi kebutuhan kesehatan.</li>
        <li><strong>Analisis Risiko:</strong> Mengevaluasi risiko penyebaran penyakit menular, kekurangan gizi, dan kebutuhan air bersih.</li>
        <li><strong>Distribusi Bantuan:</strong> Mengatur pasokan obat-obatan, makanan, dan peralatan medis.</li>
        <li><strong>Koordinasi Tim:</strong> Melibatkan lembaga pemerintah dan organisasi kemanusiaan untuk respons yang efektif.</li>
    </ol>

    <h2>Akses Edukasi</h2>
    <p>Kami menyediakan materi edukasi terkait langkah mitigasi dan persiapan bencana. Klik di bawah ini untuk mempelajari lebih lanjut:</p>
    <a href="{{ route('materi.bencana') }}" class="btn btn-primary">Pelajari Selengkapnya</a>
</div>
@endsection
