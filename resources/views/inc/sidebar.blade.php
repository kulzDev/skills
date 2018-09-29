
 <div class="col-md-3 left_col">
     
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">              
            <a href="index.html" class="site_title">
                <img src="{{url('images/logo.png')}}" alt="">                  
                <span>Skills Academy</span></a>
              
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{url(Auth::user()->photo ? Auth::user()->photo->file : '/images/profiles/placeholder.png')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              {{-- <h2> {{ Auth::user()->name }}</h2> --}}
              <h2> {{ucfirst( Auth::user()->name) }} </h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            @yield('links')
          </div>


          <!-- /sidebar menu -->
          @include('inc.sidebarfooter')
         
          <!-- /menu footer buttons -->
        </div>
      </div>