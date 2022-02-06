@extends('layouts.master_home')
@include('layouts.body.slider')

@section('home_content')
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>عن الموقع</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2> {{ $abouts->title }}</h2>
            <h3>{{ $abouts->short_dis }}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
            {{ $abouts->long_dis }}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>خدماتنا</strong></h2>
          <p>نحرص على جودة احترافية في خدمة العملاء</p>
        </div>

        <div class="row">
         @php
          $services = DB::table('services')->latest()->get();
          @endphp
          @foreach($services as $service)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                   
                </svg>
                <i class="{{$service->icon}}"></i>
              </div>
              <h4><a href="">{{$service->title}}</a></h4>
              <p>{{$service->desc}}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>معرض الأعمال</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
             
          </div>
        </div>

        <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1" data-loop="true" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="4">
          
          @php
          $portfolio = DB::table('portfolios')->latest()->get();
          @endphp
          @foreach($portfolio as $item)
          <div class="portfolio-item">
            <div class="portfolio-image">
              <a href="portfolio-single.html">
                <img src="{{ $item->img  }}" alt="Open Imagination">
              </a>
              <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                  <a href="{{$item->url}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single.html">{{$item->name}}</a></h3>
              <span>{{$item->tag}}</span>
            </div>
          </div>
          @endforeach
          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>عملاؤنا</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

        @foreach($brands as $brand)
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ $brand->brand_image  }}" class="img-fluid" alt="">
            </div>
          </div>
          @endforeach

          

        </div>

      </div>
    </section><!-- End Our Clients Section -->

    @endsection