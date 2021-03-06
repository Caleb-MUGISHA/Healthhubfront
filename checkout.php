<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>HealthHub</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />

    <link href="assets/img/favicon.png" rel="icon" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />

    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="main-wrapper">
      <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
          <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
              <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </a>
            <a href="index.php" class="navbar-brand logo">
              <img src="assets/img/logo.png" class="img-fluid" alt="Logo" />
            </a>
          </div>
          <div class="main-menu-wrapper">
            <div class="menu-header">
              <a href="index.php" class="menu-logo">
                <img src="assets/img/logo.png" class="img-fluid" alt="Logo" />
              </a>
              <a id="menu_close" class="menu-close" href="javascript:void(0);">
                <i class="fas fa-times"></i>
              </a>
            </div>
          </div>
          <ul class="nav header-navbar-rht">
            <li class="nav-item contact-item">
              <div class="header-contact-img">
                <i class="far fa-hospital"></i>
              </div>
              <div class="header-contact-detail">
                <p class="contact-header">Contact</p>
                <p class="contact-info-header">+250 784 200 694</p>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link header-login" href="login.php"
                >login / Signup
              </a>
            </li>
          </ul>
        </nav>
      </header>

      <div class="breadcrumb-bar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-12">
              <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Checkout
                  </li>
                </ol>
              </nav>
              <h2 class="breadcrumb-title">Checkout</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-lg-8">
              <div class="card">
                <div class="card-body">
                  <form action="#">
                    <div class="info-widget">
                      <h4 class="card-title">Personal Information</h4>
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group card-label">
                            <label>First Name</label>
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group card-label">
                            <label>Last Name</label>
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group card-label">
                            <label>Email</label>
                            <input class="form-control" type="email" />
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group card-label">
                            <label>Phone</label>
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                      </div>
                      <div class="exist-customer">
                        Existing Customer? <a href="#">Click here to login</a>
                      </div>
                    </div>

                    <div class="payment-widget">
                      <h4 class="card-title">Payment Method</h4>

                      <div class="payment-list">
                        <label class="payment-radio credit-card-option">
                          <input type="radio" name="radio" checked />
                          <span class="checkmark"></span>
                          Credit card
                        </label>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group card-label">
                              <label for="card_name">Name on Card</label>
                              <input
                                class="form-control"
                                id="card_name"
                                type="text"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group card-label">
                              <label for="card_number">Card Number</label>
                              <input
                                class="form-control"
                                id="card_number"
                                placeholder="1234  5678  9876  5432"
                                type="text"
                              />
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group card-label">
                              <label for="expiry_month">Expiry Month</label>
                              <input
                                class="form-control"
                                id="expiry_month"
                                placeholder="MM"
                                type="text"
                              />
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group card-label">
                              <label for="expiry_year">Expiry Year</label>
                              <input
                                class="form-control"
                                id="expiry_year"
                                placeholder="YY"
                                type="text"
                              />
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group card-label">
                              <label for="cvv">CVV</label>
                              <input
                                class="form-control"
                                id="cvv"
                                type="text"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="payment-list">
                        <label class="payment-radio paypal-option">
                          <input type="radio" name="radio" />
                          <span class="checkmark"></span>
                          Paypal
                        </label>
                      </div>

                      <div class="terms-accept">
                        <div class="custom-checkbox">
                          <input type="checkbox" id="terms_accept" />
                          <label for="terms_accept"
                            >I have read and accept
                            <a href="#">Terms &amp; Conditions</a></label
                          >
                        </div>
                      </div>

                      <div class="submit-section mt-4">
                        <button
                          type="submit"
                          class="btn btn-primary submit-btn"
                        >
                          Confirm and Pay
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-4 theiaStickySidebar">
              <div class="card booking-card">
                <div class="card-header">
                  <h4 class="card-title">Booking Summary</h4>
                </div>
                <div class="card-body">
                  <div class="booking-doc-info">
                    <a href="doctor-profile.php" class="booking-doc-img">
                      <img
                        src="assets/img/doctors/doctor-thumb-02.jpg"
                        alt="User Image"
                      />
                    </a>
                    <div class="booking-info">
                      <h4>
                        <a href="doctor-profile.php">Dr. Darren Elder</a>
                      </h4>
                      <div class="rating">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                        <span class="d-inline-block average-rating">35</span>
                      </div>
                      <div class="clinic-details">
                        <p class="doc-location">
                          <i class="fas fa-map-marker-alt"></i> Newyork, USA
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="booking-summary">
                    <div class="booking-item-wrap">
                      <ul class="booking-date">
                        <li>Date <span>16 Nov 2019</span></li>
                        <li>Time <span>10:00 AM</span></li>
                      </ul>
                      <ul class="booking-fee">
                        <li>Consulting Fee <span>$100</span></li>
                      </ul>
                      <div class="booking-total">
                        <ul class="booking-total-list">
                          <li>
                            <span>Total</span>
                            <span class="total-cost">$160</span>
                          </li>
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

    <script
      data-cfasync="false"
      src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/js/script.js"></script>
  </body>
</html>
