<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Product Listing Page</title>
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
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>

    <?php
    include("header.php");
    ?>

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Book
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">book catergory 1</a></li>
                            <li><a class="text-decoration-none" href="#">book catergory 2</a></li>
                            <li><a class="text-decoration-none" href="#">book catergory 3</a></li>
                            <li><a class="text-decoration-none" href="#">book catergory 4</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Magazine
                            <i class="pull-right fa fa-fw  mt-1"></i>
                        </a>
                        <!-- <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Sport</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        </ul> -->
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            MagazineNewspaper
                            <i class="pull-right fa fa-fw  mt-1"></i>
                        </a>
                        <!-- <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul> -->
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            video
                            <i class="pull-right fa fa-fw  mt-1"></i>
                        </a>
                        <!-- <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul> -->
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Audio/cd
                            <i class="pull-right fa fa-fw  mt-1"></i>
                        </a>
                        <!-- <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul> -->
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Documentatiom
                            <i class="pull-right fa fa-fw  mt-1"></i>
                        </a>
                        <!-- <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul> -->
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <!-- <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <div class="row card-area">
                            <div id="app" class="container">
                                <card onclick="window.location.href=`shop-single.php`" data-image="https://images.unsplash.com/photo-1479660656269-197ebb83b540?dpr=2&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop=">
                                    <h1 slot="header">Canyons</h1>
                                    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </card>
                                <card onclick="window.location.href=`shop-single.php`" data-image="https://images.unsplash.com/photo-1479659929431-4342107adfc1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
                                    <h1 slot="header">Beaches</h1>
                                    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </card>
                                <card onclick="window.location.href=`shop-single.php`" data-image="https://images.unsplash.com/photo-1479644025832-60dabb8be2a1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
                                    <h1 slot="header">Trees</h1>
                                    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </card>
                                <card onclick="window.location.href=`shop-single.php`" data-image="https://images.unsplash.com/photo-1479621051492-5a6f9bd9e51a?dpr=2&auto=compress,format&fit=crop&w=1199&h=811&q=80&cs=tinysrgb&crop=">
                                    <h1 slot="header">Lakes</h1>
                                    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </card>
                                <card onclick="window.location.href=`shop-single.php`" data-image="https://images.unsplash.com/photo-1479660656269-197ebb83b540?dpr=2&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop=">
                                    <h1 slot="header">Canyons</h1>
                                    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </card>
                                <card onclick="window.location.href=`shop-single.php`" data-image="https://images.unsplash.com/photo-1479659929431-4342107adfc1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
                                    <h1 slot="header">Beaches</h1>
                                    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </card>
                                <card onclick="window.location.href=`shop-single.php`" data-image="https://images.unsplash.com/photo-1479644025832-60dabb8be2a1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
                                    <h1 slot="header">Trees</h1>
                                    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </card>
                                <card onclick="window.location.href=`shop-single.php`" data-image="https://images.unsplash.com/photo-1479621051492-5a6f9bd9e51a?dpr=2&auto=compress,format&fit=crop&w=1199&h=811&q=80&cs=tinysrgb&crop=">
                                    <h1 slot="header">Lakes</h1>
                                    <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </card>

                            </div>
                        </div>
                    </div>

                </div>
                <div div="row mt-3">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->



    <?php
    include("footer.php");
    ?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>