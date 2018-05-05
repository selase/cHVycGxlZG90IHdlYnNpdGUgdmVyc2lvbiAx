@extends('../layouts.master')
@section('client-active', 'is-active')

@section('heroContent')
<div class="container has-text-centered move-up">
		<div class="columns rounded" style="background-color: #73bcdf">
	    	<figure class="image centerContent" style="padding-top: 40px">
			  <img id="topbg" src="bulma/img/clients/topbg-clients.png" onload="this.style.opacity='1'">
			</figure>
		</div>
    </div>
@endsection

@section('mainContent')
	<!-- Section: Intro + Client Categories-->
	@include('../clients.clientsBodyPartial')

	@include('../partials/clientLogoPartial')


@endsection



