<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->authLogin();

$message=NULL;
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $flag = $db->dlogin($username, $password);
    if($flag){
        header("Location: http://localhost/blood/profile.php");
    } else {
        $invalid = "Invalid username or password!";
        
    }
}




$title="Donor Login";
include 'layout/_header.php';

?>

 <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome To Blood Donation Website    </p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 8080565875</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     
   <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    
                    <a href="users/index.html" class="navbar-brand"></i>Blood Donation</a>
               </div>

               
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="users/index.php" class="smoothScroll">Home</a></li>
                         <li><a href="users/member.php" class="smoothScroll">Our Members</a></li>
                         <li><a href="users/register.php" class="smoothScroll">Join Us</a></li>
                         <li><a href="users/availability.php" class="smoothScroll">Check Availibility</a></li>
                         <li><a href="donorlogin.php" class="smoothScroll">Donor Login</a></li>
                         <li class=""><a href="index.php">Employee Login</a></li>
                          <li><a href="admin/index.php" class="smoothScroll">Admin Login</a></li>
                    </ul>
               </div>

          </div>
     </section>

<br>
<br>
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <?php if(isset($invalid)): ?>
        <div class="alert-danger" id="invalid"><?= $invalid; ?></div>
        <?php endif; ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-4">
                    <img src="assets/security-icon.png" class="img img-responsive img-thumbnail">
                </div>
                <h3>Donor Login</h3>
            </div>
            <div class="panel-body">
                <form class="form-vertical" role="form" method="post" action="donorlogin.php">
                    <div class="form-group">
                        <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group loginBtn">
                        <button type="submit" name="loginBtn" class="btn btn-primary btn-sm">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>

