<?php include "model/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="mobile hour phones smartphones" />
    <meta name="description" content="home page The Mobile Hour" />
    <meta name="author" content="Elise Herrie" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <title>Cart || The Mobile Hour</title>
  </head>

  <body>
    <!--Header-->
    <header>
      <div class="logo">
        <a href="index.html">
          <img src="images/logo_jpg.jpg" height="78" alt="Logo" />
        </a>
      </div>

      <h1>The Mobile Hour</h1>

      <ul class="top_header">
        <li class="top_header_item">
          <a class="top_header_item_text" href="cart.html">
            <img
              class="top_header_item_image"
              src="images/cart.jpg"
              height="38 "
              alt="Cart"
            />Cart
          </a>
        </li>
        <li class="top_header_item">
          <a class="top_header_item_text" href="login.html">
            <img
              class="top_header_item_image"
              src="images/login.jpg"
              height="38 "
              alt="Login"
            />Login
          </a>
        </li>
      </ul>
    </header>

    <!-- Navigation-->
    <div class="navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mx-auto">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="pe-5">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      aria-current="page"
                      href="index.html"
                      >Home</a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="shop_all.html"
                      ><strong>Shop all Mobile Phones</strong></a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="apple.html"
                      ><strong>Apple</strong></a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="samsung.html"
                      ><strong>Samsung</strong></a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="google.html"
                      ><strong>Google</strong></a
                    >
                  </li>
                </div>
                <div class="pe-5">
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html"
                      ><strong>Contact Us</strong></a
                    >
                  </li>
                </div>
                <form class="d-flex" role="search">
                  <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <button class="btn btn-outline-dark" type="submit">
                    Search
                  </button>
                </form>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!--Cart-->
    <section class="h-100 h-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div
              class="card card-registration card-registration-2"
              style="border-radius: 15px"
            >
              <div class="card-body p-0">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <div class="p-5">
                      <div
                        class="d-flex justify-content-between align-items-center mb-5"
                      >
                        <h3 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                        <h6 class="mb-0 text-muted">3 items</h6>
                      </div>
                      <hr class="my-4" />

                      <div
                        class="row mb-4 d-flex justify-content-between align-items-center"
                      >
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="images/samsung_phone.png"
                            class="img-fluid rounded-3"
                            alt="Samsung Galaxy S22"
                          />
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <h6 class="text-muted">Samsung</h6>
                          <h6 class="text-black mb-0">Galaxy S22</h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button
                            class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                          >
                            <i class="fas fa-minus"></i>
                          </button>

                          <input
                            id="form1"
                            min="0"
                            name="quantity"
                            value="1"
                            type="number"
                            class="form-control form-control-sm"
                          />

                          <button
                            class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                          >
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h6 class="mb-0">$1499</h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-muted"
                            ><i class="fas fa-times"></i
                          ></a>
                        </div>
                      </div>

                   
                        

                      

                      <hr class="my-4" />

                      <div class="pt-5">
                        <h6 class="mb-0">
                          <a href="index.html" class="text-body"
                            ><i class="fas fa-long-arrow-alt-left me-2"></i>Back
                            to shop</a
                          >
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 bg-grey">
                    <div class="p-5">
                      <h3 class="fw-bold mb-2 mt-2 pt-1">Summary</h3>
                      <hr class="my-4" />

                      <div class="d-flex justify-content-between mb-4">
                        <h6 class="text-uppercase">items 3</h6>
                        <h6>$1499</h6>
                      </div>

                      <h6 class="text-uppercase mb-3">Shipping</h6>

                      <div class="mb-2 pb-2">
                        <select class="select">
                          <option value="1">Standard delivery $</option>
                          <option value="2">Express delivery $</option>
                        </select>
                      </div>

                      <h6 class="text-uppercase mb-3">Enter promotion code</h6>

                      <div class="mb-2">
                        <div class="form-outline">
                          <input
                            type="text"
                            id="form3Examplea2"
                            class="form-control"
                            placeholder="Enter your code"
                          />
                        </div>
                      </div>

                      <hr class="my-4" />

                      <div class="d-flex justify-content-between mb-3">
                        <h6 class="text-uppercase">Total price</h6>
                        <h6>$1499</h6>
                      </div>

                      <a   href="checkout.html"><button
                        type="button"
                        class="btn btn-dark btn-block btn-lg"
                        data-mdb-ripple-color="dark"
                      
                      >
                        Proceed to checkout
                      </button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!---Footer-->
    <footer>
      <div id="footer_left">
        <a href="https://www.facebook.com"
          ><img src="images/facebook.png" alt="facebook icon"
        /></a>
        <a href="https://www.instagram.com"
          ><img src="images/instagram.png" alt="instagram icon"
        /></a>
        <a href="https://www.twitter.com"
          ><img src="images/twitter.png" alt="twitter icon"
        /></a>
        <a href="https://www.youtube.com"
          ><img src="images/youtube.png" alt="youtube icon"
        /></a>
      </div>
     <div id="footer_center">
        <a id="footer_index" href="index.html">©2023 The Mobile Hour</a>
        <a href="admin-portal.html">Admin Portal</a>
      </div>

      <div id="footer_right1">
        <a href="login.html">Login</a><br />
        <a href="about.html">About Us</a><br />
        <a href="returns.html">Return Policy</a><br />
      </div>
      <div id="footer_right2">
        <a href="shipping.html">Shipping Info</a><br />
        <a href="privacy.html">Privacy Statement</a><br />
        <a href="termsconditions.html">Terms & Conditions</a><br />
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
