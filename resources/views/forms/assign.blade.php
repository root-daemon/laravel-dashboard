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
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Plan Start</th>
                                        <th class="border-top-0">Plan End</th>
                                        <th class="border-top-0">Pack Validity</th>
                                        <th class="border-top-0">Plan Type</th>
                                        <th class="border-top-0">Pricing</th>
                                        <th class="border-top-0">Operator</th>
                                        <th class="border-top-0">Bandwith</th>
                                        <th class="border-top-0">Download limit	</th>
                                        <th class="border-top-0">Plan Status</th>
                                        <th class="border-top-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plans as $plan)
                                    <tr>
                                        <td>
                                            {{$plan->id}}
                                        </td>
                                        <td>
                                            {{$plan->name}}
                                        </td>
                                        <td>
                                            {{$plan->start}}
                                        </td>
                                        <td>
                                            {{$plan->end}}                                                                                                                                                                                                                     </td>
                                        <td>
                                            {{$plan->validity}}
                                        </td>
                                        <td>
                                            {{$plan->type}}
                                        </td>
                                        <td>
                                            {{$plan->pricing}}
                                        </td>
                                        <td>
                                            {{$plan->operator}}
                                        </td>
                                        <td>
                                            {{$plan->bandwith}}
                                        </td>
                                        <td>
                                            {{$plan->data_limit}}
                                        </td>
                                        <td>
                                            {{$plan->status}}
                                        </td>

                                        <td>
                                        <form action="{{route('post_assign_plan') }}" method="POST">
                                            <input type="hidden" name="plan_id" value="{{$plan->id}}">
                                            <button type = 'submit' class="btn btn-primary waves-effect waves-light">Assign Plan</button>
                                        </form>

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
