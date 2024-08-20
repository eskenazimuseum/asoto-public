<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <title>A Space of Their Own</title>

    <link rel="icon" type="image/svg+xml" href="{{ asset('brand/CONDENSED.svg') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="{{ asset('assets/vendor/ckeditor5/build/ckeditor.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163124172-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-163124172-1');
	</script>
	</head>

	<body>
	  	<header class="header">
	  		<img id="site-header-logo-cond" src="{{ asset('brand/CONDENSED.svg') }}" alt="" />
	  		<h1 id="site-header"><a href="/space-of-their-own">A Space of Their Own</a></h1>
	  		<nav>
	  			<ul>
	  				<li><a href="/space-of-their-own/artists">Explore</a></li>
	  				<li><a href="/space-of-their-own/essays">Essays</a></li>
	  				<li><a href="/space-of-their-own/about">About</a></li>
	  			</ul>
	  		</nav>
	  	</header>

	  	<section class="content">
	  		@yield('content')
	  	</section>

	  	<footer class="footer">
	  		<div class="skirt-nav">
	  			<ul>
	  				<li><a href="/space-of-their-own/about">About the Project</a></li>
	  				<li><a href="/space-of-their-own/about#jane-fortune">About Jane Fortune</a></li>
	  				<li><a href="https://www.myiu.org/one-time-gift?appealid=233ba4cf-3c06-4c34-8f5f-5fd1f5d55183&account=I320002176,I320002173" target="_blank">Give</a></li>
	  				<li><a href="https://artmuseum.indiana.edu/about/staff/_curatorial/johnson-danielle.html" target="_blank">Contact</a></li>
	  				<li><a href="/space-of-their-own/dashboard">Editor Dashboard</a></li>
	  			</ul>
	  		</div>
	  		<div class="museum-address">
	  			<a href="https://artmuseum.indiana.edu/" target="_blank" style="text-decoration: none;"><img id="footer-lockup" alt="A Space of Their Own is a project of the Sidney and Lois Eskenazi Museum of Art" src="{{ asset('brand/footer-lockup.svg') }}"/></a>
	  			<span id="footer-address">1133 E. Seventh Street | Bloomington, IN 47405 | 812-855-5445 | <a href="https://artmuseum.indiana.edu/" target="_blank" style="text-decoration: none; color: black;">artmuseum.indiana.edu</a></span>
	  		</div>
	  	</footer>
	  	<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>

<!--
    ## Author Notes
    #
    # This website was developed by Cassi Tucker, Manager of Museum Technology, for the Eskenazi Museum of Art at Indiana University.
    # Development active on this site from 2018-2024.
    # 
    # Contact: tuckercc@iu.edu | artmuseum.indiana.edu | cassitucker.com
    #
    # Executive supervision provided by Scout, cat.
    #       |\      _,,,---,,_
    # ZZZzz /,`.-'`'    -.  ;-;;,_
    #      |,4-  ) )-,_. ,\ (  `'-'
    #      '---''(_/--'  `-'\_)
    #
-->