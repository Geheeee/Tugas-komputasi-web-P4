<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <title>Bootstrap dan Kontak</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#home" onclick="showSection('home')">Home</a>
        <a class="navbar-brand" href="#contact" onclick="showSection('contact')">Contact</a>
    </nav>

    <div class="container mt-4">
        <div id="home" class="section">
            <img src="YNWA.jpg" alt="YNWA" class="img-fluid" />
            <section class="mb-4">
                <img src="Arne-slot.jpg" alt="Arne Slot" height="200" width="400" class="float-left mr-3 rounded" />
                <h2>Awal Impresif Liverpool di Musim 2024-25: Kerja Keras dan Strategi Arne Slot Membawa Kemenangan Beruntun</h2>
                <p>Liverpool FC telah memulai musim 2024-25 dengan performa yang mengesankan ...</p>
                <p><a href="beritadetil1.html">Selengkapnya</a></p>
            </section>
            <section class="mb-4">
                <img src="alison.jpeg" alt="Alison" height="200" width="400" class="float-right mr-3 rounded" />
                <h1>Alisson Becker yakin awal kuat Liverpool di musim 2024-25 disebabkan oleh tingkat kerja yang luar biasa untuk sukses.</h1>
                <p>Arne Slot memulai masa jabatannya sebagai pelatih kepala ...</p>
                <p><a href="beritadetil2.html">Selengkapnya</a></p>
            </section>
        </div>

        <div id="contact" class="section" style="display: none;">
            <h2>Contact Us</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <?php
        // Menangani form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<div id="confirmation" class="mt-4">';
            echo '<h2>Thank You for Contacting Us!</h2>';
            echo '<p>Name: ' . htmlspecialchars($_POST['name']) . '</p>';
            echo '<p>Email: ' . htmlspecialchars($_POST['email']) . '</p>';
            echo '<p>Message: ' . nl2br(htmlspecialchars($_POST['message'])) . '</p>';
            echo '</div>';
        }
        ?>
    </div>

    <footer class="bg-light text-center py-4">
        <h4>Web Rekomendasi</h4>
        <a href="https://Google.com" target="_blank"><img src="logo google.png" height="50" width="50" class="mr-2" /></a>
        <a href="https://microsoft.com" target="_blank"><img src="logo microsoft.png" height="70" width="70" /></a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fungsi untuk menampilkan dan menyembunyikan section
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
</body>
</html>
