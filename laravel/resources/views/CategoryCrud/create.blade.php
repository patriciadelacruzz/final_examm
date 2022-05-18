@extends('layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add User
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('product.category') }}">
          <div class="form-group">
              @csrf
              <label for="CategoryId">CategoryId</label>
              <input type="text" class="form-control" name="categoryid"/>
          </div>
          <div class="form-group">
              <label for="CategoryCode">Category</label>
              <input type="CategoryCode" class="form-control" name="categorycode"/>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <input type="description" class="form-control" name="description"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Category Of Products</button>
      </form>
  </div>
</div>
@endsection