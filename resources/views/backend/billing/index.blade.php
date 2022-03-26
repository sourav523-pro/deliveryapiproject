@extends('backend.layouts.app')
@section('content')
<div class="page-content-tab">

    <div class="container-fluid">

        <div class="p-4">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <b>
                            <i class="ti ti-box menu-icon mt-4" ></i>  Shipments
                        </b>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-1">
                          <button class="btn btn-primary">
                              All
                          </button>
                      </div>

                     <div class="col-1">   <button class="btn btn-primary">
                             Booked (0)
                         </button></div>
                    </div>

                    <div class="table-responsive">

                    <table  class="table" id="datatable_2">
<thead>
        <th>
                        <input type="checkbox" aria-label="Checkbox for following text input">

          </th>
        <th><b style="color: #0f172a">CHANNEL</b></th>
        <th><b style="color: #0f172a">ORDER</b></th>

        <th><b style="color: #0f172a">DATE</b></th>
        <th><b style="color: #0f172a">PRODUCT</b></th>
        <th><b style="color: #0f172a">PAYMENT</b></th>
        <th><b style="color: #0f172a">METHOD</b></th>
        <th><b style="color: #0f172a">CUSTOMER</b></th>
        <th><b style="color: #0f172a">CARRIER</b></th>
        <th><b style="color: #0f172a">AWB</b></th>
        <th><b style="color: #0f172a">TAGS</b></th>
        <th><b style="color: #0f172a">STATUS</b></th>

</thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
