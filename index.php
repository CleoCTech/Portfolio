<?php
include_once 'dbconnect.php';
include_once 'upload.php';
// // fetch files
// $sql = "select filename from tbl_files";
// $result = mysqli_query($con, $sql);
// 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nariphon Technologies</title>

    <!--Boostrap css file-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!--font awesome-->
    <link rel="stylesheet" href="/css/all.min.css">

    <!-- Magnific-Popup css file -->
    <link rel="stylesheet" href="/vendor/Magnific-Popup/dist/magnific-popup.css">

    <!-- owl-carousel css file -->
    <link rel="stylesheet" href="/vendor/OwlCorousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/OwlCorousel/css/owl.theme.default.min.css">


    <!-- custom css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive css file  -->
    <link rel="stylesheet" href="/css/responsive.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <h3>Upload File</h3>
                <input type="file" name="myfile"> <br>
                <button type="submit" name="save">upload</button>
            </form>
        </div>
    </div>
</body>

</html>