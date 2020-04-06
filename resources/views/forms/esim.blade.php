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
        <div class="card">
            <div class="card-body">
                <form action="{{route('store_esim')}}" method="POST">
                    @csrf
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">MSISDN</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="msisdn" type="search" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ICCID-1</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="iccid1" type="search" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ICCID-2 </label>
                        <div class="col-sm-10">
                            <input class="form-control" name="iccid2" type="search" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">E-SIM Status</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status">
                                <option value="inactive">Inactive</option>
                                <option value="active">Active</option>
                                <option value="tampered">Tampered</option>
                                <option value="disabled">Disabled</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Device ID</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="device_id" type="search" placeholder="0000045" id="example-search-input">
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Comments</label>
                        <div class="col-sm-10">
                            <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars." name="comments"></textarea>
                        </div>

                    </div>
                    <div class="form-group-row m-3">

                        <button type="submit" class="btn btn-primary">Next  </button>
                    </div>
                </form>
            </div>
        </div>

    </div><!-- container -->

</div> <!-- Page content Wrapper -->

@endsection
