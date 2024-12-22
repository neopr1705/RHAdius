@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Respon Kesehatan: Rapid Health Assessment (RHA)</h1>
    <p class="description" style="font-size: 1.1rem;">
        Rapid Health Assessment (RHA) adalah proses penilaian kesehatan cepat yang dilakukan untuk menentukan status kesehatan individu atau kelompok, serta untuk menentukan tindakan yang diperlukan dalam situasi darurat. RHA biasanya digunakan dalam kondisi bencana atau krisis untuk mengidentifikasi kebutuhan medis yang mendesak dan merencanakan respons yang cepat.
    </p>

    <h2 class="subheading" style="margin-top: 20px;">Apa itu Rapid Health Assessment (RHA)?</h2>
    <p class="description" style="font-size: 1.1rem;">
        RHA merupakan langkah pertama dalam proses penanggulangan bencana yang membantu untuk menentukan prioritas medis yang harus segera ditangani. Tujuan utama dari RHA adalah untuk memberikan evaluasi cepat terkait status kesehatan di daerah terdampak bencana dan mendeteksi penyakit atau kondisi yang mungkin berkembang.
    </p>

    <h3 class="subheading" style="margin-top: 20px;">Proses RHA</h3>
    <ul style="font-size: 1.1rem; line-height: 1.6;">
        <li><strong>Pendataan Awal:</strong> Identifikasi lokasi dan jumlah korban yang terdampak oleh bencana atau situasi darurat lainnya.</li>
        <li><strong>Evaluasi Kesehatan:</strong> Penilaian kondisi fisik dan mental individu atau kelompok yang membutuhkan perawatan. Proses ini termasuk pemeriksaan umum, identifikasi gejala, dan pemetaan kondisi medis yang ada.</li>
        <li><strong>Prioritasi Tindakan:</strong> Setelah penilaian dilakukan, prioritas diberikan kepada individu yang membutuhkan perawatan medis segera, seperti orang yang mengalami luka berat, kesulitan bernapas, atau kondisi kritis lainnya.</li>
        <li><strong>Penyediaan Bantuan Medis:</strong> Berdasarkan hasil RHA, tim medis kemudian akan memberikan perawatan yang diperlukan dan merencanakan pengiriman sumber daya medis ke area yang lebih terdampak.</li>
    </ul>

    <h2 class="subheading" style="margin-top: 30px;">Manfaat RHA</h2>
    <p class="description" style="font-size: 1.1rem;">
        RHA memberikan berbagai manfaat penting dalam situasi darurat, antara lain:
    </p>
    <ul style="font-size: 1.1rem; line-height: 1.6;">
        <li><strong>Deteksi Cepat:</strong> Membantu dalam mendeteksi masalah kesehatan dengan cepat sehingga penanganan dapat dilakukan lebih awal.</li>
        <li><strong>Optimalisasi Sumber Daya:</strong> Menggunakan sumber daya medis dengan lebih efektif dan efisien dengan memfokuskan upaya pada kasus yang paling mendesak.</li>
        <li><strong>Koordinasi Respons:</strong> Menyediakan data yang dapat digunakan oleh tim penyelamat dan lembaga kesehatan untuk merencanakan langkah-langkah penyelamatan yang lebih terkoordinasi.</li>
    </ul>

    <h2 class="subheading" style="margin-top: 30px;">Gambar Representasi RHA</h2>
    <div style="display: flex; justify-content: center; margin-top: 20px;">
        <div style="width: 45%; text-align: center;">
            <h4>Proses RHA</h4>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="200" height="200">
                <circle cx="50" cy="50" r="45" fill="lightgreen" />
                <path d="M 50 10 Q 70 40 50 70 Q 30 40 50 10 Z" fill="yellow" opacity="0.6"/>
                <line x1="50" y1="10" x2="50" y2="70" stroke="black" stroke-width="2"/>
                <line x1="10" y1="50" x2="90" y2="50" stroke="black" stroke-width="2"/>
                <text x="50" y="50" font-size="10" text-anchor="middle" dy=".3em" fill="black">RHA</text>
            </svg>
        </div>
        <div style="width: 45%; text-align: center;">
            <h4>Penyediaan Bantuan Medis</h4>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="200" height="200">
                <rect x="20" y="20" width="60" height="60" fill="lightblue" />
                <circle cx="50" cy="50" r="20" fill="white" />
                <line x1="30" y1="30" x2="70" y2="70" stroke="red" stroke-width="4"/>
                <line x1="30" y1="70" x2="70" y2="30" stroke="red" stroke-width="4"/>
                <text x="50" y="50" font-size="12" text-anchor="middle" dy=".3em" fill="black">Pertolongan</text>
            </svg>
        </div>
    </div>

    <h2 class="subheading" style="margin-top: 30px;">Kesimpulan</h2>
    <p class="description" style="font-size: 1.1rem;">
        Rapid Health Assessment (RHA) adalah langkah penting dalam menangani situasi darurat, terutama dalam bencana alam, dengan tujuan untuk melakukan penilaian cepat terhadap kondisi kesehatan korban. Dengan informasi yang terkumpul melalui RHA, petugas medis dapat mengambil langkah-langkah yang tepat untuk mengurangi risiko dan menyelamatkan nyawa.
    </p>
    
    <p class="description" style="font-size: 1.1rem;">
       <a href="{{ route('home') }}" class="btn-link" style="color: #007bff;">Kembali ke halaman utama!</a>.
    </p>
</div>
@endsection
