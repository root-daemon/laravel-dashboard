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
                    <h4 class="card-title">Device Detials</h4>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Device Name :</strong> {{$device->name}}
                        </div>
                        <div class="col-sm-4">
                            <strong>IMEI-1 :</strong> {{$device->imei1}}
                        </div>
                        <div class="col-sm-4">
                            <strong>IMEI-2 : </strong> {{$device->imei2}}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>LOT-ID : </strong> {{$device->lot_id}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Invoice ID : </strong> {{$device->invoice_id}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Status: </strong>{{$device->status}}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Client ID:</strong> {{$device->owner->client_id}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Current Location: </strong> {{$device->current_location}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Comments:</strong>{{$device->comments}}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Assigned E-SIM :</strong> {{$device->esim->msisiidn}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Plan Active :</strong> {{$device->esim->plan->name}}
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
                    <h5 class="card-title">E-Sim Details</h5>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>MSISDN: </strong> {{$device->esim->msisiidn}}

                        </div>
                        <div class="col-sm-4">
                            <strong>ICCID-1: </strong>{{$device->esim->iccid1}}
                        </div>
                        <div class="col-sm-4">
                            <strong>ICCID-2: </strong>{{$device->esim->iccid2}}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>E-SIM Status: </strong>{{$device->esim->status}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Origin Country : </strong>{{$device->esim->device->owner->pcountry}}
                        </div>
                        <div class="col-sm-4">
                            <strong>Current-Country: </strong>{{$device->esim->device->current_location}}
                        </div>
                    </div>

                </div>
            </div><!--end col-->
            <!--end col-->
        </div> <!--end row-->


    </div><!-- container -->

</div> <!-- Page content Wrapper -->

@endsection
