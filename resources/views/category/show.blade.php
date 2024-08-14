@extends('layouts.frontend')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Show Category
            <a href="{{ route('category.index') }}" class="btn btn-primary float-end">Back</a>
          </h4>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <b>Name</b>
            <p class="text-danger">{{ $category->name }}</p>
          </div>
            <div class="mb-3">
              <b>Description</b>
              <p class="text-danger">{!! $category->description !!}</p>
            </div>
            <div class="mb-3">
              <b>Status</b>
              <p class="text-danger">{{ $category->status == 1 ? 'Visible' : 'Hidden' }}</p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection