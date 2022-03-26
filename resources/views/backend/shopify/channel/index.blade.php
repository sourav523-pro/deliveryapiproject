@extends('backend.layouts.app')
@section('content')
    <div class="page-content-tab">

        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <h4><b> Channels List</b></h4>

                    <a class="btn btn-primary" href="{{route('backend.shopify.channel.create')}}">Create Channel</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered border-dashed mb-0">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th class="text-center">Channel Name</th>
                            <th class="text-center">Api key</th>
                            <th class="text-center">Store Url</th>
                            <th class="text-center">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 1;
                            ?>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$i++}}</td>
                                <td  class="text-center">{{$d->channel_name}}</td>
                                <td class="text-center">{{$d->api_key}}</td>
                                <td class="text-center">{{$d->store_url}}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">


                                        <a class="btn btn-warning  mr-4" href="{{route('backend.shopify.channel.edit',$d->id)}}" style="color: black" href="">
                                            <i class="ti ti-pencil menu-icon"></i>
                                        </a>
                                        <a class="btn btn-danger text-white" href="{{route('backend.shopify.channel.delete',$d->id)}}" style="color: black" href="">
                                            <i class="ti ti-trash menu-icon"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table><!--end /table-->
                </div>

            </div>

        </div>
    </div>

@endsection
