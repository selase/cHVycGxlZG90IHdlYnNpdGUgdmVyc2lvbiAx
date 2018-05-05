<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Purpledot</title>
	<link rel="stylesheet" href="bulma/css/bulma.css">
	<link rel="stylesheet" href="bulma/css/custom.css">
	<link rel="stylesheet" href="bulma/css/bulma.css.map">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

	<!-- Sliders -->
	<link rel="stylesheet" href="bulma/css/slider.css">
	<link rel="stylesheet" href="bulma/css/app.css">

	<!-- Animation -->
	<link rel="stylesheet" href="bulma/css/animations.css">
	<!-- Using animate.css -->
	<link rel="stylesheet" href="bulma/css/animate.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->


	<script src="bulma/javascript/jquery-2.2.0.min.js"></script>
	<script src="bulma/javascript/bulma.js"></script>
	<script src="bulma/javascript/clipboard.min.js"></script>
	<script src="bulma/javascript/chart.js"></script>
	<script src="bulma/javascript/index.js"></script>
	<script src="bulma/javascript/hamburger-menu.js"></script>

	<link rel="stylesheet" href="bulma/css/animate.css">

	<script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/app.css"> -->

	{{-- Dynamic Styles will go here --}}
	@stack('styles')
	
</head>
<body>

<!-- Hero + Navigation -->
<section class="hero is-info is-small">
  <!-- Hero header: will stick at the top -->
  <div class="hero-head">
    <header class="nav">
      <div class="container" style="width: 70%">
        {{-- <div class="nav-left is-hidden-mobile">
          <a class="nav-item">
            <img src="bulma/img/logo/logo@2x.png" alt="Logo">
          </a>
          
        </div> --}}

        <div id='nav-menu' class="nav-left nav-menu">
          <a href="{{ url('/') }}" class="nav-item @yield('home-active')">
            Home
          </a>
          <a href="{{ url('aboutus') }}" class="nav-item @yield('about-active')">
            About
          </a>
          <a href="{{ url('products') }}" class="nav-item @yield('product-active')">
            Products & Services
          </a>
          {{-- <a href="{{ url('clients') }}" class="nav-item @yield('client-active')">
            Clients
          </a> --}}
          {{-- <a href="{{ url('contact') }}" class="nav-item @yield('contact-active')">
            Contact
          </a> --}}
        </div>



        {{-- Center Page Logo --}}
        <div class="nav-center">
          <a href="{{ url('/') }}" title="" class="nav-item">
            <img src="bulma/img/logo/logo8@3x.png" width="150px" alt="Logo">
          </a>
        </div>

        <span id="nav-toggle" class="nav-toggle">
          <span><a href="{{ url('/') }}" class="nav-item @yield('home-active')">Home</a></span>
          <span><a href="{{ url('aboutus') }}" class="nav-item @yield('about-active')">About</a></span>
          <span><a href="{{ url('products') }}" class="nav-item @yield('product-active')">Products & Services</a></span>
          <span><a href="{{ url('contact') }}" class="nav-item @yield('contact-active')">Contact</a></span>
        </span>

        <div id='nav-menu' class="nav-right nav-menu">
        	<a href="{{ url('research') }}" class="nav-item @yield('research-active')">
		        Research
		    </a>
		    <a href="{{ url('contact') }}" class="nav-item @yield('contact-active')">
		        Contact
		    </a>
        	<div class="leftnav-span-format">
        		{{-- PHONE: +233 20 8333151 <br> EMAIL: <a href="mailto:hello@wearepurpledot.com?subject=Westite Request" "email me">hello@wearepurpledot.com</a> --}}
        		
        	</div>

          
        </div>
      </div>
    </header>
  </div>

</section>

<!-- MAIN CONTENT -->
@section('mainContent')
@show
<!-- END MAIN CONTENT -->



<!-- Footer -->
<footer class="footer page" style="@yield('fixedFooterOnPage')">
  <div class="container">
    <div class="content has-text-centered">
    
      <p style="font-family: Helvetica Neue; font-weight: 400;font-size: 0.8em;">
      		Copyright © <?php echo date("Y"); ?> Purpledot Limited. All rights reserved. Made by <a href="http://wearepurpledot.com">US</a> Phone: +233 54 134 3670 | Email: <a href="mailto:hello@wearepurpledot.com?subject=Westite Request" "email me">hello@wearepurpledot.com</a>
      </p>
      <p></p>
    </div>
  </div>
</footer>


<!-- <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script> -->
<script src="js/app.js"></script>
<script src="bulma/javascript/hamburger-menu.js"></script>
<script type="text/javascript">
	function search() {
	  var search = $('#search');
	  var searchValue = search.val('');
	  search.focus(); 
	}


	$(function() { //shorthand document.ready function
	    $('#form').on('submit', function(e) { //use on if jQuery 1.7+
	        e.preventDefault();  //prevent form from submitting
	        redirect();

	    });
	});

	function redirect() { 
		// alert('how can i help you today');
		var searchValue = $('#search').val();
		$('#search').val() = '';
		// window.location.href = searchValue + ".html";
		var audio = new Audio('https://ahntc.podbean.com/mf/web/gkd7bt/WAYMAKER_-_THE_WAY_OUT.mp3');
		audio.play();
		$('#search').val() = '';
		
	}

		Mousetrap.bind('9', search);

</script>
<script>
	// $('#hov').hover(
 //       function(){ $(this).addClass('shadowy') },
 //       function(){ $(this).removeClass('shadowy') }
	// )
	$('#hov').hover(
		$('#hov').animateCss('bounce')
	);
</script>
<script>
	$(window).scroll(function() {
		$('#slideUp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			// if (imagePos < topOfWindow+680) {
				$(this).addClass("floating");
			// }
		});

		$('#teamSlideUp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+720) {
				$(this).addClass("pullUp");
			}
		});

		$('#clientSlideUp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+720) {
				$(this).addClass("pullUp");
			}
		});

		$('#advSlideUp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+600) {
				$(this).addClass("floating");
			}
		});
	});
</script>

{{-- Dynamic Scripts go here --}}
@stack('scripts')

</body>
</html>