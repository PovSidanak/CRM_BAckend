@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="page-content">
    <div>
    <button type="button" class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@mdo">
       <i class="btn-icon-prepend" data-feather="plus"></i>Add Customer
    </button>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Customer All</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>S1</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Sold by</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $customers as $key => $item)
            <tr>
                <td>{{ $key+1}}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->email}}</td>
                <td>{{ $item->phone}}</td>
                <td>Admin</td>
                <td>
                    <a href="{{ route('view.customers',$item->id)}}" class="btn btn-inverse-success" title="View"><i data-feather="eye"></i></a>
                    <a href="{{ route('edit.leads',$item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                    <a href="{{ route('delete.services',$item->id)}}" id="delete" class="btn btn-inverse-danger" title="Delete"><i data-feather="trash-2"></i></a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>

{{-- Create form --}}
<div class="modal fade" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="varyingModalLabel">Add Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
            <form id="myForm" method="POST" action="{{ route('store.customers')}}" class="forms-sample" >
                @csrf
                  <div class="mb-3 form-group" >
                      <label for="exampleInputEmail1" class="form-label">Company Name</label>
                      <input type="text" name="name" class="form-control">
                  </div>
                  <div class="mb-3 form-group" >
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" name="email" class="form-control">
                  </div>
                  <div class="mb-3 form-group" >
                      <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                      <input type="text" name="phone" class="form-control">
                  </div>
                  <div class="mb-3 form-group" >
                      <label for="exampleInputEmail1" class="form-label">Address</label>
                      <input type="text" name="address" class="form-control">
                  </div>
                  <div class="mb-3 form-group" >
                      <label for="exampleInputEmail1" class="form-label">City</label>
                      <input type="text" name="city" class="form-control">
                  </div>
                  <div class="mb-3 form-group" >
                      <label for="exampleInputEmail1" class="form-label">Description</label>
                      <input type="text" name="description" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Save</button>
              </form>
        </div>

      </div>
    </div>
  </div>
@endsection
