@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    @include('frontend.pages.hero')
    <!-- /Hero Section -->

    <!-- Clients 2 Section -->
    @include('frontend.pages.client')
    <!-- /Clients 2 Section -->

    <!-- About Section -->
    @include('frontend.pages.about')
    <!-- /About Section -->

    <!-- Skills Section -->
    @include('frontend.pages.skills')
    <!-- /Skills Section -->

    <!-- Services Section -->
    @include('frontend.pages.services')
    <!-- /Services Section -->

    <!-- Call To Action Section -->
    @include('frontend.pages.action')
    <!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    @include('frontend.pages.portfolio')
    <!-- /Portfolio Section -->

    <!-- Team Section -->
    @include('frontend.pages.team')
    <!-- /Team Section -->

    <!-- Testimonials Section -->
    @include('frontend.pages.testimonials')
    <!-- /Testimonials Section -->

    <!-- Faq 2 Section -->
    @include('frontend.pages.faq')
    <!-- /Faq 2 Section -->

    <!-- Contact Section -->
    @include('frontend.pages.contact')
    <!-- /Contact Section -->
@endsection
