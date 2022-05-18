// CategoryController.php
     /**
     * Edit the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('edit', compact('category'));
    }
    /**
     * Update the specified resource in db.
     */
    public function update(Request $request, $id)
    {
        $updatecategory = $request->validate([
            'CategoryId' =>   'required|numeric',
            'CategoryCode' => 'required|max:255',
            Description' => 'required|max:255',
          
        ]);
        category::whereCategoryId($categoryid)->update($updatecategory);
        return redirect('/category')->with('completed', 'category has been updated');
    }@extends('layout')
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
    Edit & Update
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
      <form method="post" action="{{ route('category.update', $category->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="category">CategoryCode</label>
              <input type="text" class="form-control" name="categorycode value="{{ $category->code }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <input type="description" class="form-control" name="description" value="{{ description->category }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Category</button>
      </form>
  </div>
</div>
@endsection