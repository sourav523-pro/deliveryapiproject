@extends('backend.layouts.app')
@section('content')
    <div class="page-content-tab">

        <div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h5>
                <i class="ti ti-settings menu-icon mt-4" ></i>  <b style="margin-bottom: 10px">      Settings</b>
            </h5>
        </div>
        <div style="background-color: grey"  class="card-body">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="{{route('backend.shopify.channels')}}">
                        <div class="card">
                            <div class="card-header" style="background-color: #0f172a">
                                <h5 class="text-white"><b>Channels</b></h5>
                            </div>
                            <div class="card-body">

                                <div class="row d-flex justify-content-center text-center">
                                    <img src="https://www.pngitem.com/pimgs/m/237-2374881_warehouse-icon-png-icon-warehouse-logo-png-transparent.png"
                                         width="50px" style="width: 100px !important;" alt="">
                                    <br>   <br>
                                    <p class="pt-2"> <b>Import orders from your online store</b></p>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #0f172a">
                            <h5 class="text-white"><b>Warehouse</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center text-center">
                                <img src="https://www.freeiconspng.com/thumbs/location-icon-png/location-icon-png-0.png"
                        style="width: 100px !important;" alt="">
                                <br>
                                <p><b>Manage Your pickup location</b></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #0f172a">
                            <h5 class="text-white"><b>Employees</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center text-center pt-4">
                                <img src="https://p.kindpng.com/picc/s/25-252665_people-icon-blue-user-group-icon-hd-png.png"
                                     style="width: 100px !important;" alt="">
                                <br>
                                <br>
                                <p class="pt-2"><b>allow access to learn members</b></p>
                                <br>

                                <br>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #0f172a">
                            <h5 class="text-white"><b>API</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center text-center pt-4">
                                <img src="https://www.pngitem.com/pimgs/m/8-89295_vector-open-box-png-transparent-png.png"
                                     style="width: 100px !important;" alt="">
                                <br>
                                <br>
                                <p class="pt-2"><b>Programitically access data</b></p>
                                <br>

                                <br>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #0f172a">
                            <h5 class="text-white"><b>Webhooks</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center text-center -4">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROdQCHtl0HGdzIU-m1Cj8hYJk9jUX9MMM4Zg&usqp=CAU"
                                     style="width: 100px !important;" alt="">
                                <br>
                                <br>
                                <p class="pt-2"><b>Receive shipment status notification on url</b></p>
                                <br>

                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #0f172a">
                            <h5 class="text-white"><b>Your Company Profile</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center text-center -4">
                                <img src="https://www.pngitem.com/pimgs/m/294-2947257_interface-icons-user-avatar-profile-user-avatar-png.png"
                                     style="width: 100px !important;" alt="">
                                <br>
                                <br>
                                <p class="pt-2"><b>Your Company Profile</b></p>
                                <br>

                                <br>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #0f172a">
                            <h5 class="text-white"><b>Label Setting</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center text-center -4">
                                <img src="https://png.pngtree.com/png-vector/20190228/ourmid/pngtree-printer-icon-design-template-vector-illustration-png-image_710447.jpg"
                                     style="width: 100px !important;" alt="">
                                <br>
                                <br>
                                <p class="pt-2"><b>set your shipping label format</b></p>
                                <br>

                                <br>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #0f172a">
                            <h5 class="text-white"><b>Account Setting</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center text-center -4">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxPfUg3TAW8ZQjfkOp-2xmM6yWiytFkyz4IxpSOotwBi_u21FCYuAgtphMNsjnelvzp9k&usqp=CAU"
                                     style="width: 100px !important;" alt="">
                                <br>
                                <br>
                                <p class="pt-2"><b>Update profile or password</b></p>
                                <br>

                                <br>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

        </div>
    </div>


    @endsection
