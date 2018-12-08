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
    <form class="form-horizontal" action="openCart_service.php" method="post">

        <div class="form-group">
            <label class="control-label col-sm-4">Recepie Name</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Recepie name" name="recepie_name" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                <button type="submit" class="btn btn-info" name="signup">done</button>
            </div>
        </div>
    </form>
</body>
</html>