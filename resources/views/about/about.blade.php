@extends('../layouts.master')
@section('about-active', 'is-active')

@section('heroContent')
<div class="container has-text-centered move-up">

	<div class="columns rounded" style="background-color: #59b3d5">
    	<figure class="image centerContent" style="padding-top: 16px">
		  <img id="topbg" class="rounded" src="bulma/img/team/topbg-team.jpg" onload="this.style.opacity='1'">
		</figure>
	</div>
</div>
@endsection

@section('mainContent')
	<!-- Section 2 4 About us-->
	@include('../about.aboutusPartial')

	<!-- Board Members -->
	{{-- @include('../partials.boardPartial') --}}

	<!-- Team Members -->
	{{-- @include('../partials.teamMembersPartial') --}}

	<!-- Our Market-->
	{{-- @include('../partials.marketPartial') --}}

@endsection



