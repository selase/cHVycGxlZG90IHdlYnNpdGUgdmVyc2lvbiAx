@extends('../layouts.master')
@section('product-active', 'is-active')

@section('heroContent')
<div class="container has-text-centered move-up">

	<div class="columns rounded" style="background-color: #06C2F9">
    	<figure class="image centerContent" style="padding-top: 56px">
		  <img src="bulma/img/topbg-products-4.png">
		</figure>
	</div>
</div>

@endsection

@section('mainContent')
	<!-- Section : Products Intro + Transflow+Graph + OSIS-->
	@include('../products.productsBodyPartial')

@endsection



