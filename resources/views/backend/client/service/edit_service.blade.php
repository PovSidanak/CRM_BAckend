@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Service</h6>

                        <form id="myForm" method="POST" action="{{ route('update.services',$services->id)}}" class="forms-sample" >
                          @csrf
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" >Service Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $services->name }}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label">Service Description</label>
                                <input type="text" name="description" class="form-control" value="{{ $services->description }}">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Save</button>
                        </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
