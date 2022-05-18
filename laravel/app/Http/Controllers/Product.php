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
        $product = Product::all();
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
        $storeProduct = $request->validate([
            'ProductCode' => 'required|numeric',
            'ProductName' => 'required|max:255',
            'ProductDescription' => 'required|max:255',
            'ProductPrice' => 'required|max:255',
            'ProductisActive' => (IsActive)
        ]);
        $product = Product::create($storeProduct);
        return redirect('/product')->with('completed', 'Product has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $ProductId
     * @return \Illuminate\Http\Response
     */
    public function show($ProductId)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $ProductId
     * @return \Illuminate\Http\Response
     */
    public function edit($ProductId)
    {
        $product = Product::findOrFail($productid);
        return view('edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $ProductId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productid)
    {
        $updateProduct = $request->validate([
            'ProductCode' => 'required|numeric',
            'ProductName' => 'required|max:255',
            'ProductDescription' => 'required|max:255',
            'ProductPrice' => 'required|max:255',
            'ProductisActive' => (IsActive)
        ]);
        Student::whereProductId($productid)->update($updateProduct);
        return redirect('/product')->with('completed', 'Product has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $ProductId
     * @return \Illuminate\Http\Response
     */
    public function destroy($productid)
    {
        $product = Product::findOrFail($productid);
        $product->delete();
        return redirect('/product')->with('completed', 'product has been deleted');
    }
}