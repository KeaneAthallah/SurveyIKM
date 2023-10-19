 <div class="sidebar pe-4 pb-3">
     <nav class="navbar bg-light navbar-light">
         <a href="{{ url('/') }}" class="navbar-brand mx-4 mb-3">
             <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Survey IKM</h3>
         </a>
         <div class="d-flex align-items-center ms-4 mb-4">
             <div class="position-relative">
                 <img class="rounded-circle"
                     src="{{ !empty($profile->image) ? url('storage/' . $profile->image) : url('upload/no_image.jpg') }}"
                     alt="" style="width: 40px; height: 40px;">
                 <div
                     class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                 </div>
             </div>
             <div class="ms-3">
                 <h6 class="mb-0">{{ $profile->name }}</h6>
                 <span style="text-transform:capitalize">{{ $profile->role }}</span>
             </div>
         </div>
         <div class="navbar-nav w-100">
             <a href="{{ url('admin/dashboard') }}"
                 class="nav-item nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}"><i
                     class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
             {{-- <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                         class="fa fa-laptop me-2"></i>Pertanyaan</a>
                 <div class="dropdown-menu bg-transparent border-0">
                     <a href="button.html" class="dropdown-item">Semua Pertanyaan</a>
                     <a href="typography.html" class="dropdown-item"></a>
                     <a href="element.html" class="dropdown-item">Other Elements</a>
                 </div>
             </div> --}}
             <a href="{{ route('all.comments') }}"
                 class="nav-item nav-link {{ Request::is('admin/comments*') ? 'active' : '' }}"><i
                     class="fa fa-comments me-2"></i>Kritik Dan Saran</a>
             <a href="{{ route('all.questions') }}"
                 class="nav-item nav-link {{ Request::is('admin/questions*') ? 'active' : '' }}"><i
                     class="fa fa-question me-2"></i>Pertanyaan</a>
             <a href="{{ route('all.answers') }}"
                 class="nav-item nav-link {{ Request::is('admin/answers*') ? 'active' : '' }}"><i
                     class="fa fa-check-circle me-2"></i>Jawaban</a>
             <a href="{{ route('all.periode') }}"
                 class="nav-item nav-link {{ Request::is('admin/periode*') ? 'active' : '' }}"><i
                     class="fa fa-calendar-plus  me-2"></i>Periode</a>
             <a href="{{ route('all.services') }}"
                 class="nav-item nav-link {{ Request::is('admin/services*') ? 'active' : '' }}"><i
                     class="fa fa-edit  me-2"></i>Services</a>
             {{-- <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                         class="far fa-file-alt me-2"></i>Pages</a>
                 <div class="dropdown-menu bg-transparent border-0">
                     <a href="signin.html" class="dropdown-item">Sign In</a>
                     <a href="signup.html" class="dropdown-item">Sign Up</a>
                     <a href="404.html" class="dropdown-item">404 Error</a>
                     <a href="blank.html" class="dropdown-item">Blank Page</a>
                 </div>
             </div> --}}
         </div>
     </nav>
 </div>
