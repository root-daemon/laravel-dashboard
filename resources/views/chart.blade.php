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
                <div class="card m-5 p-5">
                    <h5 class="card-title">E-Sim Details</h5>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>MSISDN:</strong>
                        </div>
                        <div class="col-sm-4">
                            <strong>ICCID-1:</strong>
                        </div>
                        <div class="col-sm-4">
                            <strong>ICCID-2:</strong>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>E-SIM Status:</strong>
                        </div>
                        <div class="col-sm-4">
                            <strong>Owner-ID:</strong>
                        </div>
                        <div class="col-sm-4">
                            <strong>Device ID:</strong>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Client ID:</strong>
                        </div>
                        <div class="col-sm-4">
                            <strong>Invoice Id:</strong>
                        </div>
                        <div class="col-sm-4">
                            <strong>Comments:</strong>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Assigned E-SIM :</strong>
                        </div>
                        <div class="col-sm-4">
                            <strong>Plan Active :</strong>
                        </div>
                        <div class="col-sm-4">
                            <strong><a href="#" class="btn btn-default">Plan Modify</a></strong>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <strong>Origin Country :</strong>
                        </div>
                        <div class="col-sm-4">
                            <strong>Current-Country:</strong>
                        </div>
                        <div class="col-sm-4">
                            <a href="#">
                                <button type="submit" class="btn btn-default">Generate PDF!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <!--end col-->
        </div> <!--end row-->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->

    @endsection
