@extends('layouts.front.app')
@section('content')
<style>
  .best-deal .tab-content img {
    padding: 0px 45px;
    height: 542px;
}
</style>
<section class="page-heading header-text"
    style="background-image: url({{asset('front')}}/assets/images/page-heading-bg.jpg) ;background-repeat: no-repeat; background-position: center;background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>{{$propertyDetails->name}}</h3>
          <span class="breadcrumb"><a href="{{route('home')}}">Home</a> / Property</span>
        </div>
      </div>
    </div>
  </section>

  <section class="best-deal pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6 class="text-center" >Property Details</h6>
            <h2 class="text-center">Find Your Best Deal Right Now!</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Garden <span>540 m2</span></li>
                          <li>Security Cabin <span>3</span></li>
                          <li>Gymusium <span>8</span></li>
                          <li>Water Facility<span>Yes</span></li>
                          <li>Tample <span>Bank</span></li>
                          <li>CCTV Camara <span>Bank</span></li>
                          <li><a href="#" class="btn btn-warning"><i class="fa fa-download"></i> Download brochure</a></li>
                        </ul>
                      </div>
                      
                    </div>
                    <div class="col-lg-9">
                      <img src="{{asset('all_image/'.$propertyDetails->bannerImage->image)}}" alt="">
                    </div>
                    <!-- <div class="col-lg-3">
                      <p>{{$propertyDetails->description}}</p>
                      <div class="icon-button">
                        <a href="#" class="btn btn-warning"><i class="fa fa-calendar"></i> Schedule a visit</a>
                      </div>
                    </div> -->
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="single-property ">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-5">
          <div class="property_images">
            <div id="detail_slider" class="owl-carousel owl-theme">
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="main-image">
                  <img src="{{asset('front')}}/assets/images/single-property.jpg" alt="">
                </div>
              </div>
            </div>
          </div>

        </div>
      
      </div>
    </div>
  </section>


@endsection