@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="row profile-body">
      <!-- left wrapper start -->

      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Role</h6>

                        <form id="myForm" method="POST" action="{{ route('update.role')}}" class="forms-sample" >
                          @csrf
                          <input type="hidden" name="id" value="{{ $role->id}}">
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label">Role Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $role->name}}">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
