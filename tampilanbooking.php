<?php
include "koneksi.php"; // Sambungkan ke file koneksi.php

// Ambil data dari tabel booking
$q = "SELECT * FROM booking ORDER BY Idbooking DESC LIMIT 1 ";
$ex = $koneksi->query($q);

// Ambil data hasil query pertama (jika ada)
if ($ex->num_rows > 0) {
    $r = $ex->fetch_assoc();
    $bookingcode = $r['bookingcode'];
    $name = $r['name'];
    $jumlahorang = $r['jumlahorang'];
    $message = $r['message'];
} else {
    // Jika tidak ada data booking, berikan nilai default
    $bookingcode = '';
    $name = '';
    $jumlahorang = '';
    $message = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Senja Resto</title>
    <link rel="icon" type="image/svg" href="./img/logo.svg" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Stylesheet -->    
    <link href="css/card.css" rel="stylesheet">
    
</head>

<body>
        <!-- Tampilan Booking Start -->
        <div class="card">
            <div class="card-header fw-bold">
                Booking Confirmation
            </div>
            <div class="card-body">
                <h5 class="card-title">Thank you for booking!</h5>
                <p class="card-text">Your booking details:</p>
                <ul class="list-group ">
                    <li class="list-group-item "><strong>Kode Booking :</strong> <?php echo $bookingcode; ?></li>
                    <li class="list-group-item "><strong>Nama :</strong> <?php echo $name; ?></li>
                    <li class="list-group-item "><strong>Jumlah Orang :</strong> <?php echo $jumlahorang; ?></li>
                    <li class="list-group-item "><strong>Pesan Khusus :</strong> <?php echo $message; ?></li>
                </ul>
            </div>
            <div class="card-footer border-0 bg-white mb-4">
                <a href="index.php" class="btn btn-primary text-white ">Back to Home</a>
            </div>
        </div>
        <!-- Tampilan Booking End -->
  

</body>

</html>
