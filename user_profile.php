<?php
require_once 'DatabaseConnection.php';
require_once 'edit_profile.php';
$user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $result['full_name'] ?> Profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
</head>
<body>
 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="calendar_dashboard.php">Husholdningschef</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
					<li>
                        <a href="calendar_dashboard.php">Event kalender</a>
					</li>
					<li>
                        <a href="meal_plan_calendar.php">Målplan Kalender</a>
					</li>
					<li>
                        <a href="chores_calendar.php">Chores Kalender</a>
                    </li>
					<li>
                        <a href="shopping_list.php">Shopping list</a>
                    </li>
                </ul>
			    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php
                                echo $user;
                            ?>
                            <span class="glyphicon glyphicon-log-in"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Log ud</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-md-10 profile-username"><h1><?php echo $result['username'] ?></h1></div>
        </div>
        <div class="row">
  		    <div class="col-sm-3"><!--left col-->
                <form class="form" action="update_profile.php" method="POST" id="registrationForm" enctype="multipart/form-data">
                    <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" id="profile_avatar">
                    <h6>Upload et billede...</h6>
                    <input type="file" name = "image" class="text-center center-block file-upload" onchange="readURL(this);">
                    </div><hr><br>
            </div><!--/col-3-->
            <div class="col-sm-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Fulde navn</h4></label>
                              <input type="text" class="form-control" name="full_name" id="first_name" placeholder="" title="enter your first name if any." value="<?php echo $result['full_name'] ?>">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="family_name"><h4> Familie navn</h4></label>
                              <input type="text" class="form-control" name="family_name" id="last_name" placeholder="last name" title="enter your last name if any." value="<?php echo $result['family_name'] ?>">
                          </div>
                      </div>

                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="phone"><h4>Telefonnummer</h4></label>
                              <input type="text" class="form-control" name="phone_number" id="phone" placeholder="enter phone" title="enter your phone number if any." value="<?php echo $result['phone_number'] ?>">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="email"><h4>Email adresse</h4></label>
                              <input type="email" class="form-control" name="email" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="<?php echo $result['email'] ?>">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4> Familie status</h4></label>
                              <input type="text" class="form-control" name="family_status" id="email" placeholder="you@email.com" title="enter your email." value="<?php echo $result['family_status'] ?>">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4> Bruger rolle</h4></label>
                              <input type="text" class="form-control" name="user_role" placeholder="somewhere" title="enter a location" value="<?php echo $result['user_role'] ?>">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="password"><h4> Gammelt kodeord</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password." value="<?php echo $result['password'] ?>">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="password2"><h4> nyt kodeord</h4></label>
                              <input type="password" class="form-control" name="new_password" id="password2" placeholder="change Password" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="profile"><i class="glyphicon glyphicon-ok-sign"></i> Gemme</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Nulstil</button>
                            </div>
                      </div>
                    </div>
                </div>
            </div>


            <div class="row">
  		        <div class="col-sm-3"> </div>
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                        <?php
                            if ($user === 'admin') {?>
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
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            


<footer class="footer-distributed">

<div class="footer-left">

	<h3>Company<span>logo</span></h3>

	<p class="footer-links">
		<a href="#">Home</a>
		·
		<a href="#">Blog</a>
		·
		<a href="#">Pricing</a>
		·
		<a href="#">About</a>
		·
		<a href="#">Faq</a>
		·
		<a href="#">Contact</a>
	</p>

	<p class="footer-company-name">Company Name &copy; 2015</p>
</div>

<div class="footer-center">

	<div>
		<i class="fa fa-map-marker"></i>
		<p><span>21 Revolution Street</span> Paris, France</p>
	</div>

	<div>
		<i class="fa fa-phone"></i>
		<p>+1 555 123456</p>
	</div>

	<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:support@company.com">support@company.com</a></p>
	</div>

</div>

<div class="footer-right">

	<p class="footer-company-about">
		<span>About the company</span>
		Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
	</p>

	<div class="footer-icons">

		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="#"><i class="fa fa-github"></i></a>

	</div>

</div>


            

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