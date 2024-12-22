@extends('layouts.app')

@section('content')
    <div class="container"
        style="max-width: 900px; margin-top: 30px; padding: 20px; border-radius: 8px; background-color: #f9f9f9;">
        <h1 style="font-size: 2rem; text-align: center; color: #333;">Formulir Rapid Health Assessment</h1>
        <p style="font-size: 1.1rem; text-align: center; color: #555;">Rapid Health Assessment (RHA) adalah metode cepat
            untuk mengevaluasi dampak bencana terhadap kesehatan masyarakat. Evaluasi ini membantu tim respons dalam
            mengidentifikasi kebutuhan mendesak, sumber daya yang diperlukan, dan tindakan prioritas untuk menyelamatkan
            nyawa serta mengurangi dampak jangka panjang.</p>

        <h2 style="font-size: 1.6rem; color: #333;">Formulir Rapid Health Assessment</h2>

        <form action="#" method="POST"
            style="font-size: 1.1rem; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
            @csrf

            <h3 style="font-size: 1.3rem; color: #333; margin-bottom: 20px;">1. Kesehatan Umum Pengungsi</h3>
            <div style="margin-bottom: 15px;">
                <label for="question1" style="display: block; color: #555;">Apakah ada laporan sakit yang parah di antara
                    pengungsi?</label>
                <label><input type="radio" name="question1" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question1" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="question2" style="display: block; color: #555;">Apakah pengungsi memiliki akses ke layanan
                    medis?</label>
                <label><input type="radio" name="question2" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question2" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">2. Kesehatan Mental</h3>
            <div style="margin-bottom: 15px;">
                <label for="question3" style="display: block; color: #555;">Apakah ada laporan kasus stres berat di antara
                    pengungsi?</label>
                <label><input type="radio" name="question3" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question3" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">3. Sanitasi dan Kebersihan
            </h3>
            <div style="margin-bottom: 15px;">
                <label for="question4" style="display: block; color: #555;">Apakah fasilitas sanitasi di lokasi pengungsi
                    memadai?</label>
                <label><input type="radio" name="question4" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question4" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <!-- Pertanyaan tambahan (hingga 50 pertanyaan) -->

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">4. Penyakit Menular</h3>
            <div style="margin-bottom: 15px;">
                <label for="question5" style="display: block; color: #555;">Apakah ada risiko penyebaran penyakit menular di
                    antara pengungsi?</label>
                <label><input type="radio" name="question5" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question5" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">5. Akses ke Air Bersih</h3>
            <div style="margin-bottom: 15px;">
                <label for="question6" style="display: block; color: #555;">Apakah pengungsi memiliki akses yang cukup ke
                    air bersih?</label>
                <label><input type="radio" name="question6" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question6" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">6. Akses ke Fasilitas
                Kesehatan</h3>
            <div style="margin-bottom: 15px;">
                <label for="question6" style="display: block; color: #555;">Apakah pengungsi memiliki akses ke fasilitas
                    kesehatan dasar?</label>
                <label><input type="radio" name="question6" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question6" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">7. Penyakit Menular</h3>
            <div style="margin-bottom: 15px;">
                <label for="question7" style="display: block; color: #555;">Apakah terdapat risiko penyebaran penyakit
                    menular di antara pengungsi?</label>
                <label><input type="radio" name="question7" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question7" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">8. Kebutuhan Gizi</h3>
            <div style="margin-bottom: 15px;">
                <label for="question8" style="display: block; color: #555;">Apakah ada kekurangan gizi di kalangan
                    pengungsi?</label>
                <label><input type="radio" name="question8" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question8" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">9. Air Bersih</h3>
            <div style="margin-bottom: 15px;">
                <label for="question9" style="display: block; color: #555;">Apakah pengungsi memiliki akses ke air
                    bersih?</label>
                <label><input type="radio" name="question9" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question9" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">10. Sanitasi</h3>
            <div style="margin-bottom: 15px;">
                <label for="question10" style="display: block; color: #555;">Apakah sanitasi di tempat pengungsian memadai
                    untuk mencegah wabah?</label>
                <label><input type="radio" name="question10" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question10" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">11. Pemulihan Kesehatan</h3>
            <div style="margin-bottom: 15px;">
                <label for="question11" style="display: block; color: #555;">Apakah ada rencana pemulihan kesehatan jangka
                    panjang untuk pengungsi?</label>
                <label><input type="radio" name="question11" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question11" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">12. Penanganan Trauma</h3>
            <div style="margin-bottom: 15px;">
                <label for="question12" style="display: block; color: #555;">Apakah pengungsi mendapatkan penanganan
                    trauma akibat bencana?</label>
                <label><input type="radio" name="question12" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question12" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">13. Keamanan Lokasi</h3>
            <div style="margin-bottom: 15px;">
                <label for="question13" style="display: block; color: #555;">Apakah pengungsi merasa aman di lokasi
                    penampungan?</label>
                <label><input type="radio" name="question13" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question13" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">14. Kebutuhan Tempat
                Penampungan</h3>
            <div style="margin-bottom: 15px;">
                <label for="question14" style="display: block; color: #555;">Apakah tempat penampungan cukup untuk
                    menampung semua pengungsi?</label>
                <label><input type="radio" name="question14" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question14" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">15. Ketersediaan Bantuan
                Kesehatan</h3>
            <div style="margin-bottom: 15px;">
                <label for="question15" style="display: block; color: #555;">Apakah tersedia cukup tenaga medis untuk
                    menangani pengungsi?</label>
                <label><input type="radio" name="question15" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question15" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">16. Ketersediaan Obat-obatan
            </h3>
            <div style="margin-bottom: 15px;">
                <label for="question16" style="display: block; color: #555;">Apakah obat-obatan yang diperlukan tersedia
                    di lokasi?</label>
                <label><input type="radio" name="question16" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question16" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">17. Ketersediaan Makanan
            </h3>
            <div style="margin-bottom: 15px;">
                <label for="question17" style="display: block; color: #555;">Apakah pengungsi memiliki akses ke makanan
                    yang cukup?</label>
                <label><input type="radio" name="question17" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question17" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">18. Distribusi Bantuan</h3>
            <div style="margin-bottom: 15px;">
                <label for="question18" style="display: block; color: #555;">Apakah distribusi bantuan merata di seluruh
                    tempat penampungan?</label>
                <label><input type="radio" name="question18" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question18" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">19. Ketersediaan Peralatan
                Medis</h3>
            <div style="margin-bottom: 15px;">
                <label for="question19" style="display: block; color: #555;">Apakah peralatan medis yang diperlukan
                    tersedia di lokasi?</label>
                <label><input type="radio" name="question19" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question19" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">20. Keterjangkauan Layanan
                Kesehatan</h3>
            <div style="margin-bottom: 15px;">
                <label for="question20" style="display: block; color: #555;">Apakah layanan kesehatan terjangkau bagi
                    seluruh pengungsi?</label>
                <label><input type="radio" name="question20" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question20" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">21. Keamanan Pangan</h3>
            <div style="margin-bottom: 15px;">
                <label for="question21" style="display: block; color: #555;">Apakah makanan yang diberikan aman untuk
                    dikonsumsi?</label>
                <label><input type="radio" name="question21" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question21" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">22. Pemberdayaan Komunitas
            </h3>
            <div style="margin-bottom: 15px;">
                <label for="question22" style="display: block; color: #555;">Apakah ada upaya pemberdayaan komunitas dalam
                    pemulihan bencana?</label>
                <label><input type="radio" name="question22" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question22" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">23. Pelaporan Kesehatan</h3>
            <div style="margin-bottom: 15px;">
                <label for="question23" style="display: block; color: #555;">Apakah pelaporan kondisi kesehatan pengungsi
                    dilakukan dengan baik?</label>
                <label><input type="radio" name="question23" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question23" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">24. Akses Transportasi</h3>
            <div style="margin-bottom: 15px;">
                <label for="question24" style="display: block; color: #555;">Apakah pengungsi memiliki akses ke
                    transportasi untuk mencari layanan kesehatan jika diperlukan?</label>
                <label><input type="radio" name="question24" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question24" value="no" style="margin-right: 10px;">Tidak</label>
            </div>

            <h3 style="font-size: 1.3rem; color: #333; margin-top: 30px; margin-bottom: 20px;">25. Pemulihan Ekonomi
                Pengungsi</h3>
            <div style="margin-bottom: 15px;">
                <label for="question25" style="display: block; color: #555;">Apakah ada upaya untuk membantu pengungsi
                    pulih secara ekonomi setelah bencana?</label>
                <label><input type="radio" name="question25" value="yes" style="margin-right: 10px;">Ya</label>
                <label><input type="radio" name="question25" value="no" style="margin-right: 10px;">Tidak</label>
            </div>


            <!-- More questions follow... -->

            <div style="margin-top: 30px; display: flex; justify-content: space-between; align-items: center;">
                <!-- Pagination Button -->
                <div>
                    <button type="button"
                        style="padding: 10px 20px; font-size: 1.2rem; background-color: #f0f0f0; color: #007bff; border: 1px solid #007bff; border-radius: 5px; cursor: pointer;">
                        Sebelumnya
                    </button>
                    <button type="button"
                        style="padding: 10px 20px; font-size: 1.2rem; background-color: #f0f0f0; color: #007bff; border: 1px solid #007bff; border-radius: 5px; cursor: pointer; margin-left: 10px;">
                        Selanjutnya
                    </button>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    style="padding: 10px 20px; font-size: 1.2rem; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                    Kirim Formulir
                </button>
            </div>
        </form>

    </div>
@endsection
