 <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
     <a href="{{ url('/') }}" class="navbar-brand d-flex d-lg-none me-4">
         <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
     </a>
     <a href="#" class="sidebar-toggler flex-shrink-0">
         <i class="fa fa-bars"></i>
     </a>
     <form class="d-none d-md-flex ms-4">
         <input class="form-control border-0" type="search" placeholder="Search">
     </form>
     <div class="navbar-nav align-items-center ms-auto">
         <div class="nav-item dropdown">
             <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                 <img class="rounded-circle me-lg-2"
                     src="{{ !empty($profile->image) ? url('storage/' . $profile->image) : url('upload/no_image.jpg') }}"
                     alt="" style="width: 40px; height: 40px;">
                 <span class="d-none d-lg-inline-flex">{{ $profile->name }}</span>
             </a>
             <div class="dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom m-0 border-0">
                 <a href="{{ url('/') }}" class="dropdown-item"><span class="fa fa-home"></span> Home</a>
                 <a href="{{ route('admin.edit') }}" class="dropdown-item"><span class="fa fa-user"></span> My
                     Profile</a>
                 <a href="{{ route('admin.logout') }}" class="dropdown-item"><span class="fa fa-arrow-left"></span> Log
                     Out</a>
             </div>
         </div>
     </div>
 </nav>
