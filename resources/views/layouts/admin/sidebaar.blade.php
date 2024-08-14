<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <?php
          if(Route::currentRouteName()== 'dashboard'){
            $dashboardClass="";
          }
          else{
            $dashboardClass='collapsed';
          }
        ?>
        <a class="nav-link {{$dashboardClass}} " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard 111</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <?php
          if(Route::currentRouteName()== 'banners.index' ||  Route::currentRouteName()== 'banners.edit' || Route::currentRouteName()== 'banners.create'){
            $bannerClass="";
          }
          else{
            $bannerClass='collapsed';
          }
        ?>
        <a class="nav-link {{$bannerClass}}" href="{{route('banners.index')}}">
          <i class="bi bi-card-list"></i>
          <span>Banners  111</span>
        </a>
      </li><!-- End Register Page Nav -->
      <li class="nav-item">
      <?php
          if(Route::currentRouteName()== 'categories.index' ||  Route::currentRouteName()== 'categories.edit' || Route::currentRouteName()== 'categories.create' || Route::currentRouteName()== 'projects.index' ||  Route::currentRouteName()== 'projects.edit' || Route::currentRouteName()== 'projects.create'){
            $tabOpenClass="";
            $shw = 'show';
          }
          else{
            $tabOpenClass='collapsed';
            $shw = "";
          }
          if(Route::currentRouteName()== 'categories.index' ||  Route::currentRouteName()== 'categories.edit' || Route::currentRouteName()== 'categories.create' ){
            $categoryClass= "nav-link";
          }else{
            $categoryClass= "";
          }
          if(Route::currentRouteName()== 'projects.index' ||  Route::currentRouteName()== 'projects.edit' || Route::currentRouteName()== 'projects.create'){
            $projectClass = "nav-link";
          }else{
            $projectClass = ""; 
          }
        ?>

        <a class="nav-link {{$tabOpenClass}}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse {{$shw}} " data-bs-parent="#sidebar-nav">
          <li>
            <a class="{{$categoryClass}}" href="{{route('categories.index')}}">
              <i class="bi bi-circle"></i><span>Category List</span>
            </a>
          </li>
          <li>
            <a class="{{$projectClass}}" href="{{route('projects.index')}}">
              <i class="bi bi-circle"></i><span>Project List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <?php
          if(Route::currentRouteName()== 'testimonials.index' ||  Route::currentRouteName()== 'testimonials.edit' || Route::currentRouteName()== 'testimonials.create'){
            $testimonialClass="";
          }
          else{
            $testimonialClass='collapsed';
          }
        ?>
        <a class="nav-link {{$testimonialClass}}" href="{{route('testimonials.index')}}">
          <i class="bi bi-person"></i>
          <span>Testimonials 111</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
      <?php
          if(Route::currentRouteName()== 'blogs.index' ||  Route::currentRouteName()== 'blogs.edit' || Route::currentRouteName()== 'blogs.create'){
            $blogClass="";
          }
          else{ 
            $blogClass='collapsed';
          }
      ?>
        <a class="nav-link {{$blogClass}}" href="{{route('blogs.index')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Blogs 111</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
      <?php
          if(Route::currentRouteName()== 'partners.index' ||  Route::currentRouteName()== 'partners.edit' || Route::currentRouteName()== 'partners.create'){
            $partnerClass="";
          }
          else{ 
            $partnerClass='collapsed';
          }
      ?>
        <a class="nav-link {{$partnerClass}}" href="{{route('partners.index')}}">
          <i class="bi bi-people"></i>
          <span>Partners 111</span>
        </a>
      </li>
      
      <li class="nav-item">
      <?php
          if(Route::currentRouteName()== 'contacts'){
            $contactsClass="";
          }
          else{ 
            $contactsClass='collapsed';
          }
      ?>

        <a class="nav-link {{$contactsClass}}" href="{{route('contacts')}}">
          <i class="bi bi-envelope"></i>
          <span>Contacts Inquiry 111</span>
        </a>
      </li>

     
      <?php
          if(Route::currentRouteName()== 'cms.index' || Route::currentRouteName()== 'cms.edit' ){
            $cmsClass="";
          }
          else{ 
            $cmsClass='collapsed';
          }
      ?>

      <li class="nav-item">
        <a class="nav-link {{$cmsClass}}" href="{{route('cms.index')}}">
          <i class="bi bi-gear"></i>
          <span>CMS Pages</span>
        </a>
      </li>


     
    </ul>

  </aside>