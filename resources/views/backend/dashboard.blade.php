@extends('backend.layouts.app')
@section('content')
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html#">Unikit</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="index.html#">Dashboard</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Analytics</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Analytics</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-md-12 col-lg-3 order-lg-1 order-md-2 order-sm-2">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="pt-3">
                                <h3 class="text-dark text-center font-24 fw-bold line-height-lg">
                                    <br>Complete Your Profile</h3>
                                <style>

                                    .progress {
                                        width: 150px;
                                        height: 150px !important;
                                        float: left;
                                        line-height: 150px;
                                        background: none;
                                        margin: 20px;
                                        box-shadow: none;
                                        position: relative
                                    }

                                    .progress:after {
                                        content: "";
                                        width: 100%;
                                        height: 100%;
                                        border-radius: 50%;
                                        border: 12px solid #fff;
                                        position: absolute;
                                        top: 0;
                                        left: 0
                                    }

                                    .progress>span {
                                        width: 50%;
                                        height: 100%;
                                        overflow: hidden;
                                        position: absolute;
                                        top: 0;
                                        z-index: 1
                                    }

                                    .progress .progress-left {
                                        left: 0
                                    }

                                    .progress .progress-bar {
                                        width: 100%;
                                        height: 100%;
                                        background: none;
                                        border-width: 12px;
                                        border-style: solid;
                                        position: absolute;
                                        top: 0
                                    }

                                    .progress .progress-left .progress-bar {
                                        left: 100%;
                                        border-top-right-radius: 80px;
                                        border-bottom-right-radius: 80px;
                                        border-left: 0;
                                        -webkit-transform-origin: center left;
                                        transform-origin: center left
                                    }

                                    .progress .progress-right {
                                        right: 0
                                    }

                                    .progress .progress-right .progress-bar {
                                        left: -100%;
                                        border-top-left-radius: 80px;
                                        border-bottom-left-radius: 80px;
                                        border-right: 0;
                                        -webkit-transform-origin: center right;
                                        transform-origin: center right;
                                        animation: loading-1 1.8s linear forwards
                                    }

                                    .progress .progress-value {
                                        width: 90%;
                                        height: 90%;
                                        border-radius: 50%;
                                        background: #000;
                                        font-size: 24px;
                                        color: #fff;
                                        line-height: 135px;
                                        text-align: center;
                                        position: absolute;
                                        top: 5%;
                                        left: 5%
                                    }

                                    .progress.blue .progress-bar {
                                        border-color: #049dff
                                    }

                                    .progress.blue .progress-left .progress-bar {
                                        animation: loading-2 1.5s linear forwards 1.8s
                                    }

                                    .progress.yellow .progress-bar {
                                        border-color: #fdba04
                                    }

                                    .progress.yellow .progress-right .progress-bar {
                                        animation: loading-3 1.8s linear forwards
                                    }

                                    .progress.yellow .progress-left .progress-bar {
                                        animation: none
                                    }

                                    @keyframes loading-1 {
                                        0% {
                                            -webkit-transform: rotate(0deg);
                                            transform: rotate(0deg)
                                        }

                                        100% {
                                            -webkit-transform: rotate(180deg);
                                            transform: rotate(180deg)
                                        }
                                    }

                                    @keyframes loading-2 {
                                        0% {
                                            -webkit-transform: rotate(0deg);
                                            transform: rotate(0deg)
                                        }

                                        100% {
                                            -webkit-transform: rotate(144deg);
                                            transform: rotate(144deg)
                                        }
                                    }

                                    @keyframes loading-3 {
                                        0% {
                                            -webkit-transform: rotate(0deg);
                                            transform: rotate(0deg)
                                        }

                                        100% {
                                            -webkit-transform: rotate(135deg);
                                            transform: rotate(135deg)
                                        }
                                    }
                                </style>

                                <div class="d-flex justify-content-center">
                                    <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                        <div class="progress-value">90%</div>
                                    </div>
                                </div>


                                <div class="text-center mb-3">
                                    <a href="index.html#" class="btn btn-primary">Complete Now</a>
                                </div>
                                <img src="{{asset('assets/images/small/business.png')}}" alt="" class="img-fluid px-3 mb-2">
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
                <div class="col-lg-9 order-lg-2 order-md-1 order-sm-1">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="card overflow-hidden" style="background-color: #00cc99; color:white;">
                                <div class="card-body">
                                    <div class="row d-flex " >

                                        <div class="col-12 ms-auto align-self-center">
                                            <h3 class="text-white my-0 font-22 fw-bold">0000</h3>
                                            <br>
                                            <p class="text-white mb-0 fw-semibold">Total Shipments
                                                <br>
                                                (Total forward shipments)


                                            </p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <div class="col-lg-3 col-md-6">
                            <div class="card overflow-hidden" style="background-color: deepskyblue; color:white;">
                                <div class="card-body">
                                    <div class="row d-flex">

                                        <div class="col-12 ms-auto align-self-center">
                                            <h3 class="text-white my-0 font-22 fw-bold">0 (0%)</h3>
                                            <br>
                                            <p class="text-white mb-0 fw-semibold">Delivered Shipments

                                                <br>
                                                (Total forward delivered orders)



                                            </p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <div class="col-lg-3 col-md-6">
                            <div class="card overflow-hidden" style="background-color: mediumpurple; color:white;">
                                <div class="card-body">
                                    <div class="row d-flex">

                                        <div class="col-12 ms-auto align-self-center">
                                            <h3 class="text-white my-0 font-22 fw-bold">₹0
                                            </h3>
                                            <br>
                                            <p class="text-white mb-0 fw-semibold">Total Revenue
                                                <br>
                                                (Value of delivered orders)

                                            </p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->

                        <div class="col-lg-3 col-md-6">
                            <div class="card overflow-hidden" style="background-color: grey; color:white;">
                                <div class="card-body">
                                    <div class="row d-flex">


                                        <div class="col-12 ms-auto align-self-center">
                                            <h3 class="text-white my-0 font-22 fw-bold">0 (0%)
                                            </h3>
                                            <br>
                                            <p class="text-white mb-0 fw-semibold">Total RTO

                                                <br>
                                                (Orders returned to origin)

                                            </p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Audience Overview</h4>
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a href="index.html#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    This Year<i class="las la-angle-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="index.html#">Today</a>
                                                    <a class="dropdown-item" href="index.html#">Last Week</a>
                                                    <a class="dropdown-item" href="index.html#">Last Month</a>
                                                    <a class="dropdown-item" href="index.html#">This Year</a>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="">
                                        <div id="ana_dash_1" class="apex-charts"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Payment Wise Load</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="index.html#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            All<i class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="index.html#">Purchases</a>
                                            <a class="dropdown-item" href="index.html#">Emails</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="text-center">
                                <div id="ana_device" class="apex-charts"></div>
                                <h6 class="bg-light-alt py-3 px-2 mb-0">
                                    <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                    01 January 2020 to 31 December 2020
                                </h6>
                            </div>

                        </div><!--end card-body-->
                    </div><!--end card-->

                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Courier Wise Load</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="index.html#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            All<i class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="index.html#">Purchases</a>
                                            <a class="dropdown-item" href="index.html#">Emails</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="text-center">
                                <div id="ana_device2" class="apex-charts"></div>
                                <h6 class="bg-light-alt py-3 px-2 mb-0">
                                    <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                    01 January 2020 to 31 December 2020
                                </h6>
                            </div>

                        </div><!--end card-body-->
                    </div><!--end card-->

                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Courier Wise Status
                                    </h4>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive browser_users">
                                <table class="table table-hover mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">COURIER</th>
                                        <th class="border-top-0">TOTAL</th>
                                        <th class="border-top-0">UNSHIPPED </th>
                                        <th class="border-top-0">PENDING PICKUP</th>
                                        <th class="border-top-0">IN TRANSIT </th>
                                        <th class="border-top-0"> 	DELIVERED</th>
                                        <th class="border-top-0"> 		RTO</th>

                                    </tr><!--end tr-->
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td colspan="4">No Records Found</td>
                                    </tr>
{{--                                    <tr>--}}
{{--                                        <td><img src="{{asset('assets/images/logos/in-explorer.png')}}" alt="" height="20" class="me-2">Internet-Explorer</td>--}}
{{--                                        <td>1836<small class="text-muted">(38%)</small></td>--}}
{{--                                        <td> 41.12%</td>--}}
{{--                                        <td>455<small class="text-muted">(74%)</small></td>--}}
{{--                                    </tr><!--end tr-->--}}

                                    </tbody>
                                </table> <!--end table-->
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Product Wise Status</h4>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive browser_users">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">PRODUCT NAME	</th>
                                        <th class="border-top-0">PRODUCT SKU	</th>
                                        <th class="border-top-0">TOTAL SHIPMENTS	</th>
                                        <th class="border-top-0">NOT SHIPPED	</th>
                                        <th class="border-top-0">PENDING PICKUP		</th>
                                        <th class="border-top-0">DELIVERED		</th>
                                        <th class="border-top-0">RTO		</th>

                                    </tr><!--end tr-->
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table> <!--end table-->
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
                <!--end col-->

            </div><!--end row-->
        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h6>Account Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">Auto updates</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
            </div><!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->

        <!--Start Footer-->
        <!-- Footer Start -->
        <footer class="footer text-center text-sm-start">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> Unikit <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                    class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
        </footer>
        <!-- end Footer -->
        <!--end footer-->
    </div>
@endsection
