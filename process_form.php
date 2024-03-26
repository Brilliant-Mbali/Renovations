<?php

// if($_POST["btnMsg"]=="msg")
// {
// $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=admin");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail_app/src/Exception.php';
require 'mail_app/src/PHPMailer.php';
require 'mail_app/src/SMTP.php';

if(isset($_POST["btnMsg"])){
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;

$mail->Username='xiluvamhlongo505@gmail.com';
$mail->Password='zdyt nrzp iaba dqsz';
$mail->SMTPSecure='ssl';
$mail->Port=465;

$mail->setFrom('xiluvamhlongo505@gmail.com');
$mail->addAddress($_POST["email"]);
$mail->isHTML(true);
$mail->Subject= $_POST['subject'];
$mail->Body= $_POST['message'];

$mail->send();

echo'

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RetroFit Renovations</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link href="img/favicon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="animate/animate.min.css" rel="stylesheet">
    <link href="assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+27717578370</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center border-end px-3">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>retrofitrenovations@gmail.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center border-end px-3">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 09 PM</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0"><i class="fa fa-building text-primary me-1" aria-hidden="true"></i>RetroFit Renovations</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-3 py-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="service.php" class="nav-item nav-link">Our Services</a>
                <a href="contact.php" class="nav-item nav-link active">Contact Us</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- success page Start -->
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="lead">Thank you for contacting us. We will get back to you as soon as possible.</h1>
                <img class="w-100" src="img/success.png" alt="Image">

                <p class="back">Go back to the <a href="index.php">Homepage</a></p>
            </div>
        </div>
    </div>
    <!-- success page End -->


            <!-- Footer Start -->
            <div class="container-fluid bg-dark footer">
                <div class="container-fluid copyright"> 
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                <p> @ 2024 | RetroFit Renovation | All Right Reserved. </p>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="d-flex pt-2">
                                    <a class="btn-square btn-outline-primary me-1"
                                        href="https://wa.me/0717578370"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn-square btn-outline-primary me-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn-square btn-outline-primary me-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn-square btn-outline-primary me-1" href=""><i
                                            class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                     </div>
               </div>
           </div>
            <!-- Footer End -->

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>

</body>

</html>


';

}


// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = filter_input(INPUT_POST,'subject', FILTER_VALIDATE_INT);
// $message = $_POST['message'];

// $mailheader="From: ".$name ."<".$email.">\r\n";

// $recipient="ngwenyabrilliant12@gmail.com";
// mail($recipient,$subject,$message,$mailheader)
// or die("Error!!");

// //}
// // if(!$conn)
// // {
// //     echo "connection error:";
// //     exit;
// // }

// // echo "connection successful";

// // $sql = pg_query($conn, "SELECT * FROM client");
// // while($row=pg_fetch_object($sql))
// // {
// //     echo "<br/>".$row->name." ".$row->email." ".$row->subject." ".$row->message. " <br/>";
// // }
// // pg_close($conn);