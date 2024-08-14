@extends('layouts.frontend')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Create Category
            <a href="{{ route('category.index') }}" class="btn btn-primary float-end">Back</a>
          </h4>
        </div>
        <div class="card-body">
          <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" id="name" class="form-control">
              @error('name')
              <small class="text-danger">
                {{$message}}
              </small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" id="description" rows="3" class="form-control"></textarea>
              @error('description')
              <small class="text-danger">
                {{$message}}
              </small>
              @enderror
            </div>
            <div class="mb-3 form-check form-switch ">
              <input type="checkbox" name="status" class="form-check-input" role="switch" checked style="cursor: pointer;" /> Visible
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection