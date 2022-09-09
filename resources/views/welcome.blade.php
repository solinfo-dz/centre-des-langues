<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body id="ot-body" class="full-width">
		<div class="body-bg">
			<div class="clearfix"></div>
			<div class="wrapper">
				
		
 <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
   
		<p class="text-light"><span>Contacter le centre</span> - <span>Fax</span> : +213(0)46 20 88 49</p></div>
   
  </div>
	</div>


			<div id="oTopBlock" class="section">
				<div class="container">
					<div class="row">
					<div id="ot-logo" class="col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">			<div class="moduletable">
											

					<div class="custom w-25">
						<p><a href="#"><img src="images/logo ceil tiaret.png" alt="" border="0"></a></p></div>
							</div>
						
					</div>
				</div>
			</div>
				</div>

						
		    <header class="d-flex flex-wrap justify-content-center  py-3 mb-4 border-bottom">
  

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{url('/')}}" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{url('/register')}}" class="nav-link">Inscription</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="{{url('/login')}}" class="nav-link">Espace membre</a></li>
    
      </ul>
    </header>
			
	
			<div class="moduleItemImage" class="section">
							<a href="#" title="Continue reading &quot;Offres de Formations&quot;">
								<img src="./images/hello.jpg" alt="hello" style="width:100%;">
					</a>
			</div>																						<a class="#">Offres de Formations</a>
									<div class="clr"></div>
</body>
</html>