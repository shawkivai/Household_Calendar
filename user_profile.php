<?php
require_once('DatabaseConnection.php');
require_once('edit_profile.php');
$current_user = $_SESSION['user'];
// session_start();
?>
<!DOCTYPE html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
    <meta charset="utf-8" />
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <script src="main.js"></script>
</head>
<body>

<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-md-10 profile-username"><h1><?php echo $result['username']?></h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              
          <form class="form" action="update_profile.php" method="POST" id="registrationForm" enctype="multipart/form-data">
            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" id="profile_avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" name = "image" class="text-center center-block file-upload" onchange="readURL(this);">
            </div></hr><br>
                </div><!--/col-3-->
                <div class="col-sm-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Full Name</h4></label>
                              <input type="text" class="form-control" name="full_name" id="first_name" placeholder="" title="enter your first name if any." value="<?php echo $result['full_name']?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="family_name"><h4>Family Name</h4></label>
                              <input type="text" class="form-control" name="family_name" id="last_name" placeholder="last name" title="enter your last name if any." value="<?php echo $result['family_name']?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone_number" id="phone" placeholder="enter phone" title="enter your phone number if any." value="<?php echo $result['phone_number']?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="<?php echo $result['email']?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Family Status</h4></label>
                              <input type="text" class="form-control" name="family_status" id="email" placeholder="you@email.com" title="enter your email." value="<?php echo $result['family_status']?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>User Role</h4></label>
                              <input type="text" class="form-control" name="user_role" placeholder="somewhere" title="enter a location" value="<?php echo $result['user_role']?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Old Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password." value="<?php echo $result['password']?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>New Password</h4></label>
                              <input type="password" class="form-control" name="new_password" id="password2" placeholder="change Password" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="profile"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>   
                    <?php 
                      if($current_user === 'admin'){ ?>
                       <form class="form" action="service/sent_mail.php" method="POST" id="registrationForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-xs-6">
                                <label for="password"><h4>Invite User</h4></label>
                                <input type="email" class="form-control" name="invite_mail" id="invite_mail" placeholder="email" title="Invite users">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                <br>
                              	    <button class="btn btn-lg btn-success" type="submit" name="email_submit"><i class="glyphicon glyphicon-ok-sign"></i> Send Email</button>
                               	    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Cancel</button>
                                </div>
                        </div>
                        </form>
                      
                      <?php
                      }
                      ?>
                  <script>
                       function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#profile_avatar')
                                        .attr('src', e.target.result)
                                        .width(200)
                                        .height(200);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                  </script>
                                                         
</body>
</html>