<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/image/logo_boke_store.jpg" />


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        .card {
            display: flex;
            border: 1px solid #FF421A;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            height: 300px;
            justify-content: center;
            align-items: center;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h5 {
            color: #FF421A;
        }
    </style>

</head>

<body>
    <?php
    include("header.php");
    ?>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>

    <div class="container text-center mt-5 mb-4">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <i class="fa-solid fa-envelope fa-2x mb-2" style="color: #FF421A;"></i>
                    <h5>Email</h5>
                    <p>
                        <a href="mailto:info@mannarrestaurant.com" style="text-decoration: none; color: #333;">info@mannarrestaurant.com</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <i class="fa-solid fa-phone fa-2x mb-2" style="color: #FF421A;"></i>
                    <h5>Phone</h5>
                    <p>
                        <a href="tel:0117927993" style="text-decoration: none; color: #333;">0117927993</a><br>
                        <a href="tel:0114309295" style="text-decoration: none; color: #333;">0114309295</a><br>
                        <a href="tel:0777484473" style="text-decoration: none; color: #333;">0777484473</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <i class="fa-solid fa-map-marker-alt fa-2x mb-2" style="color: #FF421A;"></i>
                    <h5>Address</h5>
                    <p>363/10/C Battaramulla - Pannipitiya Rd, Ruhunupura 10116</p>
                    <p>242/A Makola Rd, Kiribathgoda 11600</p>
                    <p>247 R. A. De Mel Mawatha, Colombo 00700</p>
                    <p>4V9H+5XW, Seeduwa</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Map -->
    <div id="mapid" style="width: 100%; ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15307.135051990148!2d144.9524791861825!3d-37.766645581693105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65cd2011a986b%3A0xf04567605305a20!2sRoyal%20Park%20Golf%20Course!5e1!3m2!1sen!2slk!4v1722755574748!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Ena Map -->

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-danger btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->


    <?php
    include("footer.php");
    ?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>