<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="project time management software">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Payak Apps</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/flavored-reset-and-normalize.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" >
  </head> -->
  <!-- <body> -->
      <!-- navigation.nunjucks -->
<link rel="stylesheet" type="text/css" href="assets/css/welcome.css">

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#"><img src="assets/images/payak-logo-blue-40.png" alt="Payak logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#products">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#pricing">Pricing</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary sign-up-btn" href="<?= base_url("users/login") ?>">Login</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary sign-up-btn" href="<?= base_url("companies/register") ?>">Sign Up</a>
        </li>
      </ul>
    </div>
</nav>
      <!-- You write code for this content block in another file -->
      
<!-- <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Sign Up</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <label>Country</label>
            <input type="text" class="form-control" id="country" placeholder="Enter country">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Check me out
            </label>
          </div>
      </div>
      <div class="modal-footer">
          <button class="sign-up-btn center-block">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</div> -->
<div class="container-fluid">
    <div class="row align-items-center justify-content-around full-page first-fold py-3 py-md-0">
        <div class="col-12 col-md-6">
            <!-- <img src="assets/images/home_image.png" alt="Home image thumbnail" class="home-thumb mx-auto d-block img-fluid"> -->
            <!-- <video class="img-fluid w-100" poster="<?= base_url('assets/videos/promotion-poster.png') ?>" style="outline: none;" controls>
                <source src="<?= base_url('assets/videos/promotion.mp4') ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>  -->
            <div style="position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0;">
                <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/NdDmCtvDPho?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-5 my-auto p-1 p-md-5 text-center">
            <img src="assets/images/payak-logo-blue.png" alt="Payak logo" class="d-block mx-auto logo-shadow">
            <p class="first-fold-title">Keeping things simple.</p>
            <!-- <p>The no-frills business productivity suite built for fast-growing businesses.</p> -->
            <button type="button"  class="sign-up-btn d-block mx-auto" data-toggle="modal" data-target="#signUpModal">Get Started</button>
        </div>
    </div>

    <!-- <div class="row justify-content-center plans-section py-5">
        <div class="col-md-12">
            <h1 class="text-center">Promotional Video</h1>
        </div>
        <div class="w-100"></div>
        <div class="col-12 col-sm-10 col-md-8">
            <video class="img-fluid w-100" style="outline: none;" controls>
                <source src="<?= base_url('assets/videos/promotion.mp4') ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video> 
        </div>
    </div> -->

    <div class="row products-section" id="products">
        <div class="col-md-12">
            <h1 class="text-center">Products</h1>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="border product-details mt-3">
                <img src="assets/images/project.svg" alt="Hire Tracker thumbnail" class="product-thumb mx-auto d-block img-fluid">
                <!-- <img src="assets/images/hire-tracker.png" alt="Hire Tracker thumbnail" class="product-thumb mx-auto d-block img-fluid"> -->
                <h2 class="font-weight-bold text-center mb-3 mt-3">Project</h2>
                <ul class="products-list d-table text-left mx-auto">
                    <li>Dashboard</li>
                    <li>Bulletin Board</li>
                    <li>Projects</li>
                        <ul class="products-nested-list">
                            <li>Kanban</li>
                            <li>Blog/Forum</li>
                            <li>Files</li>
                        </ul>
                    <li>Personal Tasks</li>                    
                    <li>Chat</li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="border product-details mt-3">
                <img src="assets/images/personal.svg" alt="Hire Tracker thumbnail" class="product-thumb mx-auto d-block img-fluid">
                <!-- <img src="assets/images/time-tracker.png" alt="Time Tracker thumbnail" class="product-thumb mx-auto d-block img-fluid"> -->
                <h2 class="font-weight-bold text-center mb-3 mt-3">Shift</h2>
                <ul class="products-list d-table text-left mx-auto">
                    <li>Dashboard</li>
                    <li>Bulletin Board</li>
                    <li>Timekeeping</li>
                        <ul class="products-nested-list">
                            <li>Timekeeping Module</li>
                            <li>Leave Management</li>
                            <li>Shift Monitoring</li>
                        </ul>
                    <li>Personal Tasks</li>
                    <li>Chat</li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="border product-details mt-3">
                <div class="beta">
                    <small class="font-weight-bold" style="font-size:0.7rem !important;">Coming Soon</small>
                </div>
                <img src="assets/images/hr.svg" alt="Expense Manager thumbnail" class="product-thumb mx-auto d-block img-fluid">
                <!-- <img src="assets/images/expense-manager.png" alt="Expense Manager thumbnail" class="product-thumb mx-auto d-block img-fluid"> -->
                <h2 class="font-weight-bold text-center mb-3 mt-3">HR</h2>
                <ul class="products-list d-table text-left mx-auto">
                    <li>Dashboard</li>
                    <li>Bulletin Board</li>
                    <li>Resumé Management</li>
                    <li>Hiring Lifecycle</li>
                    <li>Timekeeping</li>
                    <li>Expense</li>
                    <li>Personal Tasks</li>
                    <li>Chat</li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="border product-details mt-3">
                <div class="beta">
                <small class="font-weight-bold" style="font-size:0.7rem !important;">Coming Soon</small>
                </div>
                <img src="assets/images/suite.svg" alt="Expense Manager thumbnail" class="product-thumb mx-auto d-block img-fluid">
                <h2 class="font-weight-bold text-center mb-3 mt-3">PayakApps</h2>
                <ul class="products-list d-table text-left mx-auto">
                    <li>Dashboard</li>
                    <li>Bulletin Board</li>
                    <li>Projects</li>
                    <li>Resumé Management</li>
                    <li>Timekeeping</li>
                    <li>Expense</li>
                    <li>Personal Tasks</li>
                    <li>Chat</li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <button class="sign-up-btn center-block mt-5">Get Started</button>
        </div>
    </div>
    <div class="row get-started-section pt-5 pb-5">
        <div class="col-md-8 mx-auto mt-3">
            <h4>Keep things simple with the PayakApps Suite.</h4>
            <ul class="feature-list">
                <li>Projects ® by Payakapps. Store everything in one repository. Track your team’s thought processes with the built in discussion forum.</li>
                <li>Shifts ® by Payakapps. Manage your team’s schedule, leaves, man-hours from one console.</li>
            </ul>
            <h4>Coming Soon:</h4>
            <ul class="feature-list">
                <li>HR ® by Payakapps. An HR solution containing timekeeping and expense management. You also track the whole hiring lifecycle with its built-in resume management.</li>
                <li>PayakApps Suite. Contains all features of the three major modules: Projects, Shifts, and HR.</li>
            </ul>
        </div>
    </div>
    <div class="row plans-section text-center align-items-center" id="pricing">
        <div class="col-md-12">
            <h1 class="text-center">Plans</h1>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
                <p class="plan-name">
                    <br>
                    <h2>FREE</h2>
                    30 days trial
                </p>
                <ul>
                    <li>App Suite</li>
                    <li>Unlimited Users</li>
                </ul>
            <button class="sign-up-btn center">Subscribe</button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <p class="plan-name">
                Single User<br>
                <h2>$7<sup>99</sup></h2>
                <span class="per-month-text">/month</span>
            </p>
            <ul>
                <li>Single app</li>
                <li>One user</li>
            </ul>
            <button class="sign-up-btn center">Subscribe</button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
                <p class="plan-name">
                    Company<br>
                    <h2>$29<sup>99</sup></h2>
                    <span class="per-month-text">/month</span>
                </p>
                <ul>
                    <li>Single app</li>
                    <li>Unlimited Users</li>
                </ul>
            <button class="sign-up-btn center">Subscribe</button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            
            <div class="recommended-plan">
                <div class="recommended-banner">Best Value</div>
                <p class="plan-name">
                    App Suite<br>
                    <h2>$44<sup>99</sup></h2>
                    <span class="per-month-text">/month</span>
                </p>
                <ul>
                    <li>All apps</li>
                    <li>Unlimited Users</li>
                </ul>
                <button class="sign-up-btn center">Subscribe</button>
            </div>
        </div>
    </div>
    <div class="row get-started-section">
        <div class="col-md-12">
            <h1 class="text-center">Boost your productivity with Payak Apps!</h1>
            <button class="sign-up-btn center-block">Get Started</button>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <h6 class="footer-heading">Contact Us</h6>
                <hr class="footer-hr">
                <a href="mailto:information@payakapps.com" class="footer-content">Learn more</a><br>
                <a href="mailto:support@payakapps.com" class="footer-content">Support</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <h6 class="footer-heading">Legal</h6>
                <hr class="footer-hr">
                <a href="#" class="footer-content">Privacy Policy</a><br>
                <a href="#" class="footer-content">Terms and Conditions</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <h6 class="footer-heading">Follow Us</h6>
                <hr class="footer-hr">
                <a href="https://facebook.com/PayakApps" class="footer-icon"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="https://facebook.com/PayakApps" class="footer-icon"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
            </div>
        </div>     
    </div>
</footer>

    <!-- <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="assets/js/main.js"></script>
    <script>
    $(function(){
        $(document).on('click', '.sign-up-btn', function() {
            window.location.href = "<?= base_url('companies/register') ?>";
        });
    });
    </script>
    
  <!-- </body> -->
<!-- </html> -->