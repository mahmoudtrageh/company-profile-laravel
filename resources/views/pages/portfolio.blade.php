@extends('layouts.master_home')

@section('home_content')


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>معرض الأعمال</h2>
          <ol>
            <li><a href="{{url('/')}}">الرئيسية</a></li>
            <li>معرض الأعمال</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

  

        <div class="row portfolio-container" data-aos="fade-up">

          

         @php
          $portfolio = DB::table('portfolios')->latest()->get();
          @endphp

        @foreach($portfolio as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ $item->img }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$item->name}}</h4>
              <p>{{$item->tag}}</p>
              <a href="{{ $item->img }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
               
            </div>
          </div>
          @endforeach

         

        </div>

      </div>
    </section><!-- End Portfolio Section -->





@endsection