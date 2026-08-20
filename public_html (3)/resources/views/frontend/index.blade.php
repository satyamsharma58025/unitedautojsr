@extends('frontend.partials.master')
@section('title', 'Home Page')
@section('content')

@include('frontend.components.banner')
@include('frontend.components.about')
@include('frontend.components.services')
@include('frontend.components.service-price')
@include('frontend.components.facts-counter')
@include('frontend.components.why-us')
@include('frontend.components.partners')
@include('frontend.components.testimonials')
@include('frontend.components.contact')

@endsection