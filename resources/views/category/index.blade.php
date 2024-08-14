@extends('layouts.frontend')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @session('status')
      <div class="alert alert-success alert-dismissable fade show" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endsession
      <div class="card">
        <div class="card-header">
          <h4>Categories
            <a href="{{ route('category.create') }}" class="btn btn-primary float-end">Create Category</a>
          </h4>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($categories as $category)
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->status == 1 ? 'Visible' : 'Hidden'}}</td>
                <td>
                  <a href="{{ route('category.edit', $category->id) }}" class="btn btn-outline-success">Edit</a>
                  <a href="{{ route('category.show', $category->id) }}" class="btn btn-outline-info">Show</a>
                  <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5">No data</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection