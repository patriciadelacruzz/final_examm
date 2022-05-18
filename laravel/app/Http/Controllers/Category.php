<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('index', compact('product'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $CategoryProduct = $request->validate([
            'CategoryCode' => 'required|numeric',
            'Description' => 'required|max:255',
            'ProductisActive' => (IsActive)
        ]);
        $category = Category::create($CategoryProduct);
        return redirect('/category')->with('completed', 'Product Category has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $CategoryId
     * @return \Illuminate\Http\Response
     */
    public function show($CategoryId)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $CategoryId
     * @return \Illuminate\Http\Response
     */
    public function edit($CategoryId)
    {
        $product = Category::findOrFail($categoryid);
        return view('edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $CategoryId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryid)
    {
        $updateCategoryProduct = $request->validate([
            'CategoryCode' => 'required|numeric',
            'Description' => 'required|max:255',
            'ProductisActive' => (IsActive)
        ]);
        Category::whereCategoryId($categoryid)->update($updateCategoryProduct);
        return redirect('/category')->with('completed', 'Category Product has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $CategoryId
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryid)
    {
        $category = Category::findOrFail($categoryid);
        $category->delete();
        return redirect('/category')->with('completed', 'category product has been deleted');
    }
}