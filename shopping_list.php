<!DOCTYPE html>
<html>
<head>
<head>
    <title>Husholdningschef</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script rel="stylesheet" type="text/javascript" src="Js/login.js"></script>
</head>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand w3_engineers" href="index.php">Husholdningschef</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Hjem</a></li>
            <li>
                <a href="events_calendar.php">Event kalender</a>
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
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Log på</a></li>
        </ul>
    </div>
    </nav>

    <div class="container">

    <h1 class="lunch_header"> Søg opskrift</h1>

    <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->

    <div class="row signup_form">
        <form class="form-horizontal" action="shopping_list.php" method="post">

            <div class="form-group">
                <label class="control-label col-sm-4">Recepie Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Recepie name" name="recepie_name" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-4">
                    <button type="submit" class="btn btn-info" name="submit">done</button>
                </div>
            </div>
        </form>
    </div>

    <?php
        if(isset($_POST['submit'])){
        $recepie_name = $_POST['recepie_name'];

        $siteUrl = 'https://www.norsmor.dk/'.$recepie_name.'/';
        $requestUrl = 'https://opengraph.io/api/1.1/site/' . urlencode($siteUrl);
        
        // Make sure you include your free app_id here!  No CC required
        $requestUrl = $requestUrl . '?app_id=5c0c33ba87313612004c4d3a';
        
        $siteInformationJSON = file_get_contents($requestUrl);
        $siteInformation = json_decode($siteInformationJSON, true);

        // echo '<pre>';
        // print_r ($siteInformation);
        // echo '</pre>';
        
        $title = $siteInformation['hybridGraph']['title'];
        $description =  $siteInformation['hybridGraph']['description'] ;
        $logo = $siteInformation['hybridGraph']['image'] ;
        ?>
		<div class="row">
			<div class="col-md-6 list-item">
				<img src="<?php echo $logo ?>" alt="" class="img-fluid" height="250px" width="350px" style="padding-left:100px"/>
				<h3 class=""><?php echo $title ?></h3>
				<p class=""><?php echo $description ?></p>
				<!-- <a href="#" class="text-capitalize">Read more <span class="fas fa-long-arrow-alt-right"></span></a> -->
			</div>
		</div>
        <?php } ?>
    </div>
    
</body>
</html>