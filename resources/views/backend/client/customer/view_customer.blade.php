@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><a href="{{route('all.customers')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.customers.services')}}">List Services</a></li>
              <li class="breadcrumb-item active"><a href="#">List Call</a></li>
              <li class="breadcrumb-item active"><a href="#">List Appointment</a></li>
              <li class="breadcrumb-item active"><a href="#">List Quotation</a></li>
              <li class="breadcrumb-item active"><a href="#">List Document</a></li>
            </ol>
          </nav>
    </div>
   <br>
    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">View Customer Information</h6>

                        <form id="myForm" method="POST" action="" class="forms-sample" >
                          @csrf
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" >Company Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $customers->name }}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" >Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $customers->email }}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" >Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="{{ $customers->phone }}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" >Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $customers->address }}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" >City</label>
                                <input type="text" name="city" class="form-control" value="{{ $customers->city }}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" value="{{ $customers->description }}">
                            </div>

                        </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
