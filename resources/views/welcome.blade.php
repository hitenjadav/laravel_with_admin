@extends('layouts.front.app')
@section('content')


  <section class="main-banner">
    <div class="contaner-fluid p-0">
      <div class="owl-carousel owl-banner">

        @if(count($banners)>0)
            @foreach($banners as $banner)
                <div class="item">
                    <div class="banner"
                        style="background: url({{asset('all_image/'.$banner->image)}}) no-repeat;background-position: center;background-size: cover;">
                        <div class="container">
                        <div class="header-text">
                            <span class="category"> <em>{{$banner->title}}</em></span>
                            <h2>{{$banner->content}}</h2>
                            <!-- <a href="" class="btn btn-light mt-3">Read More</a> -->
                        </div>
                        </div>
                    </div>
                </div>  
            @endforeach
        @endif

      </div>
    </div>
  </section>

  <section class="pt-100 pb-100 about_sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="about_img">
            <div class="left-image">
              <img src="{{asset('all_image/'.$cmsInfo->image)}}" class="img-fluid" alt="">
            </div>
            <div class="right-image">
              <img src="{{asset('all_image/'.$cmsInfo->sub_image)}}" class="img-fluid" alt="">
            </div>
          </div>

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="section-heading">
            <h6> About Us</h6>
            <h2>{{$cmsInfo->title}} </h2>
          </div>
          <p>{{$cmsInfo->content}}</p>
        </div>

      </div>
    </div>
  </section>

  <section class="why_choose pt-100 pb-100"
    style="background: url({{asset('front')}}/assets/images/why-choose-one-bg-img.jpg) no-repeat;background-position: center;background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="section-heading">
                <h6>| Featured</h6>
                <h2 class="text-white">{{$cmsInfo->featured_subtitle}}</h2>
              </div>
              <p class="text-white">{{$cmsInfo->featured_content}}</p>
            </div>
            <div class="col-sm-6">
              <div class="info-table">
                <ul>
                  <li>
                    <img src="{{asset('front')}}/assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                    <h4>{{$cmsInfo->blog_1}}</h4>
                  </li>
                  <li>
                    <img src="{{asset('front')}}/assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                    <h4>{{$cmsInfo->blog_2}}</h4>
                  </li>
                  <li>
                    <img src="{{asset('front')}}/assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                    <h4>{{$cmsInfo->blog_3}}</h4>
                  </li>
                  <li>
                    <img src="{{asset('front')}}/assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                    <h4>{{$cmsInfo->blog_4}}</h4>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Video View</h6>
            <h2>Get Closer View & Different Feeling</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="{{asset('front')}}/assets/images/video-frame.jpg" alt="">
            <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div> -->





  <section class="pt-100 pb-100 fun-facts">
    <div class="shape">
      <img src="{{asset('front')}}/assets/images/counter-one-bg-img-1.webp" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="counter">
                  <div class="icon">
                    <img src="{{asset('front')}}/assets/images/building.png" class="img-fluid" alt="icon">
                  </div>
                  <h2 class="timer count-title count-number" data-to="{{$cmsInfo->buliding_finnished}}" data-speed="1000"></h2>
                  <p class="count-text ">Buildings<br>Finished Now</p>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="counter">
                  <div class="icon">
                    <img src="{{asset('front')}}/assets/images/parking.png" class="img-fluid" alt="icon">
                  </div>
                  <h2 class="timer count-title count-number" data-to="{{$cmsInfo->total_cunstruction}}" data-speed="1000"></h2>
                  <p class="count-text ">Total <br>Car Pakings</p>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="counter">
                  <div class="icon">
                    <img src="{{asset('front')}}/assets/images/customer-review.png" class="img-fluid" alt="icon">
                  </div>
                  <h2 class="timer count-title count-number" data-to="{{$cmsInfo->total_experince}}" data-speed="1000"></h2>
                  <p class="count-text ">Years<br>Experience</p>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="counter">
                  <div class="icon">
                    <img src="{{asset('front')}}/assets/images/award.png" class="img-fluid" alt="icon">
                  </div>
                  <h2 class="timer count-title count-number" data-to="{{$cmsInfo->certified_bank}}" data-speed="1000"></h2>
                  <p class="count-text ">Awwards<br>Won 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- Our team Section -->
  <section id="team" class="  team content-section">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <h2>Our Team</h2>
        <h3 class="caption gray">Meet the people who make awesome stuffs</h3>
      </div><!-- /.col-md-12 -->

      <div class="container">
        <div class="row">

      
          @foreach($partners as $partner)
          <div class="col-md-4">
            <div class="team-member">
              <figure>
                <img src="{{asset('all_image/'.$partner->image)}}" alt="" class=" teamImg img-responsive ">
                
              </figure>
              <h4>{{$partner->name}}</h4>
              <p>{{$partner->designation}}</p>
            </div><!-- /.team-member-->
          </div><!-- /.col-md-4 -->
          @endforeach

        </div><!-- /.row -->
      </div><!-- /.container -->

    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.our-team -->


  <section class="pt-100 pb-100 properties">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Properties</h6>
            <h2>We Provide The Best Property You Like</h2>
          </div>
        </div>
      </div>
      <div class="row ">
      @foreach($properties as $property)
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img class="propertImg" src="{{asset('all_image/'.$property['bannerImage']['image'])}}" alt=""></a>
            <div class="property_info">
              <span class="category">{{$property->tags}}</span>
              <h6>{{$property->name}}</h6>  
            </div>
          </div>
        </div>
       @endforeach
      </div>
    </div>
  </section>

  

  <section class="contact" style="background: url({{asset('front')}}/assets/images/contact-bg.jpg) no-repeat; background-position: center;background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6> Contact Us</h6>
            <h2>Get In Touch With Our Agents</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-content pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <!-- <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
              width="100%" height="500px" frameborder="0"
              style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
              allowfullscreen=""></iframe> -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118002.85492521383!2d73.18044754335938!3d22.44448199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fd3a6ccc1c333%3A0x64c10ec804a6d24d!2sHARI%20HAR%20RESIDENCY!5e0!3m2!1sen!2sin!4v1717051182077!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="{{asset('front')}}/assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>{{$contactInfo->phone}}<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="{{asset('front')}}/assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>{{$contactInfo->email}}<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <form id="contact-form" action="{{route('contact.store')}}" method="POST">@csrf
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Full Name</label>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
                <input type="hidden" name="ckValue" >
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" placeholder="Your E-mail..." required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Message</label>
                  <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  @endsection
