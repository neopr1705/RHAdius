
<body style="margin: 0; font-family: Arial, sans-serif;">
    <section id="welcome" style="display: flex; align-items: center; justify-content: flex-start; height: 100vh; background-image: url('images/landing-background.jpg'); background-size: cover; background-position: center; padding: 0 15px; opacity: 0; transition: opacity 2.5s ease;">
        <div style="max-width: 1200px; margin: 0 15%; display: flex; flex-direction: column; align-items: flex-start;">
            <!-- Heading -->
            <h1 style="font-size: 4em; color: #fff; margin-bottom: 15px; line-height: 1.2;">Selamat Datang di RHAdius</h1>
            
            <!-- Subtext -->
            <p style="font-size: 1.5em; color: #f9f9f9; line-height: 1.6; margin-bottom: 40px;">Rapid Health Assesment dan Tempat melek tanggap bencana.</p>
            
          <!-- Button -->
          <a href="{{ route('formRHA.formrha') }}" id="cta-button" style="display: inline-block; padding: 15px 30px; font-size: 1.2em; color: #007BFF; background-color: #fff; text-decoration: none; border-radius: 5px; font-weight: bold; transition: all 0.3s ease; text-align: center;">Isi Formulir Sekarang!</a>
        </div>
    </section>

    <script>
        // Add fade-in effect after the page is loaded
        window.addEventListener('load', function () {
            document.getElementById('welcome').style.opacity = 1; // Trigger fade-in by setting opacity to 1
        });
           // Add hover effect to the button
           const button = document.getElementById('cta-button');
        button.addEventListener('mouseenter', function () {
            button.style.transform = 'scale(1.1)'; // Make button larger
            button.style.backgroundColor = '#007BFF'; // Change background color to gold
            button.style.color = '#fff'; // Change text color to dark
        });
        button.addEventListener('mouseleave', function () {
            button.style.transform = 'scale(1)'; // Reset size
            button.style.backgroundColor = '#fff'; // Reset background color
            button.style.color = '#007BFF'; // Reset text color
        });
    </script>
</body>