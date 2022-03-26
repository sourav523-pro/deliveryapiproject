<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8" />
    <title> Admin & Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">


    <link href="{{asset('assets/plugins/datatables/datatable.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="dark-sidebar">
<!-- leftbar-tab-menu -->
<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand">
        <a href="index.html" class="logo">
                    <span>
                        {{-- <img src="{{asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm"> --}}
                    </span>
            <span>
                        {{-- <img src="{{asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light"> --}}
                        {{-- <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark"> --}}
                    </span>
        </a>
    </div>
    <div class="sidebar-user-pro media border-end">
        <div class="position-relative mx-auto">
            <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold">{{\Illuminate\Support\Facades\Auth::user()->name}} </h5>
            <p class="opacity-50 mb-0">{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
        </div>
    </div>

    <!-- Tab panes -->

    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.dashboard') }}"
                           aria-expanded="false" aria-controls="sidebarAnalytics">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.order') }}"
                           aria-expanded="false" aria-controls="sidebarCrypto">
                            <i class="ti ti-currency-bitcoin menu-icon"></i>
                            <span>Orders</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('backend.shipment') }}"

                           aria-expanded="false" aria-controls="sidebarProjects">
                            <i class="ti ti-brand-asana menu-icon"></i>
                            <span>Shipments</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.exception') }}"
                           aria-expanded="false" aria-controls="sidebarEcommerce">
                            <i class="ti ti-shopping-cart menu-icon"></i>
                            <span>Exception</span>
                        </a>
                    </li><!--end nav-item-->


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.weight') }}"
                           aria-expanded="false" aria-controls="sidebarEmail">
                            <i class="ti ti-mail menu-icon"></i>
                            <span>Weight Reco.</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('backend.billing.index')}}"
                           aria-expanded="false" aria-controls="sidebarEmail">
                            <i class="ti ti-cash menu-icon"></i>
                            <span>Billing</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('backend.reports.index')}}"
                           aria-expanded="false" aria-controls="sidebarEmail">
                            <i class="ti ti-report menu-icon"></i>
                            <span>Reports</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('backend.operation.index')}}"
                           aria-expanded="false" aria-controls="sidebarEmail">
                            <i class="ti ti-note menu-icon"></i>
                            <span>Control Tower</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.escalations') }}"
                           aria-expanded="false" aria-controls="sidebarEmail">
                            <i class="ti ti-message-report menu-icon"></i>
                            <span>Escalations</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="index.html#sidebarEmail"
                           aria-expanded="false" aria-controls="sidebarEmail">
                            <i class="ti ti-apps menu-icon"></i>
                            <span>Add Ons</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('backend.main.settings')}}"
                           aria-expanded="false">
                            <i class="ti ti-settings menu-icon"></i>
                            <span>Settings</span>
                        </a>
                    </li><!--end nav-item-->





                </ul>
                <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                    <li>
                        <div class="update-msg text-center position-relative">
                            <button type="button" class="btn-close position-absolute end-0 me-2" aria-label="Close"></button>
                            <img src="{{asset('assets/images/speaker-light.png')}}" alt="" class="" height="110">
                            <h5 class="mt-0">Mannat Themes</h5>
                            <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                            <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                        </div>
                    </li>
                </ul><!--end navbar-nav--->
            </div><!--end sidebarCollapse-->
        </div>
    </div>
</div>
<!-- end left-sidenav-->
<!-- end leftbar-menu-->

<!-- Top Bar Start -->
<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom" id="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">
            <li class="dropdown" style="margin-right: 2px">
                <a class="nav-link btn btn-primary w-100 bg-primary text-white nav-icon"  href="index.html#" role="button"
                  aria-expanded="false">
                    <i class="ti ti-download text-white font-500  pr-2"> </i>    Servicable Pincodes
                </a>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            </li><!--end topbar-language-->
            <li class="dropdown" style="margin-right: 2px">
                <button type="button" class="nav-link btn  w-100 bg-dark text-white nav-icon"  data-toggle="modal"
                        data-target="#exampleModal"
                >
                    <i class="ti ti-recharging text-white font-500  pr-2"> </i>    Recharge
                </button>


            </li><!--end topbar-language-->
            <li class="dropdown" style="margin-right: 2px">
                <a class="nav-link btn btn-primary border-0 w-100 bg- text-dark nav-icon"  href="#" role="button"
                   aria-expanded="false">
                      Balance 0.0  <i class="ti ti-info-circle text-dark font-500 pl-2"> </i>
                </a>

            </li><!--end topbar-language-->


            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="index.html#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                        <div>
                            <small class="d-none d-md-block font-11">Admin</small>
                            <span class="d-none d-md-block fw-semibold font-12">Maria Gibson <i
                                    class="mdi mdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="index.html#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                    <a class="dropdown-item" href="index.html#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                    <div class="dropdown-divider mb-0"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a class="dropdown-item"href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();"><i class="align-text-bottom ti ti-power font-16 me-1"></i> Logout</a>
                    </form>
                </div>
            </li><!--end topbar-profile-->
            <li class="notification-list">
                <a class="nav-link arrow-none nav-icon offcanvas-btn" href="index.html#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                    <i class="ti ti-settings ti-spin"></i>
                </a>
            </li>
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                    <i class="ti ti-menu-2"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" action="index.html#" method="get">
                    <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                    <button type="submit"><i class="ti ti-search"></i></button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
<!-- Top Bar End -->

<div class="page-wrapper">

{{--    recharge modal start --}}

<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title text-black" id="exampleModalLabel">Upgrade Your Shipping Limit </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <div class="container">
                       <div class="row">
                         <h6 class="text-black">  Enter The Amount for your recharge</h6>
                           <br>
                           <br>
                       </div>
                       <div class="row">
                           <div class="col-md-3 col-sm-12">
                               <label for="">Amount</label>
                           </div>
                           <div class="col-md-9 col-sm-12">
                               <input type="text" class="form-control" id="rechargeAmt" value="500" required name="amount">
                           </div>

                            <div class="col-12 d-flex justify-content-center">
                                <div class="col-8 pt-3 d-flex justify-content-around justify-content-center">
                                    <button type="button" onclick="applyThisAmount(500)" class="btn" style="border-radius: 10px; font-weight: bold; border-color: #0c9; color: #0c9;
                                border-width: 2px;">
                                        500
                                    </button>

                                    <button type="button" onclick="applyThisAmount(1000)" class="btn" style="border-radius: 10px; font-weight: bold; border-color: #0c9; color: #0c9;
                                border-width: 2px;">
                                        1000
                                    </button>

                                    <button type="button" onclick="applyThisAmount(2000)" class="btn" style="border-radius: 10px; font-weight: bold; border-color: #0c9; color: #0c9;
                                border-width: 2px;">
                                        2000
                                    </button>

                                    <button type="button" onclick="applyThisAmount(5000)" class="btn" style="border-radius: 10px; font-weight: bold; border-color: #0c9; color: #0c9;
                                border-width: 2px;">
                                        5000
                                    </button>

                                </div>



                            </div>
                           <script>
                               function applyThisAmount(amt){
                                   $("#rechargeAmt").val(amt);
                               }
                           </script>
                           <div class="col-12 d-flex justify-content-center pt-3">
                               <button type="submit" class="btn btn-primary" style="background-color: black; border-color: black; font-weight: bold"> <i class="ti ti-recharging text-white font-500  pr-2"> </i>    RECHARGE </button>

                           </div>
                       </div>
                   </div>
                </div>
                <div class="modal-footer">
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>
{{--    recharge modal ends --}}
    <!-- Page Content-->
    @yield('content')
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

<!-- Javascript  -->

<script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/pages/analytics-index.init.js')}}"></script>

<script src="{{asset('assets/plugins/datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/pages/datatable.init.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>

</body>
<!--end body-->
</html>
