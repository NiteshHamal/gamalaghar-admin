<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ url('admin/dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard</span>

                    </a>

                </li>

              

                 <li class="has-child">
                     <a href="#" class>
                         <span class="nav-icon bx bxl-product-hunt"></span>
                       
                         <span class="menu-text">Category</span>
                         <span class="toggle-icon"></span>
                     </a>
                     <ul>
                         <li class="{{ request()->is('admin/category/main') ? 'active' : '' }}">
                             <a href="{{url('admin/category/main')}}">Main Category</a>
                         </li>
                         <li class="{{ request()->is('admin/category/sub-category') ? 'active' : '' }}">
                             <a href="{{url('admin/category/sub-category')}}">Sub Category</a>
                         </li>
                     </ul>
                 </li>

                 <li class="has-child">
                     <a href="#" class>
                         <span class="nav-icon bi bi-box-seam"></span>
                      
                         <span class="menu-text">Products</span>
                         <span class="toggle-icon"></span>
                     </a>
                     <ul>
                         <li class>
                             <a href="inbox.html">Main Category</a>
                         </li>
                         <li class>
                             <a href="read-email.html">Sub Category</a>
                         </li>
                     </ul>
                 </li>
                


                

                

               
                

                <li class>
                    <a href="sign-up.html">
                        <span class="nav-icon uil uil-sign-out-alt"></span>
                        <span class="menu-text">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
