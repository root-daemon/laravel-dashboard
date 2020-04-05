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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body new-user">
                        <h5 class="header-title mb-4 mt-0">All Owners</h5>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Registered Name</th>
                                        <th class="border-top-0">Registered Number</th>
                                        <th class="border-top-0">Contact Person</th>
                                        <th class="border-top-0">Desingnation</th>
                                        <th class="border-top-0">Contact Number</th>
                                        <th class="border-top-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($owners as $owner)
                                    <tr>
                                        <td>
                                            {{$owner->client->name}}
                                        </td>
                                        <td>
                                            {{$owner->client->client_id}}
                                        </td>
                                        <td>
                                            {{$owner->contact_person}}
                                        </td>
                                        <td>
                                            {{$owner->desingnation}}                                                                                                                                                                                                                     </td>
                                        <td>
                                            {{$owner->contact_number}}
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary waves-effect waves-light">View</a>
                                            <a href="#" class="btn btn-secondary waves-effect m-l-5">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
            <!--end col-->
        </div> <!--end row-->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->

    @endsection
