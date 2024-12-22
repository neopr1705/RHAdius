@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="heading">Edukasi Siaga Bencana</h1>
    <p class="description" style="font-size: 1.1rem;">
        Siaga bencana adalah langkah proaktif yang harus diambil oleh masyarakat dan lembaga terkait untuk mempersiapkan diri menghadapi berbagai jenis bencana. Dengan informasi dan kesiapan yang baik, dampak bencana dapat diminimalkan, dan bantuan bisa diberikan lebih cepat dan lebih efektif.
    </p>

    <h2 class="subheading">Jenis-Jenis Bencana dan Dampaknya</h2>
    <p class="description" style="font-size: 1.1rem;">
        Berikut adalah beberapa jenis bencana yang perlu diwaspadai beserta dampaknya terhadap masyarakat:
    </p>
    <ul class="list" style="font-size: 1rem; line-height: 1.6;">
        <li><strong>Gempa Bumi:</strong> Guncangan bumi yang dapat merusak bangunan, menimbulkan korban jiwa, serta menyebabkan longsor atau kebakaran.</li>
        <li><strong>Letusan Gunung Api:</strong> Erupsi vulkanik yang dapat menyebabkan hujan abu, lava, dan banjir lahar, merusak lingkungan dan mempengaruhi kesehatan.</li>
        <li><strong>Banjir:</strong> Kejadian berulang yang dapat merusak infrastruktur, menghancurkan rumah, dan mengganggu akses ke layanan dasar.</li>
        <li><strong>Angin Topan dan Puting Beliung:</strong> Bencana angin kencang yang dapat merusak bangunan dan menyebabkan pohon tumbang, menghalangi akses darurat.</li>
    </ul>

    <!-- Vektor Representasi Bencana -->
    <div class="disaster-images" style="display: flex; justify-content: space-around; margin-top: 20px;">
        <!-- Gempa Bumi -->
        <div class="disaster-img" id="gempa" onclick="displayInfo('Gempa Bumi', 'Guncangan bumi yang dapat merusak bangunan, menimbulkan korban jiwa, serta menyebabkan longsor atau kebakaran.')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                <circle cx="50" cy="50" r="40" fill="gray" />
                <line x1="50" y1="10" x2="50" y2="90" stroke="black" stroke-width="4"/>
                <line x1="10" y1="50" x2="90" y2="50" stroke="black" stroke-width="4"/>
            </svg>
            <p>Gempa Bumi</p>
        </div>
        <!-- Letusan Gunung Api -->
        <div class="disaster-img" id="gunung" onclick="displayInfo('Letusan Gunung Api', 'Erupsi vulkanik yang dapat menyebabkan hujan abu, lava, dan banjir lahar, merusak lingkungan dan mempengaruhi kesehatan.')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                <path d="M30,70 L50,30 L70,70 Z" fill="brown"/>
                <circle cx="50" cy="30" r="5" fill="red"/>
            </svg>
            <p>Letusan Gunung Api</p>
        </div>
        <!-- Banjir -->
        <div class="disaster-img" id="banjir" onclick="displayInfo('Banjir', 'Kejadian berulang yang dapat merusak infrastruktur, menghancurkan rumah, dan mengganggu akses ke layanan dasar.')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                <rect x="0" y="50" width="100" height="40" fill="blue"/>
                <circle cx="30" cy="60" r="8" fill="lightblue"/>
                <circle cx="70" cy="60" r="8" fill="lightblue"/>
            </svg>
            <p>Banjir</p>
        </div>
        <!-- Angin Topan -->
        <div class="disaster-img" id="angin" onclick="displayInfo('Angin Topan', 'Bencana angin kencang yang dapat merusak bangunan dan menyebabkan pohon tumbang, menghalangi akses darurat.')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                <circle cx="50" cy="50" r="25" fill="yellow"/>
                <path d="M50 25 Q60 50 50 75 Q40 50 50 25" fill="white"/>
            </svg>
            <p>Angin Topan</p>
        </div>
    </div>

    <div id="disasterInfo" class="disaster-info" style="margin-top: 20px; padding: 15px; background-color: #f8f9fa; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);"></div>

    <h2 class="subheading" style="margin-top: 30px;">Langkah-Langkah Siaga Bencana</h2>
    <p class="description" style="font-size: 1.1rem;">
        Masyarakat dan lembaga pemerintah perlu mengambil langkah-langkah berikut untuk meningkatkan kesiapsiagaan dalam menghadapi bencana:
    </p>
    <ol class="list" style="font-size: 1rem; line-height: 1.6;">
        <li><strong>Identifikasi Potensi Bahaya:</strong> Menyusun peta bahaya berdasarkan lokasi, jenis bencana yang mungkin terjadi, dan dampaknya terhadap masyarakat.</li>
        <li><strong>Pengembangan Rencana Tanggap Darurat:</strong> Menyusun rencana darurat yang mencakup jalur evakuasi, lokasi tempat penampungan, dan cara berkomunikasi dengan keluarga serta tim respons bencana.</li>
        <li><strong>Pelatihan dan Simulasi Bencana:</strong> Melaksanakan pelatihan rutin bagi masyarakat dan petugas penyelamat untuk mengurangi risiko kesalahan saat bencana terjadi.</li>
        <li><strong>Penguatan Infrastruktur:</strong> Meningkatkan daya tahan bangunan dan fasilitas umum agar mampu bertahan terhadap dampak bencana, seperti menggunakan bahan bangunan tahan gempa atau banjir.</li>
    </ol>

    <h2 class="subheading" style="margin-top: 30px;">Sumber Daya dan Bantuan Siaga Bencana</h2>
    <p class="description" style="font-size: 1.1rem;">
        Menyediakan sumber daya yang cukup dan siap digunakan adalah bagian penting dari kesiapsiagaan. Beberapa hal yang perlu dipersiapkan adalah:
    </p>
    <ul class="list" style="font-size: 1rem; line-height: 1.6;">
        <li><strong>Penyimpanan Obat-obatan:</strong> Persiapkan obat-obatan dasar seperti antiseptik, pereda nyeri, dan obat untuk penyakit tertentu.</li>
        <li><strong>Peralatan Darurat:</strong> Menyediakan peralatan seperti senter, radio, alat pemadam api, dan masker penyaring debu.</li>
        <li><strong>Persediaan Pangan dan Air Bersih:</strong> Menyimpan stok makanan siap saji dan air minum dalam kemasan yang cukup untuk beberapa hari.</li>
        <li><strong>Jaringan Komunikasi:</strong> Memastikan adanya jaringan komunikasi yang dapat digunakan dalam kondisi darurat, seperti radio komunikasi dan sistem peringatan dini.</li>
    </ul>

    <h2 class="subheading" style="margin-top: 30px;">Pelatihan Kesiapsiagaan untuk Komunitas</h2>
    <p class="description" style="font-size: 1.1rem;">
        Pelatihan dan simulasi bencana untuk masyarakat sangat penting agar setiap individu mengetahui apa yang harus dilakukan sebelum, saat, dan setelah bencana terjadi. Program pelatihan ini dapat mencakup:
    </p>
    <ul class="list" style="font-size: 1rem; line-height: 1.6;">
        <li><strong>Evakuasi Mandiri:</strong> Mengajarkan cara aman untuk mengungsi dan mencari tempat yang aman selama bencana.</li>
        <li><strong>Penanganan Pertolongan Pertama:</strong> Pelatihan dasar pertolongan pertama yang memungkinkan masyarakat memberikan bantuan awal sebelum tenaga medis datang.</li>
        <li><strong>Pemberian Informasi:</strong> Mengedukasi masyarakat tentang pentingnya mengikuti informasi resmi dari pihak berwenang selama bencana.</li>
    </ul>

    <h2 class="subheading" style="margin-top: 30px;">Kesimpulan</h2>
    <p class="description" style="font-size: 1.1rem;">
        Siaga bencana bukan hanya tanggung jawab pemerintah, tetapi juga setiap individu dan komunitas. Dengan persiapan yang matang, risiko kerugian akibat bencana dapat diminimalkan, dan respons terhadap bencana dapat dilakukan dengan lebih cepat dan efektif. Pastikan Anda dan keluarga selalu siap dan memiliki pengetahuan tentang langkah-langkah siaga bencana.
    </p>

    <p class="description" style="font-size: 1.1rem;">
        Untuk informasi lebih lanjut dan materi edukasi lainnya, Anda dapat mengunjungi <a href="{{ route('materi.respon') }}" class="btn-link" style="color: #007bff;">halaman respon bencana</a>.
    </p>
</div>

<script>
    // Function to display disaster information when an image is clicked
    function displayInfo(title, description) {
        const infoBox = document.getElementById("disasterInfo");
        infoBox.innerHTML = `<h3>${title}</h3><p>${description}</p>`;
        infoBox.style.display = "block"; // Show the information box
    }
</script>
@endsection
