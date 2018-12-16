<?php
require_once 'DatabaseConnection.php';
session_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
$family_name=isset($_SESSION['family_name']) ? $_SESSION['family_name'] : '';
$user_role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : '';
$sql = "SELECT id, title, start, end, color FROM events WHERE family_name = '$family_name'";
$req = $DBcon->prepare($sql);
$req->execute();
$events = $req->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Arrangementskalender</title>
    <!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<!-- FullCalendar -->
		<link href='css/fullcalendar.css' rel='stylesheet' />
		<link href='css/footer.css' rel='stylesheet' />
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
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
                        <a href="user_profile.php">Profil</a>
										</li>
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
                    <?php echo $user; ?>
                    <span class="glyphicon glyphicon-log-in"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="logout.php">Log ud</a></li>
                </ul>
            </li>
        </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
								<h1>Arrangementskalender for husholdning</h1>
								<?php if ($_SESSION['user'] === 'admin') {?>
									<p class="lead">Du kan oprette begivenheder, administrere begivenheder og slette begivenheder</p>
								<?php } else {?>
									<p>Familiemedlemmer kan kun se begivenhederne</p>
								<?php }?>
                <div id="calendar" class="col-centered">
                </div>
            </div>

        </div>
        <!-- /.row -->

		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="service/addEvent.php">

			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Tilføj begivenhed</h4>
			  </div>
			  <div class="modal-body">

				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titel</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Titel">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Farve</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Vælge</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Mørkeblå</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; turkis</option>
						  <option style="color:#008000;" value="#008000">&#9724; Grøn</option>
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Gul</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Rød</option>
						  <option style="color:#000;" value="#000">&#9724; Sort</option>

						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Start dato</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start">
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Slutdato</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end">
					</div>
				  </div>

			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tæt</button>
				<button type="submit" class="btn btn-primary">Gem ændringer</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>



		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="service/editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Rediger begivenhed</h4>
			  </div>
			  <div class="modal-body">

				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titel</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Titel">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Farve</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						    <option value="">Vælge</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Mørkeblå</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; turkis</option>
						  <option style="color:#008000;" value="#008000">&#9724; Grøn</option>
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Gul</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Rød</option>
						  <option style="color:#000;" value="#000">&#9724; Sort</option>

						</select>
					</div>
				  </div>
				    <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Slet begivenhed</label>
						  </div>
						</div>
					</div>

				  <input type="hidden" name="id" class="form-control" id="id">


			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tæt</button>
				<button type="submit" class="btn btn-primary">Gem ændringer</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
    </div>
    <!-- /.container -->

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

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/locale/da.js'></script>

	<script>

	$(document).ready(function() {
		var utc = new Date().toJSON().slice(0,10).replace(/-/g,'/');
		//document.write(utc);

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			monthNames: ['januar','februar','marts','april','maj','juni','juli','august','september','oktober','november','december'],
      // monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
			dayNames: ['mandag','tirsdag','onsdag','torsdag','fredag','lørdag','søndag'],
			dayNamesShort: ['man','tir','ons','tor','fre','lør','søn'],
			defaultDate: utc,
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {

				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD'));
				<?php if ($user_role === 'parent') {?>
					$('#ModalAdd').modal('show');
				<?php }?>
			},
			eventRender: function(event, element) {
				element.bind('click', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					<?php if ($user_role === 'parent') {?>
					$('#ModalEdit').modal('show');
				<?php }?>
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach ($events as $event):

    $start = explode(" ", $event['start']);
    $end = explode(" ", $event['end']);
    if ($start[1] == '00:00:00') {
        $start = $start[0];
    } else {
        $start = $event['start'];
    }
    if ($end[1] == '00:00:00') {
        $end = $end[0];
    } else {
        $end = $event['end'];
    }
    ?>
											{
												id: '<?php echo $event['id']; ?>',
												title: '<?php echo $event['title']; ?>',
												start: '<?php echo $start; ?>',
												end: '<?php echo $end; ?>',
												color: '<?php echo $event['color']; ?>',
											},
										<?php endforeach;?>
			]
		});

		function edit(event){
			start = event.start.format('YYYY-MM-DD');
			if(event.end){
				end = event.end.format('YYYY-MM-DD');
			}else{
				end = start;
			}

			id =  event.id;

			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;

			$.ajax({
			 url: 'service/editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.');
					}
				}
			});
		}

	});

</script>

</body>

</html>
