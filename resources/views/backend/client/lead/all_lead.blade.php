@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.leads')}}" class="btn btn-inverse-info">Add Lead</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Lead All</h6>
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
            @foreach ( $leads as $key => $item)
            <tr>
                <td>{{ $key+1}}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->email}}</td>
                <td>{{ $item->phone}}</td>
                <td>
                   Jasmin Lemm
                </td>
                <td>
                    <a href="{{ route('edit.leads',$item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                    <a href="{{ route('delete.leads',$item->id)}}" id="delete" class="btn btn-inverse-danger" title="Delete"><i data-feather="trash-2"></i></a>
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
@endsection
