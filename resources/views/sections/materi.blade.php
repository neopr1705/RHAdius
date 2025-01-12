<body>
<section id="materi" class="materi-section">
    <div class="container">
        <h2>Pojok Bencana!</h2>
        <div class="news-grid">
            <article class="news-card potensi">
                <img src="{{ asset('images/potensi.png') }}" alt="Logo" width="80" height="7rem">
                <h3>Potensi Masalah Kesehatan</h3>
                <p>Bersiap sebelum banjir tiba. Periksa saluran air, perkuat tanggul, dan simpan perlengkapan darurat. Tingkatkan kewaspadaan dengan memantau prakiraan cuaca dan informasi terkini. Cegah risiko, selamatkan lingkungan!</p>
                <a href="{{ route('materi.potensibencana') }}" class="read-more">Baca Selengkapnya</a>
            </article>
            <article class="news-card respon">
                <img src="{{ asset('images/respon.png') }}" alt="Logo" width="80" height="5rem">
                <h3>Respon Edukasi Siaga</h3>
                <p>Saat banjir terjadi, utamakan keselamatan. Cari tempat tinggi yang aman, matikan aliran listrik, dan hindari arus deras. Bantu sesama dan ikuti arahan evakuasi. Bertindak cepat, lindungi nyawa dan harta benda!</p>
                <a href="{{ route('materi.responbencana') }}" class="read-more">Baca Selengkapnya</a>
            </article>
            <article class="news-card siaga">
                <img src="{{ asset('images/flood.png') }}" alt="Logo" width="80" height="5rem">
                <h3>Edukasi Siap Siaga Bencana</h3>
                <p>Banjir bisa datang kapan saja dan mengancam keselamatan. "Edukasi Siap Siaga Bencana" mempersiapkan masyarakat dengan pengetahuan dan keterampilan menghadapi banjir, mulai dari mengenali tanda-tanda hingga menyiapkan peralatan darurat.</p>
                <a href="{{ route('materi.siaga') }}" class="read-more">Baca Selengkapnya</a>
            </article>
        </div>
    </div>
</section>

</body>