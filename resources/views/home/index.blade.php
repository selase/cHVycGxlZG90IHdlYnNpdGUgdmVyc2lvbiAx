@extends('../layouts.master')
@section('home-active', 'is-active')

@section('heroContent')
<div class="container has-text-centered move-up">

	<div class="columns shadowy">
    	{{-- <figure class="image">
		  <img id="homebg" class="rounded" src="bulma/img/topbg-home-4.jpg" onload="this.style.opacity='1'">
		</figure> --}}
	</div>
</div>
@endsection

@section('mainContent')

{{-- Opening Message --}}
@include('../home.openingMessagePartial')

<!-- Section 2 Solutions For Front Page-->
@include('../home.solutionsPartialForFrontPage')

<!-- Section 2 4 Message-->
@include('../home.homeMessagePartial')

<!-- Section Solutions Wide-->
{{-- @include('../partials.solutionsPartial') --}}

<!-- Section Services -->
{{-- @include('../partials.servicesPartial') --}}

<!-- Competitive Advantage -->
{{-- @include('../partials.competitiveAdvantagePartial') --}}

<!-- Team Members -->
{{-- @include('../partials.teamMembersPartial') --}}


<!-- Our Clients -->
{{-- @include('../partials.clientsPartial') --}}

{{-- @include('../partials/clientLogoPartial') --}}

@endsection

<section>
	<example></example>
</section>

