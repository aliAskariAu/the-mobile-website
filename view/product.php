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
    <title>View Product || The Mobile Hour</title>
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
    <!--Navigation-->
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

    <div class="container mt-5 mb-5">
      <div class="card">
        <div class="row g-0">
          <div class="col-md-6 border-end">
            <div class="d-flex flex-column justify-content-center">
              <div class="main_image">
                <img
                  src="images/samsung_phone.png"
                  id="main_product_image"
                  width="350"
                />
              </div>
              <div class="thumbnail_images">
                <ul id="thumbnail">
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src="images/samsung_phones.jpg"
                      width="70"
                    />
                  </li>
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src="images/samsung_phones.jpg"
                      width="70"
                    />
                  </li>
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src="images/samsung_phone.png"
                      width="70"
                    />
                  </li>
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src="images/samsung_phones.jpg"
                      width="70"
                    />
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3 right-side">
              <div class="d-flex justify-content-between align-items-center">
                <h3>Phone Brand</h3>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <h4>Phone Model</h4>
              </div>
              <div class="mt-2 pr-3 content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </p>
              </div>
              <h3>$1499</h3>

              <div class="mt-5">
                <span class="fw-bold">Colour</span>
                <div class="colors">
                  <ul id="marker">
                    <li id="marker-1"></li>
                    <li id="marker-2"></li>
                    <li id="marker-3"></li>
                    <li id="marker-4"></li>
                  </ul>
                </div>
                <div class="dropdown">
                  <button
                    class="btn btn-secondary dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Select Version
                  </button>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                  </ul>
                </div>

                <div class="dropdown">
                  <button
                    class="btn btn-secondary dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Select Memory
                  </button>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                  </ul>
                </div>
                <div class="buttons d-flex flex-row mt-5 gap-3">
                  <button class="btn button_cart btn-outline-dark">
                    <a href="cart.html" class="text-black text-decoration-none"
                      >Add to Cart</a
                    >
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-0 border-top">
          <div class="col-md-6 border-end">
            <div
              class="d-flex flex-column justify-content-center border-bottom"
            >
              <h4 class="specifications">Specifications</h4>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-6">
                        <ul class="specifications_list">
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                        </ul>
                      </div>

                      <div class="col-sm-6">
                        <ul class="specifications_list">
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3 right-side">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="shipping">Shipping Info</h4>
              </div>
              <div class="mt-2 pr-3 content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-0">
          <div class="col-md-6 border-top border-end border-right">
            <div class="d-flex flex-column justify-content-start">
              <h4 class="box">What's in the Box</h4>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-6">
                        <ul class="box_list">
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                          <li>Lorem ipsum</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
    <script>
      function changeImage(element) {
        var main_prodcut_image = document.getElementById("main_product_image");
        main_prodcut_image.src = element.src;
      }
    </script>
  </body>
</html>
