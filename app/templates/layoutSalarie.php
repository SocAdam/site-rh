
<!DOCTYPE html>
<html>
<head>
	<title>Espace Salarié</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">


	    <!-- Bootstrap Core CSS -->

	    	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
			
    	    <!-- CSS espaceSalarie -->

	<link rel="stylesheet" href="<?= $this->assetUrl('css/espaceSalarie.css') ?>">

	<link rel="stylesheet" href="<?= $this->assetUrl('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.css') ?>">	
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.css' />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>
	<script src="<?= $this->assetUrl('js/main.js') ?>"></script>
    	    <link rel="stylesheet" href="<?= $this->assetUrl('css/main.css') ?>">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

	<div class="page-header">
	<a href="<?= $this->url('home');?>">Accueil</a><h4>Bienvenue <?= $this->e($w_user['genre'])?> <?= $this->e($w_user['firstname'])?> sur votre espace Easyhr</h4>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-3">
				
				<ul id="menu-demo2">
					<li><a href="#">Demande Specifique</a>
						<ul>
							<li><a href="<?= $this->url('notifs');?>">Notifications</a></li>				
						</ul>
					</li>
					<li><a href="#">Gestion du temps</a>

					</li>
					<li><a href="#">Documents</a>
					</li>
					<li><a href="#">Formations</a>
						<ul>
							<li><a href="#">DIF/CIF</a></li>
							<li><a href="#">Catalogue de formations</a></li>
						</ul>						
					</li>
				</ul>	
			</div>	

				<a href="<?= $this->url('logout');?>">Déconnexion</a>	

		</div>
	</div>
		</div>
		<div id='calendar'>
		</div>
		<div id='suitecalendar2'>
		<a href="../calendar2" target="_blank">Ouvrir le calendrier d'évènements</a>
		</div>

<?= $this->section('main_content') ?>

</body>
</html>