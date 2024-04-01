
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/appAdmin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    
</head>
<body>
    <nav id="slide-menu">
	 <ul>
		<li><a class="nav-link" href="{{route('profil')}}">Profil</a></li>
		
		<li><a class="nav-link" href="{{route('index')}}">Produits</a></li>
		<li><a class="nav-link" href="{{route('listeCommande')}}">Commandes</a></li>
		<li><a class="nav-link" href="{{route('listeUser')}}">Utilisateurs</a></li>
		<li><a class="nav-link" href="{{route('acceuil')}}">Se déconnecter</a></li>

	</ul> 
	
</nav>

<div id="content">
<h1 class="dash">Dashboard</h1>
<hr>
	<div class="menu-trigger"></div>
	
  <div class="container-fluid" id="globale">
    @yield('ContentAdmin')


  </div>

</div>
<script>
    (function() {
	var $body = document.body
	, $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

	if ( typeof $menu_trigger !== 'undefined' ) {
		$menu_trigger.addEventListener('click', function() {
			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

}).call(this);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
