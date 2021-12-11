

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8" />
    <title>Healthhub</title>
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
                      alt="Healthhub Login"
                    />
                  </div>
                  <div class="col-md-12 col-lg-6 login-right">
                    <div class="login-header">
                      <h3>Login <span>Healthhub</span></h3>
                    </div>
                    <form
                      action="https://healthhubb.herokuapp.com/users/signin"
                      method="POST"
                    >
                      <div class="form-group form-focus">
                        <input type="email" class="form-control floating" id="gather_email1"/>
                        <label class="focus-label">Email</label>
                      </div>
                      <div class="form-group form-focus">
                        <input type="password" class="form-control floating" id="gather_password1" />
                        <label class="focus-label">Password</label>
                      </div>
                      <div class="text-right">
                        <a class="forgot-link" href="forgot-password.php"
                          >Forgot Password ?</a
                        >
                      </div>
                      <button
                        id='input-submit'
                        class="btn btn-primary btn-block btn-lg login-btn"
                        type="submit"
                        
                        
                      >
                        Login
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
                      <div class="text-center dont-have">
                        Don’t have an account?
                        <a href="register.php">Register</a>
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
    <script src="testing.js"></script>
  </body>

  
</html>
