@extends('../layouts.master')
@section('contact-active', 'is-active')
@section('fixedFooterOnPage', 'bottom: 0; position: fixed')

@section('heroContent')

@endsection

@section('mainContent')
	<!-- Section 2 4 Contact Intro + Form-->
	@include('../contacts.contactsBodyPartial')

@endsection