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
    <title>Checkout || The Mobile Hour</title>
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
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h3>Checkout</h3>
        </div>

        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-dark">Your cart</span>
              <span class="badge bg-dark rounded-pill">1</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Samsung Galaxy S22</h6>
                  <small class="text-muted">Version | Memory | Colour</small>
                </div>
                <span class="text-muted">$1499</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between bg-light"
              >
                <div class="text-danger">
                  <h6 class="my-0">Shipping</h6>
                  <small>Standard</small>
                </div>
                <span class="text-danger">$10</span>
              </li>

              <li
                class="list-group-item d-flex justify-content-between bg-light"
              >
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">−$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (AUD)</span>
                <strong>$20</strong>
              </li>
            </ul>

            <form class="card p-2">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Promo code"
                />
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </form>
          </div>
          <div class="col-md-7 col-lg-8">
            <div class="login_button_checkout">
              <button type="submit" class="login_button_checkout btn btn-dark">
                Login</button
              ><br /><span class="text-muted">
                Click here to login to prefill details</span
              >
            </div>

            <h4 class="mb-3 pt-3">Billing address</h4>
            <form class="needs-validation" novalidate="">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    placeholder=""
                    value=""
                    required=""
                  />
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    placeholder=""
                    value=""
                    required=""
                  />
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="you@example.com"
                    required
                  />
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address2" class="form-label"
                    >Apartment/Unit
                    <span class="text-muted">(Optional)</span></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="address2"
                    placeholder="Apartment or unit"
                  />
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    placeholder="1234 Main St"
                    required=""
                  />
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">City</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    placeholder="City"
                    required=""
                  />
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="state" class="form-label">State/Territory</label>
                  <select class="form-select" id="state" required="">
                    <option value="">Choose...</option>
                    <option>QLD</option>
                    <option>NSW</option>
                    <option>VIC</option>
                    <option>TAS</option>
                    <option>WA</option>
                    <option>NT</option>
                    <option>ACT</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Postcode</label>
                  <input
                    type="text"
                    class="form-control"
                    id="postcode"
                    placeholder=""
                    required=""
                  />
                  <div class="invalid-feedback">Postcode required.</div>
                </div>
              </div>

              <hr class="my-4" />

              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="same-address"
                />
                <label class="form-check-label" for="same-address"
                  >Shipping address is the same as my billing address</label
                >
              </div>

              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="save-info"
                />
                <label class="form-check-label" for="save-info"
                  >Save this information for next time</label
                >
              </div>

              <hr class="my-4" />

              <h4 class="mb-3">Payment</h4>

              <div class="my-3">
                <div class="form-check">
                  <input
                    id="credit"
                    name="paymentMethod"
                    type="radio"
                    class="form-check-input"
                    checked=""
                    required=""
                  />
                  <label class="form-check-label" for="credit"
                    >Credit card</label
                  >
                </div>

                <div class="form-check">
                  <input
                    id="paypal"
                    name="paymentMethod"
                    type="radio"
                    class="form-check-input"
                    required=""
                  />
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input
                    type="text"
                    class="form-control"
                    id="cc-name"
                    placeholder=""
                    required=""
                  />
                  <small class="text-muted"
                    >Full name as displayed on card</small
                  >
                  <div class="invalid-feedback">Name on card is required</div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label"
                    >Credit card number</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="cc-number"
                    placeholder=""
                    required=""
                  />
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label"
                    >Expiration</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="cc-expiration"
                    placeholder="mm/yy"
                    required=""
                  />
                  <div class="invalid-feedback">Expiration date required</div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input
                    type="text"
                    class="form-control"
                    id="cc-cvv"
                    placeholder=""
                    required=""
                  />
                  <div class="invalid-feedback">Security code required</div>
                </div>
              </div>

              <hr class="my-4" />

              <button class="w-100 btn btn-dark btn-lg" type="submit">
                Process Payment
              </button>
            </form>
          </div>
        </div>
      </main>
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
  </body>
</html>
