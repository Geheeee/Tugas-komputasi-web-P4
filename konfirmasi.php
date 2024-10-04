<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <title>Konfirmasi Kontak</title>
</head>
<body>
    <!-- Navbar -->
    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Geheee</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">Konfirmasi Kontak</h2>
        <?php
        // Cek apakah form sudah disubmit dan tampilkan hasilnya
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $hobbies = isset($_POST['hobby']) ? implode(', ', $_POST['hobby']) : 'Tidak ada';
            $gender = htmlspecialchars($_POST['gender']);
            $dob = htmlspecialchars($_POST['dob']);

            echo "<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>Konfirmasi Kontak</h4>
                    <p><strong>Nama:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Hobi:</strong> $hobbies</p>
                    <p><strong>Gender:</strong> $gender</p>
                    <p><strong>Tanggal Lahir:</strong> $dob</p>
                    <hr>
                    <p class='mb-0'>Terima kasih </p>
                  </div>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
