@extends('backend.layouts.app')
@section('content')
    <div class="page-content-tab">

        <div class="container-fluid">
                <div class="card p-3">
                    <div class="card-header">
                        <h4><b>
                                Report - Custom Report
                            </b></h4>
                    </div>
                    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
                    <style>

                        .input2 {
                            padding: 10px 15px !important;
                            border: 1px solid #CFD8DC !important;
                            border-radius: 4px !important;
                            box-sizing: border-box;
                            background-color: #fff !important;
                            color: #000 !important;
                            font-size: 16px !important;
                            letter-spacing: 1px;
                            position: relative;
                            width: 100%
                        }

                        .input2:focus {
                            -moz-box-shadow: none !important;
                            -webkit-box-shadow: none !important;
                            box-shadow: none !important;
                            border: 1px solid #FFA000 !important;
                            outline-width: 0
                        }

                        .daterangepicker {
                            background-color: #fff;
                            border-radius: 0 !important;
                            align-content: center !important;
                            padding: 0 !important
                        }

                        thead tr:nth-child(2) {
                            color: #BDBDBD !important
                        }

                        tbody tr td {
                            padding: 5px 7px !important
                        }

                        .month {
                            font-size: 16px !important;
                            padding-bottom: 10px !important;
                            padding-top: 10px !important
                        }

                        .start-date,
                        .end-date {
                            border-radius: 0px !important
                        }

                        .available:hover {
                            border-radius: 0px !important
                        }

                        .off {
                            color: #EEEEEE !important
                        }

                        .off:hover {
                            background-color: #EEEEEE !important;
                            color: #fff !important
                        }

                        .drp-buttons {
                            display: none !important
                        }
                    </style>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="flex-row d-flex justify-content-start">
                                    <div class="col-xl-5 col-lg-6 col-11 px-1">
                                        <div class="input-group input-daterange">
                                            <label class=""> Date Range :</label>
                                            <input type="text" name="daterange"
                                                   value="01/01/2018 - 01/15/2018" readonly class="input2" /> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-4">
                                <p><b>Orders:</b>
                                <div class="form-check">
                                    <input class="form-check-input"
                                           onclick="checkorderBoxes()"
                                           type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                       Select All
                                    </label>
                                </div>

                                <div class="col-12 row orderDiv">
                                    <div class="col-3">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Number
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Last Name
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    State
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Breadth
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Order Tags
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-2">

                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Order Date
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Address 1
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pincode
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Order Status
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">

                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Amount
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Address 2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Weight
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Shipping Charges
                                                </label>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-3">

                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Payment Type
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Phone
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Length
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Discount Applied                                                </label>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-2">

                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    First Name
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    City
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Height
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Product Details                                             </label>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <script>
                                    function checkorderBoxes(){

                                        $('.orderDiv').find(':checkbox').each(function(){

                                            jQuery(this).attr('checked', $('#flexCheckDefault').is(':checked'));

                                        });

                                    }
                                </script>
                                </p>
                            </div>



                            <div class="col-12 pt-4">
                                <p><b>Shipment:</b>
                                <div class="form-check">
                                    <input class="form-check-input"
                                           onclick="checkshipBoxes()"
                                           type="checkbox" value="" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        Select All
                                    </label>
                                </div>

                                <div class="col-12 row shipDiv">
                                    <div class="col-3">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    Shipment Date
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    Delivered  Time
                                                </label>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="col-3">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    AWB Number
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    Charged Weight                                                </label>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="col-2">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    Shipment Status
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    Zone                                             </label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-2">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    Remittance ID
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    Last Status Updated
                                                </label>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="col-2">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    Pickup Time
                                                </label>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>

                                <div class="col-12 pt-4">
                                    <p><b>Warehouse:</b>
                                    <div class="form-check">
                                        <input class="form-check-input"
                                               onclick="checkwareBoxes()"
                                               type="checkbox" value="" id="flexCheckDefault3">
                                        <label class="form-check-label" for="flexCheckDefault3">
                                            Select All
                                        </label>
                                    </div>
                                <div class="col-12 row wareDiv">
                                    <div class="col-3">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">
                                                    Warehouse Name
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">
                                                    City
                                                </label>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="col-3">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">
                                                    Contact Name
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">
                                                    State
                                                </label>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="col-2">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">
                                                    Contact Number                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">
                                                    Pincode
                                                </label>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="col-2">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">
                                                    Address                                             </label>
                                            </div>
                                        </div>




                                    </div>

                                    <div class="col-2">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">
                                                    Address 2                                        </label>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                                </div>

                            <div class="col-12 text-center pt-4">
                                <button class="btn btn-success">
                                    Generate
                                </button>

                            </div>


                                <script>
                                    function checkwareBoxes(){
                                        $('.wareDiv').find(':checkbox').each(function(){

                                            jQuery(this).attr('checked', $('#flexCheckDefault3').is(':checked'));

                                        });
                                    }
                                    function checkshipBoxes(){
                                        $('.shipDiv').find(':checkbox').each(function(){

                                            jQuery(this).attr('checked', $('#flexCheckDefault2').is(':checked'));

                                        });

                                    }

                                    function checkorderBoxes(){

                                        $('.orderDiv').find(':checkbox').each(function(){

                                            jQuery(this).attr('checked', $('#flexCheckDefault').is(':checked'));

                                        });

                                    }
                                </script>
                                </p>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $(function() {
                                $('input[name="daterange"]').daterangepicker({
                                    "startDate": "01/01/2020",
                                    "endDate": "17/01/2020",
                                    opens: 'center',
                                    locale: {
                                        format: 'DD/MM/YYYY'
                                    }
                                });
                            });
                        });
                    </script>
                </div>
        </div>
    </div>

    @endsection
