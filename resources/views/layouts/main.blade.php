@include('inc.header')

  <body class="nav-md">
      
    <div class="container body">

      <div class="main_container">
          
      @yield('sidebar')
      
      @include('inc.topnav') 


      <div class="right_col" role="main">
        
          @yield('content')
    
      </div> 
      
      @include('inc.footer')   

      </div>

    </div>

    @yield('calendar')
    {{-- this should only show for admin and lectures not students --}}
    @include('inc.scripts')  
	
  </body>
</html>
