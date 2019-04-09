<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      
      <div class="dropdown">


@if(isset($user))






    <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    Inna <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="http://127.0.0.1:8000/logout"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="0zssfyE37IZtfZTRzx2WMBxBlcRjms5o7KhGpPIX">
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    @endif

      <div class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
              </form>
          </li>
      </div>
                            
                                
                                </div>

        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="{{route('index_post')}}">My Blog</a>
        </div>
      

      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
          @if (!isset($user))
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a>
        @endif
        
           @if (isset($user))
           <a class="btn btn-sm btn-outline-secondary" href="{{ route('create_page') }}">Create a new Post</a>
                       
                    @endif
                  
           
      </div>
    </div>
  </header>
