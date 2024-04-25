@extends('admin.admin_dashboard')
@section('admin')
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
    <h6 class="card-title">Permission All</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>S1</th>
            <th>Permission Name</th>
            <th>Group Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $permissions as $key => $item)
            <tr>
                <td>{{ $key+1}}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->group_name}}</td>
                <td>
                    <a href="{{ route('edit.permission',$item->id)}}" class="btn btn-inverse-warning" >Edit</a>
                    <a href="{{ route('delete.permission',$item->id)}}" id="delete" class="btn btn-inverse-danger">Delete</a>
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
            <h6 class="card-title">Add Permission</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
            <form id="myForm" method="POST" action="{{ route('store.permission')}}" class="forms-sample" >
                @csrf
                  <div class="mb-3 form-group" >
                      <label for="exampleInputEmail1" class="form-label">Permission Name</label>
                      <input type="text" name="name" class="form-control">
                  </div>
                  <div class="mb-3 form-group" >
                      <label for="exampleInputEmail1" class="form-label">Group Name</label>
                      <select name="group_name" class="form-select" id="exampleFormControlSelect1">
                          <option selected="" disabled="">Select Group</option>
                          <option value="type">Service Type</option>
                          <option value="amenities">Amenities</option>
                          <option value="role">Role & Permission</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Save Changes</button>
              </form>
        </div>

      </div>
    </div>
  </div>
@endsection
