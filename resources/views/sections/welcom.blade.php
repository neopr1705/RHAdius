<section id="welcome" class="welcome-section" style="display: flex; align-items: center; justify-content: flex-start; height: 100vh; background-color: #f4f4f4; padding: 0 15px;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <div class="box" style="width: 50%; padding: 20px; background: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; display: flex; flex-direction: column; align-items: flex-start;">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="80" height="80" style="display: block; margin-bottom: 15px;">

            <h1 style="font-size: 2.5em; color: #333; margin-bottom: 10px; text-align: left;">Selamat Datang di RHAdius</h1>
            <p style="font-size: 1em; color: #555; line-height: 1.6; text-align: left;">Rapid Health Assesment dan Tempat melek tanggap bencana.</p>
            <a href="{{ route('formRHA.formrha') }}" class="btn-start" style="display: inline-block; margin-top: 20px; padding: 10px 20px; font-size: 1em; color: #fff; background-color: #007BFF; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;">Isi Formulir Sekarang!</a>
        </div>
    </div>
</section>
