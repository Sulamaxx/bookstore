<!DOCTYPE html>
<html lang="en">

<head>
  <title>OORTHI Detail Page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="apple-touch-icon" href="assets/img/apple-icon.png" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/image/logo_boke_store.jpg" />

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/templatemo.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />

  <!-- Load fonts style after rendering the layout styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />

  <!-- Slick -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css" />
  <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
  <?php
  include("header.php");
  ?>

  <!-- Open Content -->
  <section class="bg-light">
    <div class="container pb-5">
      <div class="row">
        <div class="col-lg-5 mt-5">
          <div class="card mb-3">
            <img class="card-img img-fluid" src="assets/image/home1.jpg" alt="Card image cap" id="product-detail" />
          </div>
        </div>
        <!-- col end -->
        <div class="col-lg-7 mt-5">
          <div class="card">
            <div class="card-body">
              <h1 class="h2">Lord of the rings</h1>
              <p class="py-2">
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-secondary"></i>
                <span class="list-inline-item text-dark">Rating 4.8 | 36
                  Comments</span>
              </p>
              <ul class="list-inline">
                <li class="list-inline-item" style="width: 70px">
                  <h6>Author</h6>
                </li>
                <li class="list-inline-item">
                  <p class="text-muted"><strong>Easy Wear</strong></p>
                </li>
              </ul>
              <ul class="list-inline" style="margin-top: -20px">
                <li class="list-inline-item" style="width: 70px">
                  <h6>Eddition</h6>
                </li>
                <li class="list-inline-item">
                  <p class="text-muted"><strong>Easy Wear</strong></p>
                </li>
              </ul>
              <ul class="list-inline" style="margin-top: -20px">
                <li class="list-inline-item" style="width: 70px">
                  <h6>Series</h6>
                </li>
                <li class="list-inline-item">
                  <p class="text-muted"><strong>Easy Wear</strong></p>
                </li>
              </ul>

              <h6>Description:</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod temp incididunt ut labore et dolore magna aliqua.
                Quis ipsum suspendisse. Donec condimentum elementum convallis.
                Nunc sed orci a diam ultrices aliquet interdum quis nulla.
              </p>
              <!-- <ul class="list-inline">
                  <li class="list-inline-item">
                    <h6>Avaliable Color :</h6>
                  </li>
                  <li class="list-inline-item">
                    <p class="text-muted"><strong>White / Black</strong></p>
                  </li>
                </ul> -->

              <!-- <h6>Specification:</h6>
                <ul class="list-unstyled pb-3">
                  <li>Lorem ipsum dolor sit</li>
                  <li>Amet, consectetur</li>
                  <li>Adipiscing elit,set</li>
                  <li>Duis aute irure</li>
                  <li>Ut enim ad minim</li>
                  <li>Dolore magna aliqua</li>
                  <li>Excepteur sint</li>
                </ul> -->

              <div class="col-12">
                <div class="row">
                  <span class="fw-bold">Available :-10</span>
                </div>
              </div>
              <div class="col-4 mt-1 ps-2 d-grid">
                <div class="row">
                  <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">
                    E-book
                  </button>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Close Content -->

  <!-- Start Article -->
  <section class="py-5">
    <div class="container">
      <div class="row text-left p-2 pb-3">
        <h4>Related Products</h4>
      </div>

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

        </div>

        <!-- <div class="col-12 col-md-3 mb-4">
          <div class="card h-80">
            <a href="shop-single.html">
              <img src="./assets/img/feature_prod_01.jpg" class="card-img-top" alt="..." />
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
                <li class="text-muted text-right">$240.00</li>
              </ul>
              <a href="shop-single.html" class="h3 text-decoration-none text-dark">Gym Weight</a>
              <p class="card-text">
                by, <span style="color: green">eric</span>
              </p>
              <p class="text-muted">Reviews (24)</p>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-12 col-md-3 mb-4">
          <div class="card h-80">
            <a href="shop-single.html">
              <img src="./assets/img/feature_prod_01.jpg" class="card-img-top" alt="..." />
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
                <li class="text-muted text-right">$240.00</li>
              </ul>
              <a href="shop-single.html" class="h3 text-decoration-none text-dark">Gym Weight</a>
              <p class="card-text">
                by, <span style="color: green">eric</span>
              </p>
              <p class="text-muted">Reviews (24)</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-3 mb-4">
          <div class="card h-80">
            <a href="shop-single.html">
              <img src="./assets/img/feature_prod_01.jpg" class="card-img-top" alt="..." />
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
                <li class="text-muted text-right">$240.00</li>
              </ul>
              <a href="shop-single.html" class="h3 text-decoration-none text-dark">Gym Weight</a>
              <p class="card-text">
                by, <span style="color: green">eric</span>
              </p>
              <p class="text-muted">Reviews (24)</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-3 mb-4">
          <div class="card h-80">
            <a href="shop-single.html">
              <img src="./assets/img/feature_prod_01.jpg" class="card-img-top" alt="..." />
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
                <li class="text-muted text-right">$240.00</li>
              </ul>
              <a href="shop-single.html" class="h3 text-decoration-none text-dark">Gym Weight</a>
              <p class="card-text">
                by, <span style="color: green">eric</span>
              </p>
              <p class="text-muted">Reviews (24)</p>
            </div>
          </div>
        </div> -->

      </div>


      <!--Start Carousel Wrapper-->
      <!-- <div id="carousel-related-product">

          
          <div class="p-2 pb-3">
            
            
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_08.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none">Red
                  Clothing</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$20.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_09.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none">White
                  Shirt</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$25.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_10.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html"
                  class="h3 text-decoration-none">Oupidatat non</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$45.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_11.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html" class="h3 text-decoration-none">Black
                  Fashion</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$60.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_08.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html"
                  class="h3 text-decoration-none">Oupidatat non</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li class>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$80.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_09.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html"
                  class="h3 text-decoration-none">Oupidatat non</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$110.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_10.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html"
                  class="h3 text-decoration-none">Oupidatat non</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$125.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_11.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html"
                  class="h3 text-decoration-none">Oupidatat non</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$160.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_08.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html"
                  class="h3 text-decoration-none">Oupidatat non</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$180.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_09.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html"
                  class="h3 text-decoration-none">Oupidatat non</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$220.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_10.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html"
                  class="h3 text-decoration-none">Oupidatat non</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$250.00</p>
              </div>
            </div>
          </div>

          <div class="p-2 pb-3">
            <div class="product-wap card rounded-0">
              <div class="card rounded-0">
                <img
                  class="card-img rounded-0 img-fluid"
                  src="assets/img/shop_11.jpg" />
                <div
                  class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="btn btn-success text-white"
                        href="shop-single.html"><i class="far fa-heart"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i class="far fa-eye"></i></a>
                    </li>
                    <li>
                      <a
                        class="btn btn-success text-white mt-2"
                        href="shop-single.html"><i
                          class="fas fa-cart-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <a href="shop-single.html"
                  class="h3 text-decoration-none">Oupidatat non</a>
                <ul
                  class="w-100 list-unstyled d-flex justify-content-between mb-0">
                  <li>M/L/X/XL</li>
                  <li class="pt-2">
                    <span
                      class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span
                      class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                  </li>
                </ul>
                <ul class="list-unstyled d-flex justify-content-center mb-1">
                  <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                  </li>
                </ul>
                <p class="text-center mb-0">$300.00</p>
              </div>
            </div>
          </div>
        </div> -->
    </div>
  </section>
  <!-- End Article -->
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

  <!-- Start Slider Script -->
  <script src="assets/js/slick.min.js"></script>
  <script>
    $("#carousel-related-product").slick({
      infinite: true,
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 3,
      dots: true,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 3,
          },
        },
      ],
    });
  </script>
  <!-- End Slider Script -->
</body>

</html>