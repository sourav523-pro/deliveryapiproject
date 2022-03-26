@extends('backend.layouts.app')
@section('content')

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="button-items text-right">
                            <button type="button" class="btn btn-outline-purple">Weight Freeze</button>
                            <button type="button" class="btn btn-outline-purple">Export</button>
                            <button type="button" class="btn btn-outline-purple">Filters</button>
                        </div>
                        {{-- <h4 class="page-title">Datatables</h4> --}}
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Weight Reconciliation
                            </h4>
                        </div>
                        <div class="col-md-12">
                             <ul class="nav nav-pills nav-justified text-left" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-bs-toggle="tab" href="ui-tabs-accordions.html#home-1" role="tab" aria-selected="false">All</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link " data-bs-toggle="tab" href="ui-tabs-accordions.html#profile-1" role="tab" aria-selected="true">Action Required</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-bs-toggle="tab" href="ui-tabs-accordions.html#settings-1" role="tab" aria-selected="false">Accepted</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-bs-toggle="tab" href="ui-tabs-accordions.html#canceled-1" role="tab" aria-selected="false">Open Disputes</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-bs-toggle="tab" href="ui-tabs-accordions.html#canceled-1" role="tab" aria-selected="false">Closed Disputes</a>
                            </li>
                        </ul>
                        </div>

                        <div class="tab-content">

                            <div class="tab-pane p-3" id="home-1" role="tabpanel">
                                <p class="text-muted mb-0">
                                    <div class="table-responsive">
                                        <table class="table" id="datatable_2">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                              <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                            </label>
                                                          </div>
                                                      </th>
                                                    <th>WEIGHT APPLIED DATE	</th>
                                                    <th>AWB NUMBER	</th>
                                                    <th>ENTERED WEIGHT	</th>
                                                    <th>APPLIED WEIGHT	</th>
                                                    <th>WEIGHT CHARGES	</th>
                                                    <th>PRODUCT</th>
                                                    <th>STATUS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><div class="form-check">
                                                        <label class="form-check-label">
                                                          <input type="checkbox" class="form-check-input" name="" id="" value="">
                                                        </label>
                                                      </div></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>

                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-sm btn-de-primary csv">Export CSV</button>
                                        <button type="button" class="btn btn-sm btn-de-primary sql">Export SQL</button>
                                        <button type="button" class="btn btn-sm btn-de-primary txt">Export TXT</button>
                                        <button type="button" class="btn btn-sm btn-de-primary json">Export JSON</button>
                                    </div>                                </p>
                            </div>
                            <div class="tab-pane p-3 active" id="profile-1" role="tabpanel">
                                <p class="text-muted mb-0">
                                   2
                                </p>
                            </div>

                            <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                <p class="text-muted mb-0">
                                   3                                </p>
                            </div>
                            <div class="tab-pane p-3" id="canceled-1" role="tabpanel">
                                <p class="text-muted mb-0">
                                    4                                 </p>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->


        </div>
        <!-- container -->

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
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div>
                    <!--end form-switch-->
                </div>
                <!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div>
                    <!--end form-switch-->
                </div>
                <!--end /div-->
            </div>
            <!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->


        <!--end footer-->
    </div>
    <!-- end page content -->
</div>
@endsection
