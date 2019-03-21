<?php
$success=NULL;$message=NULL;
if(isset($_POST['submitBtn'])){
    $fname = $_POST['firstName'];
    $mname = $_POST['middleName'];
    $lname = $_POST['lastName'];
    $sex = $_POST['sex'];
    $bType = $_POST['b_type'];
    $dob = $_POST['dob'];
     $gov_id = $_POST['gov'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $phone = $_POST['phone'];
    //Medical Information
    $donationDate = $_POST['don_date'];
    $stats = $_POST['stats'];
    $temp = $_POST['temp'];
    $pulse = $_POST['pulse'];
    $bp = $_POST['bp'];
    $weight = $_POST['weight'];
    $hemoglobin = $_POST['hemoglobin'];
    $aids = $_POST['aids'];
    $malariaSmear = $_POST['malariaSmear'];
    $hematocrit = $_POST['hematocrit'];

    require_once 'php/DBConnect.php';
    $db = new DBConnect();
    $flag = $db->addDonor($fname, $mname, $lname, $gov_id, $sex, $bType, $dob, $address, $city, $donationDate, $stats, $temp,
            $pulse, $bp, $weight, $hemoglobin, $aids, $malariaSmear, $hematocrit, $mobile, $phone);
    
    if($flag){
        $success = "The donor has been successfully added to the database!";
    } else {
        $message = "There was some error saving the user to the database!";
    }
}

$title = "Donor";
$setDonorActive = "active";
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
                            <li><a href="home.php" class="smoothScroll">Home</a></li>
                         <li><a href="donor.php" class="smoothScroll">New Donor</a></li>
                         <li><a href="members.php" class="smoothScroll">Our Members</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
               </div>

          </div>
     </section>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            
            <?php if(isset($success)): ?>
            <div class="alert-success fade-out-5"><?= $success; ?></div>
            <?php endif; ?>
            <?php if(isset($message)): ?>
            <div class="alert-danger fade-out-5"><?= $message; ?></div>
            <?php endif; ?>
            
            <form method="post" class="form-horizontal" role="form" action="donor.php">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Donor Basic Info</h5>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3">Name</label>
                            <div class="col-sm-3">
                                <input type="text" name="firstName" placeholder="First Name" class="form-control" required="true">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="middleName" placeholder="Middle Name" class="form-control" >
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Gender</label>
                            <div class="col-sm-4 radio-inline">
                                <input type="radio" value="male" name="sex" checked="true">Male                         
                            </div>
                            <input type="radio" value="female" name="sex">Female                          

                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Blood Type:</label>
                            <div class="col-sm-8">
                                <select name="b_type" class="form-control">
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">D.O.B</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" required="true">
                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-sm-4">Aadhaar Card</label>
                            <div class="col-sm-8">
                                <input type="number" name="gov" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea rows="8" name="address" class="form-control" required="true"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Mobile</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" min="1000000000" name="mobile" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Phone</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" min="1000000000" name="phone" class="form-control">
                            </div>
                        </div>           
                    </div>
                    <div class="panel-heading">
                        <h5>Donor Medical Info</h5>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-4">Date of Donation</label>
                            <div class="col-sm-8">
                                <input type="date" name="don_date" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Statistics</label>
                            <div class="col-sm-8">
                                <input type="text" name="stats" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Temperature</label>
                            <div class="col-sm-8">
                                <input type="decimar" name="temp" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Pulse</label>
                            <div class="col-sm-8">
                                <input type="text" min="0" max="300" name="pulse" value="" class="form-control" required="true"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Blood Pressure</label>
                            <div class="col-sm-8">
                                <input type="text" name="bp" value="" class="form-control" required="true"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Weight</label>
                            <div class="col-sm-8">
                                <input type="decimal" name="weight" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Hemoglobin</label>
                            <div class="col-sm-8">
                                <input type="text" name="hemoglobin" value="" required="true" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4">AIDS</label>
                            <div class="col-sm-8">
                                <input type="text" name="aids" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Malaria Smear </label>
                            <div class="col-sm-8">
                                <input type="text" name="malariaSmear" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Hematocrit </label>
                            <div class="col-sm-8">
                                <input type="text" name="hematocrit" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4"> </label>
                            <div class="col-sm-8">
                                <button class="btn btn-success" type="submit" name="submitBtn" >Add Donor</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
