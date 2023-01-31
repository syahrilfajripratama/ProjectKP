@extends('layouts.bmNav')

@section('container')
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">On Progress Prospek</h5>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, labore.</p>
        <a href="branchManager/on-progress" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Validated Prospek</h5>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, labore.</p>
        <a href="branchManager/validated" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>
</div>
@endsection