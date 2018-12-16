<!DOCTYPE html>
<html lang="en">
<head>
    <title>Husholdningschef</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script rel="stylesheet" type="text/javascript" src="Js/login.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand w3_engineers" href="index.php">Husholdningschef</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Hjem</a></li>
            <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>
            <li><a href="#">Page 2</a></li> -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Log på</a></li>
        </ul>
    </div>
</nav>

<div class="container">

    <h1 class="lunch_header">Tilmeld dig venligst</h1>

        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->

        <div class="row signup_form">
            <form class="form-horizontal" action="db_signup.php" method="post">

                <div class="form-group">
                    <label class="control-label col-sm-4">Familie navn</label>
                    <div class="col-sm-4">
                        <div class="">
                            <input type="text" class="form-control" id="family_name" placeholder="Familie navn" name="family_name" required>
                            <span></span>
                        </div>
                </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Familie status</label>
                    <div class="col-sm-4">
                    <select class="form-control" name = "family_status">
                        <option value="happy">Lykkelig</option>
                        <option value= "sad">Trist</option>
                    </select>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-4">Fulde navn</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="full_name" placeholder="Fulde navn" name="full_name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Telefonnummer</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="phone_no" placeholder="Phone Number" name="phone_number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Bruger rolle</label>
                    <div class="col-sm-4">
                    <select class="form-control" name = "user_role" required>
                        <option value="parents">Forældre</option>
                        <option value= "children">børn</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">brugernavn</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="username" placeholder="brugernavn" name="username" required>
                    </div>
                </div>

                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">email adresse</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" id="password" placeholder="email adresse" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Adgangskode</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="password" placeholder="Indtast adgangskode" name="password" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                        <button type="submit" class="btn btn-info" name="signup">Indsend</button>
                    </div>
                </div>
            </form><!-- /card-container -->
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

</footer>

    <script>
            $('document').ready(function(){
            console.log('shawki');
            var family_name_state = false;
            $('#family_name').on('blur', function(){
            var family_name = $('#family_name').val();
            if (family_name == '') {
                family_name_state = false;
                return;
            }
        $.ajax({
            url: 'familyname_check.php',
            type: 'post',
            data: {
                'family_name_check' : 1,
                'family_name' : family_name,
            },
            success: function(response){
            if (response == 'taken' ) {
                family_name_state = false;
                $('#family_name').parent().removeClass();
                $('#family_name').parent().addClass("form_error");
                $('#family_name').siblings("span").text('Beklager Familienavn er allerede taget. Vælg venligst et unikt navn');
            }else if (response == 'nottaken') {
                family_name_state = true;
                $('#family_name').parent().removeClass();
                $('#family_name').parent().addClass("form_success");
                $('#family_name').siblings("span").text('Familienavn til rådighed');
            }
            }
        });
        });	
            });	
    </script>



</body>
</html>