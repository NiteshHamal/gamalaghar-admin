   <nav class="navbar navbar-light">
       <div class="navbar-left">
           <div class="logo-area">
               <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
                   <img class="dark" src="{{ url('assets/img/Logo.png') }}" alt>
                   <img class="light" src="{{ url('assets/img/Logo.png') }}" alt>
               </a>
               <a href="{{ url('admin/dashboard') }}" class="sidebar-toggle">
                   <img class="svg" src="{{ url('admin/img/svg/align-center-alt.svg') }}" alt="img"></a>
           </div>
       </div>
       <div class="navbar-right">
           <ul class="navbar-right__menu">
               <li class="nav-search">
                   <a href="#" class="search-toggle">
                       <i class="uil uil-search"></i>
                       <i class="uil uil-times"></i>
                   </a>
                   <form action="/" class="search-form-topMenu">
                       <span class="search-icon uil uil-search"></span>
                       <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                           aria-label="Search">
                   </form>
               </li>
               <li class="nav-flag-select">
                   <div class="dropdown-custom">
                       <div class="dropdown-parent-wrapper">
                           <div class="dropdown-wrapper dropdown-wrapper--small">
                               <a href="{{ url('locale/en') }}"><img src="{{ url('assets/img/flag.png') }}" alt>
                                   English</a>
                               <a href="{{ url('locale/ne') }}"><img src="{{ url('assets/img/nepali-flag.png') }}" alt>
                                   Nepali</a>
                           </div>
                       </div>
                   </div>
               </li>
               <li class="nav-author">
                   <div class="dropdown-custom">
                       <a href="javascript:;" class="nav-item-toggle"><img
                               src="{{ Avatar::create(Auth()->user()->name)->toBase64() }}" alt class="rounded-circle">
                           <span class="nav-item__title">{{ Auth()->user()->name }}<i
                                   class="las la-angle-down nav-item__arrow"></i></span>
                       </a>
                       <div class="dropdown-parent-wrapper">
                           <div class="dropdown-wrapper">
                               <div class="nav-author__info">
                                   <div class="author-img">
                                       <img src="{{ Avatar::create(Auth()->user()->name)->toBase64() }}" alt
                                           class="rounded-circle">
                                   </div>
                                   <div>
                                       <h6>{{ Auth()->user()->name }}</h6>
                                       <span>Admin</span>
                                   </div>
                               </div>
                               <div class="nav-author__options">
                                   <ul>
                                       <li>
                                           <a href="{{ url('admin/profile') }}" class="text-primary">
                                               <i class="uil uil-user"></i>Profile</a>
                                       </li>
                                       <li>
                                           <a href class="text-primary">
                                               <i class="uil uil-setting"></i>
                                               Settings</a>
                                       </li>
                                       <li>
                                           <a href="{{ url('admin/support') }}" class="text-primary">
                                               <i class="uil uil-bell"></i>Support</a>
                                       </li>
                                   </ul>
                                   <a href class="nav-author__signout text-primary">
                                       <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
           </ul>
           <div class="navbar-right__mobileAction d-md-none">
               <a href="#" class="btn-search">
                   <img src="img/svg/search.svg" alt="search" class="svg feather-search">
                   <img src="img/svg/x.svg" alt="x" class="svg feather-x"></a>
               <a href="#" class="btn-author-action">
                   <img class="svg" src="img/svg/more-vertical.svg" alt="more-vertical"></a>
           </div>
       </div>
   </nav>
