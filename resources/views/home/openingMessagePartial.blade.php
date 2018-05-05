<section class="section page" style="background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);">
	<div class="container">
		<div class="columns">
			<div class="column" style="text-align: center">

				<div class="side-carousel" style="width: 488px; height: 488px; border: 3px solid white; border-radius: 5px;">
				  <span><img data-lazy="bulma/img/home/blue@2x.png"/></span>
				  <span><img data-lazy="bulma/img/home/chain@2x.png"/></span>
				  <span><img data-lazy="bulma/img/home/appdesign@2x.png"/></span>
				  <span><img data-lazy="bulma/img/home/light@2x.png"/></span>
				  <span><img data-lazy="bulma/img/home/fandson@2x.png"/></span>
				  <span><img data-lazy="bulma/img/home/biomimicry@2x.png"/></span>
	
				</div>

			</div>
			<div class="column" style="text-align: left; padding-left: 40px">
				<h1 style="font-size: 1em; padding-bottom: 50px; color: white">............</h1>
				<h1 class="title-two" style="font-size: 2.8rem">
					<span style="color: #000000b8">Artifitial Intelligence </span>
					<span style="color: white">Machine learning</span>
					<span style="color: #000000b8">Mobile Phone Apps </span>
					<span style="color: white">Data Science</span>
					<span style="color: #000000b8">Biomimicry Research</span>
					<span style="color: white">Software Engineering</span>
					<span style="color: #000000b8">CS Research </span>
				</h1>
				<div class="leftnav-span-format">
        		{{-- PHONE: +233 20 8333151 | EMAIL: <a href="mailto:hello@wearepurpledot.com?subject=Westite Request" "email me">hello@wearepurpledot.com</a> --}}
        		<span style="text-decoration: none; background-color: #020031; color: #fff; font-size: 1.2em">
	        		We rigorously apply <a href="biomimicry">Biomimicry</a> , AI & ML   
	        		to the design and development of efficient and sustainable software.
        		</span>
			</div>

		</div>
	</div>
</section>

<!-- Push a style dynamically from a view -->
@push('styles')
    <link href="{{asset('slick/slick.css')}}" />
    <link href="{{asset('slick/slick-theme.css')}}" />
    {{-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> --}}
@endpush

<!-- Push a script dynamically from a view -->
@push('scripts')
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      
      $('.side-carousel').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 4000,
		});
    });
  </script>
@endpush