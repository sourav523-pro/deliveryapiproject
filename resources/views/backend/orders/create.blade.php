@extends('backend.layouts.app')
@section('content')
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Order Information</h4>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('backend.order.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Order Id</label>
                                                <input type="number" class="form-control" name="order_id" id="code"
                                                    aria-describedby="emailHelp" placeholder="Order Id" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="order_type">Order Type</label>
                                                <select class="form-control" name="order_type" id="order_type">
                                                    <option value="cod" selected>Cash On Delevery</option>
                                                    <option value="prepaid">Prepaid</option>
                                                    <option value="reverse">Reverse</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Shipping Information</h4>
                                {{-- <p class="text-muted mb-0">Custom stylr example.</p> --}}
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username">First Name</label>
                                            <input type="text" class="form-control" name="ship_firstname" id="fn"
                                                placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username">Last Name</label>
                                            <input type="text" class="form-control" name="ship_lastname" id="ln"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="ship_email">Email</label>
                                            <input type="email" class="form-control" id="ship_email" name="ship_email"
                                                placeholder="Email address" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="comp_name">Company Name</label>
                                            <input type="text" class="form-control" name="ship_company_name" id="cn"
                                                placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="message">Address</label>
                                            <textarea class="form-control" rows="3" name="ship_address" id="add" placeholder="Shipping Adress1"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="message">Address 2 (Optional)</label>
                                            <textarea class="form-control" rows="3" name="add2" id="add2" placeholder="Shipping Address2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="subject">Pin Code</label>
                                            <input type="text" class="form-control" id="pin" name="ship_pincode" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username">City</label>
                                            <input type="text" class="form-control" name="ship_city" id="city"
                                                placeholder="City" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username">State</label>
                                            <input type="text" class="form-control" name="ship_state" id="state"
                                                placeholder="State" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="subject">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" name="ship_phone" max="10"
                                                min="10" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                    </div>
                    <!--end card-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Billing Information</h4>
                                {{-- <p class="text-muted mb-0">Custom stylr example.</p> --}}
                                <div class="form-check pt-4 pb-4">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id=""
                                            onclick="copyTextValue(this);" value="">
                                        <i>Check this box if Shipping and Billing Information are the same</i>
                                    </label>
                                </div>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username">First Name</label>
                                            <input type="text" class="form-control" name="bill_firstname" id="bfn"
                                                placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username">Last Name</label>
                                            <input type="text" class="form-control" name="bill_lastname" id="bln"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="bill_email">Email</label>
                                            <input type="email" class="form-control" id="bill_email" name="bill_email"
                                                placeholder="Email Address" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="comp_name">Company Name</label>
                                            <input type="text" class="form-control" name="bill_company_name" id="bcn"
                                                placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="message">Address</label>
                                            <textarea class="form-control" rows="3" name="bill_address" id="badd" placeholder="Billing Adress1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="message">Address 2 (Optional)</label>
                                            <textarea class="form-control" rows="3" name="bill_address2" id="badd2" placeholder="Billing Adress1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="subject">Pin Code</label>
                                            <input type="text" class="form-control" id="bpin" name="bill_pincode"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username">City</label>
                                            <input type="text" class="form-control" name="bill_city" id="bcity"
                                                placeholder="City" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username">State</label>
                                            <input type="text" class="form-control" name="bill_state" id="bstate"
                                                placeholder="State" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="subject">Phone Number</label>
                                            <input type="tel" class="form-control" id="bp" name="bill_phone" required
                                                max="10" min="10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table font-weight-bold">
                                    <thead>
                                        <tr>
                                            <th>PRODUCT</th>
                                            <th>QUANTITY</th>
                                            <th>AMOUNT(RS)</th>
                                            <th>SKU (OPTIONAL)</th>
                                            <th> <a name="" id="" class="btn btn-primary addrow" href="javascript:;"
                                                    role="button">+ Add</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="product_name[]"
                                                        id="first_name" placeholder="Product Name" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    <input type="number" class="form-control" name="qty[]" id="qty"
                                                        placeholder="Quantity" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    <input type="number" class="form-control" name="amount[]" id="amount"
                                                        placeholder="Amount" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="sku[]" id="sku"
                                                        placeholder="SKU" required>
                                                </div>
                                            </td>
                                            <td>
                                                <a name="" id="" class="btn btn-danger deleterow"
                                                    href="javascript:void(0);" role="button">-</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">Weight</label>
                                            <input type="number" name="weight" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Weight">
                                            <small>eg: 500, 300 </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cm1"> Dimensions* </label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="number" class="form-control" name="cm1" id="cm1"
                                                        aria-describedby="helpId" placeholder="CM">
                                                </div>

                                                <div class="col">
                                                    <input type="number" class="form-control" name="cm2" id="cm3"
                                                        aria-describedby="helpId" placeholder="CM">
                                                </div>
                                                <div class="col">
                                                    <input type="number" class="form-control" name="cm3" id="cm3"
                                                        aria-describedby="helpId" placeholder="CM">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">Shipping Charges</label>
                                            <input type="number" name="shipping_charges" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">COD Charges</label>
                                            <input type="number" name="cod_charges" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">Tax Amount</label>
                                            <input type="number" name="tax_amt" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">Discount</label>
                                            <input type="number" name="discount" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-danger" type="reset">Cancel</button>
                                </form>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col--
                                                                                                                                                </div><!--end row-->
                </div><!-- container -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>


        <script>
            function copyTextValue(bf) {
                var fn = bf.checked ? document.getElementById("fn").value : '';
                var ln = bf.checked ? document.getElementById("ln").value : '';
                var cn = bf.checked ? document.getElementById("cn").value : '';
                var add = bf.checked ? document.getElementById("add").value : '';
                var add2 = bf.checked ? document.getElementById("add2").value : '';
                var pin = bf.checked ? document.getElementById("pin").value : '';
                var city = bf.checked ? document.getElementById("city").value : '';
                var state = bf.checked ? document.getElementById("state").value : '';
                var phone = bf.checked ? document.getElementById("phone").value : '';
                var email = bf.checked ? document.getElementById("bill_email").value : '';

                document.getElementById("bfn").value = fn;
                document.getElementById("bln").value = ln;
                document.getElementById("bcn").value = cn;
                document.getElementById("badd").value = add;
                document.getElementById("badd2").value = add2;
                document.getElementById("bpin").value = pin;
                document.getElementById("bcity").value = city;
                document.getElementById("bstate").value = state;
                document.getElementById("bp").value = phone;
                document.getElementById("ship_email").value = email;
            }
        </script>


        <script>
            $('thead').on('click', '.addrow', function() {
                var tr =
                    '<tr>' +
                    '<td>' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" name="product_name[]" id="product_name" aria-describedby="helpId" placeholder="Product Name">' +
                    '</div>' +
                    '</td>' +
                    '<td>' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" name="qty[]" id="qty" aria-describedby="helpId" placeholder="">' +
                    '</div>' +
                    '</td>' +
                    '<td>' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" name="amount[]" id="amount" aria-describedby="helpId" placeholder="Amount">' +
                    '</div>' +
                    '</td>' +
                    '<td>' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control" name="sku[]" id="sku" aria-describedby="helpId" placeholder="SKU">' +
                    '</div>' +
                    '</td>' +
                    '<td>' +
                    '<a name="" id="" class="btn btn-danger deleterow" href="javascript:;" role="button">-</a>' +
                    '</td>' +

                    '</tr>';

                $('tbody').append(tr);
            });

            $('tbody').on('click', '.deleterow', function() {
                $(this).parent().parent().remove();
            });
        </script>
    @endsection
