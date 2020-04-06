@extends('layouts.admin_layout')
<!-- Top Bar End -->
@section('page-content-warraper')

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end page title end breadcrumb -->





        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card mr-5 ml-5 mb-5 p-5">
                    <h4 class="card-title">Client Detials</h4>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Registered Name:</strong> {{$client->name}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Registered Number :</strong> {{$client->client_id}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Contact Person :</strong> {{$client->contact_person}}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Designation :</strong> {{$client->designation}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Contact Number :</strong> {{$client->contact_number}}
                        </div>
                        <div class="col-sm-4">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-5 p-5">
                    <h5 class="card-title">Address</h5>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Street:</strong> {{$client->street}}

                        </div>
                        <div class="col-sm-4">
                            <strong>City: </strong>{{$client->city}}
                        </div>
                        <div class="col-sm-4">
                            <strong>State: </strong>{{$client->state}}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Zip-code:</strong>{{$client->zipcode}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Country:</strong>{{$client->country}}
                        </div>
                    </div>

                </div>
            </div><!--end col-->
            <!--end col-->
        </div> <!--end row-->


    </div><!-- container -->

</div> <!-- Page content Wrapper -->

@endsection
