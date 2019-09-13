<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>@yield('title')</title>

		<meta charset="utf-8">
		<link href="../../../img/favicon.png" rel="icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="../../../js/settings.js"></script>

	</head>

    <body  bgcolor="#fafafa">

		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<a class="navbar-brand" href="#">Agenda</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="/newuser">New User</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contacts">Contacts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/newcontact">New Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/export">Export Data</a>
					</li>  
					<li class="nav-item">
						<a class="nav-link" href="/out">logout</a>
					</li>    
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<div style="position:relative; ">
						<input type="text" name="lookfor" id="lookfor" class="form-control input-lg" placeholder="Search" />
						<button class="btn btn-light my-2 my-sm-0" id="search" name="search" type="button">Search</button>
						<div id="find" style="z-index:1000;"></div>		
					</div>
			   </form>
			</div>
		</nav>
		<br>

    	@yield('content')

    </body>

</html>