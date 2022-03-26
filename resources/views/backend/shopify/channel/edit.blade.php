@extends('backend.layouts.app')
@section('content')
    <div class="page-content-tab">

        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4><b>Shopify Add Information
                                </b></h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4><b>General Information

                                </b></h4>

                            <p>Follow these instructions on how to add Channel

                            </p>

                            <div class="row pt-4" >
                                <form action="{{route('backend.shopify.channel.update')}}" method="post">
                                    @csrf

                                    <div class="col-12 pb-2"
                                    <label for="">Channel Name</label>
                                    <input type="text" class="form-control"  value="{{$data->channel_name}}" name="ch_name" required>
                            </div>
                            <div class="col-12 pb-2"
                            <label for=""> Admin API Access token</label>
                            <input type="text" class="form-control"  value="{{$data->api_access_token}}"  name="api_ac" required>
                        </div>
                        <div class="col-12 pb-2"
                        <label for="">API Key</label>
                        <input type="text" class="form-control"  value="{{$data->api_key}}" name="api_key" required>
                    </div>
                    <div class="col-12 pb-2"
                    <label for=""> API secret key</label>
                    <input type="text" class="form-control"  value="{{$data->api_secret_key}}" name="api_secret" required>
                </div>
                <div class="col-12 pb-2"
                <label for=""> Store Url</label>
                <input type="text" class="form-control" value="{{$data->store_url}}" name="store_url" required>
                <p><b>Store URL should be like yourstore.myshopify.com
                    </b></p>
            </div>
            <input type="hidden" name="id" value="{{$d->id}}">
            <br>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Fulfill orders (Enabling this will auto fulfill order in Shopify when an order is shipped with Nimbuspost)                </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked>
                    <label class="form-check-label" for="flexCheckChecked2">


                        Cancel orders (Enabling this will auto cancel order in Shopify when order is cancelled in Nimbuspost)   </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked>
                    <label class="form-check-label" for="flexCheckChecked2">



                        Mark as paid (Mark COD orders as paid in Shopify when orders are delivered to customer)  </label>
                </div>

                <br>
                <button type="submit " class="btn btn-primary" style="background-color: deepskyblue"><b>Update Channel </b></button>

            </div>

            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
