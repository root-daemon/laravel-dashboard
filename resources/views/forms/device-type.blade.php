@extends('layouts.admin_layout')
@section('page-content-warraper')



<!-- Top Bar End -->

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active">Form Elements</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Elements</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="card">
            <div class="card-body">
                <form action="{{route('device-type')}}" method="GET">

                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Status  </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="STATUS">
                                <option value="upcoming">Upcoming</option>
                                <option value="inventory">Inventory</option>
                                <option value="invoiced">Invoiced</option>
                                <option value="intransit">In Transit</option>
                                <option value="deliveredtoclient">Delivered To Client</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group-row m-3">

                        <button type="submit" class="btn btn-primary">Next  </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div><!-- container -->

</div> <!-- Page content Wrapper -->

@endsection
