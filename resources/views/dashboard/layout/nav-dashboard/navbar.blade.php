      <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-child"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Kerja</div>
             </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href=" {{route('dashboard')}} ">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-brain"></i>
                    <span>Training</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Your Course:</h6>
                        @if(auth()->user()->nama_kategori == 'web-developer')
                            <a class="collapse-item" href=" {{route('webDev')}} ">Web Developer</a>
                        @elseif(auth()->user()->nama_kategori == 'c++')
                            <a class="collapse-item" href="{{route('cplusPlus')}}">C++</a>
                        @elseif(auth()->user()->nama_kategori == 'java-oop')
                            <a class="collapse-item" href="{{route('javaOop')}}">Java OOP</a>
                        @else
                            <a class="collapse-item" href=" {{route('webDev')}} ">Web Developer</a>
                            <a class="collapse-item" href="{{route('cplusPlus')}}">C++</a>
                            <a class="collapse-item" href="{{route('javaOop')}}">Java OOP</a>
                        @endif
                    </div>
                </div>
            </li>
            @if(auth()->user()->level == 'admin')
            <!-- Nav Item - User Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                    aria-expanded="true" aria-controls="collapseUser">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>User</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingUser"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Your User:</h6>
                        <a class="collapse-item" href=" {{route('dashboard.dataUser')}} ">Data User</a>
                    </div>
                </div>
            </li>
            @endif

            <!-- Nav Item - Forum Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForum"
                    aria-expanded="true" aria-controls="collapseForum">
                    <i class="fas fa-user-friends"></i>
                    <span>Forum</span>
                </a>
                <div id="collapseForum" class="collapse" aria-labelledby="headingForum"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Forum Discussion:</h6>
                        @if(auth()->user()->nama_kategori == 'web-developer')
                            <a class="collapse-item" href="https://chat.whatsapp.com/IbTxoXg3Qpj1uIqt9gxiUz">WhatsApp</a>
                        @elseif(auth()->user()->nama_kategori == 'java-oop')
                            <a class="collapse-item" href="https://chat.whatsapp.com/LWvWrSmBT4mBCuY7fabTRf">WhatsApp</a>
                        @elseif(auth()->user()->nama_kategori == 'c++')
                            <a class="collapse-item" href="https://chat.whatsapp.com/BlNDRmuSEjMKmfFjKrG4n0">WhatsApp</a>
                        @elseif(auth()->user()->level == 'admin')
                            <a class="collapse-item" href="https://chat.whatsapp.com/IbTxoXg3Qpj1uIqt9gxiUz">WhatsApp | Web </a>
                            <a class="collapse-item" href="https://chat.whatsapp.com/BlNDRmuSEjMKmfFjKrG4n0">WhatsApp | Java</a><a class="collapse-item" href="https://chat.whatsapp.com/BlNDRmuSEjMKmfFjKrG4n0">WhatsApp | C++</a>
                        @endif
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href=" {{route('dashboard.changePassword')}} ">Change Password</a>
                        <a class="collapse-item" href="{{route('dashboard.changeProfile', auth()->user()->user_id)}}">Change Profile</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - JobVacancy Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJobVacancy"
                    aria-expanded="true" aria-controls="collapseJobVacancy">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Job Vacancy</span>
                </a>
                <div id="collapseJobVacancy" class="collapse" aria-labelledby="headingJobVacancy" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Select Job Vacancy:</h6>
                        @if(auth()->user()->nama_kategori == 'web-developer')
                            <a class="collapse-item" href=" {{route('dashboard.lokerWebdev')}} ">Web Developer</a>
                        @elseif(auth()->user()->nama_kategori == 'c++')
                            <a class="collapse-item" href="{{route('cplusPlus')}}">C++</a>
                        @elseif(auth()->user()->nama_kategori == 'java-oop')
                            <a class="collapse-item" href="{{route('javaOop')}}">Java OOP</a>
                        @else
                            <a class="collapse-item" href=" {{route('dashboard.lokerWebdev')}} ">Web Developer</a>
                            <a class="collapse-item" href="{{route('cplusPlus')}}">C++</a>
                            <a class="collapse-item" href="{{route('javaOop')}}">Java OOP</a>
                        @endif
                    </div>
                </div>
            </li>

            <!-- Nav Item - Certificate -->
            @if(auth()->user()->level == 'user')
            @if(session('kuis') )
            <li class="nav-item">
                <a class="nav-link" href=" {{route('certificate')}} ">
                    <i class="fas fa-award"></i>
                    <span>Certificate</span></a>
            </li>
            @endif
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
