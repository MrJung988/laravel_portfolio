@extends('layouts.master')
@section('title','Homepage | Samir Karki')
@section('main')
    <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url({{asset('image/aaa.jpg')}}">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <p class="display-6 color-d">Hello!</p>
          <h1 class="hero-title mb-4">I am Samir Karki</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Web Designer,Laravel Developer, Backend Developer, Freelancer"></span></p>
          <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <main>
    @include('layouts.aboutme')
    @include('layouts.services')
    @include('layouts.counter')
    @include('layouts.portfolio')
    @include('layouts.testimonial')
    @include('layouts.blog')
    @include('layouts.contact')
  </main>

@endsection