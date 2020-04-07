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
                    <h4 class="page-title">Add a Esim</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end page title end breadcrumb -->
        <form action="{{route('store_client')}}" method="POST">

        <div class="card">
            <div class="card-body">

                    @csrf
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input required class="form-control" name="name" type="name" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Client ID</label>
                        <div class="col-sm-10">
                            <input required class="form-control" name="client_id" type="client" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
                        <div class="col-sm-10">
                            <input required class="form-control" name="email" type="client" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Registration Number </label>
                        <div class="col-sm-10">
                            <input required class="form-control" name="number" type="search" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>


                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input required class="form-control" name="contact_number" type="search" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input required class="form-control" name="password" type="password" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-10">
                            <input required class="form-control" name="designation" type="search" placeholder="0000045" id="example-search-input">
                        </div>

                    </div>
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Contact Person</label>
                        <div class="col-sm-10">
                            <input required class="form-control" name="contact_person" type="search" placeholder="0000045" id="example-search-input">
                        </div>

                    </div>


            </div>
        </div>
        <div class="card">
            <h5 class="card-title">Address</h5>
                <div class="form-group-row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                        <input required class="form-control" name="street" type="search" placeholder="0000045" id="example-search-input">
                    </div>
                </div>
                <div class="form-group-row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                        <input required class="form-control" name="city" type="search" placeholder="0000045" id="example-search-input">
                    </div>
                </div>
                <div class="form-group-row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-10">
                        <input required class="form-control" name="state" type="search" placeholder="0000045" id="example-search-input">
                    </div>
                </div>
                <div class="form-group-row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Zipcode</label>
                    <div class="col-sm-10">
                        <input required class="form-control" name="zipcode" type="search" placeholder="0000045" id="example-search-input">
                    </div>
                </div>
                <div class="form-group-row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-10">
                        <input required class="form-control" name="country" type="search" placeholder="0000045" id="example-search-input">
                    </div>
                </div>
                <div class="form-group-row">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

        </div>
    </form>
    </div><!-- container -->

</div> <!-- Page content Wrapper -->

@endsection
