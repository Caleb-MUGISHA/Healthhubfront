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
  <body class="account-page">
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

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="account-content">
                <div class="row align-items-center justify-content-center">
                  <div class="col-md-7 col-lg-6 login-left">
                    <img
                      src="assets/img/login-banner.png"
                      class="img-fluid"
                      alt="Login Banner"
                    />
                  </div>
                  <div class="col-md-12 col-lg-6 login-right">
                    <div class="login-header">
                      <h3>
                        Doctor Register
                        <a href="register.php">Not a Doctor?</a>
                      </h3>
                    </div>

                    <form action="#">
                      <div class="form-group form-focus">
                        <input type="text" class="form-control floating" />
                        <label class="focus-label">Name</label>
                      </div>
                      <div class="form-group form-focus">
                        <input type="text" class="form-control floating" />
                        <label class="focus-label">Mobile Number</label>
                      </div>
                      <div class="form-group form-focus">
                        <input type="password" class="form-control floating" />
                        <label class="focus-label">Create Password</label>
                      </div>
                      <div class="text-right">
                        <a class="forgot-link" href="login.php"
                          >Already have an account?</a
                        >
                      </div>
                      <button
                        class="btn btn-primary btn-block btn-lg login-btn"
                        type="submit"
                      >
                        Signup
                      </button>
                      <div class="login-or">
                        <span class="or-line"></span>
                        <span class="span-or">or</span>
                      </div>
                      <div class="row form-row social-login">
                        <div class="col-6">
                          <a href="#" class="btn btn-facebook btn-block"
                            ><i class="fab fa-facebook-f mr-1"></i> Login</a
                          >
                        </div>
                        <div class="col-6">
                          <a href="#" class="btn btn-google btn-block"
                            ><i class="fab fa-google mr-1"></i> Login</a
                          >
                        </div>
                      </div>
                    </form>
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

    <script src="assets/js/script.js"></script>
  </body>
</html>
