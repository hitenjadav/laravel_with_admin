@extends('layouts.front.app')
@section('content')

<section class="page-heading header-text"
    style="background-image: url({{asset('front')}}/assets/images/page-heading-bg.jpg) ;background-repeat: no-repeat; background-position: center;background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Properties</h3>
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
        </div>
      </div>
    </div>
  </section>

  <div class="section properties pt-100 pb-100">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        @foreach($categories as $cat)
        <li>
          <a href="#!" data-filter=".adv_{{$cat->id}}">{{$cat->name}}</a>
        </li>
        @endforeach
      </ul>
      <div class="row properties-box">
        @foreach($projects as $project)
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv_{{$project->category_id}} ">
          <div class="item">
            <a href="{{route('property_details',$project->slug)}}"><img class="propertImg" src="{{asset('all_image/'.$project->bannerImage->image)}}" alt=""></a>
            <div class="property_info">
            <span class="category">{{$project->tags}}</span>
            <h6>{{$project->name}}</h6>
            </div>
          </div>
        </div>
        @endforeach
      </div>
     
    </div>
  </div>



  
@endsection