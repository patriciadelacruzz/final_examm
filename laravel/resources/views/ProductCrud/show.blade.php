// ProductController.php
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }
    /**
     * Store a newly created resource in Product.
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            oreProduct = $request->validate([
            'ProductCode' => 'required|numeric',
            'ProductName' => 'required|max:255',
            'ProductDescription' => 'required|max:255',
            'ProductPrice' => 'required|max:255',
            'ProductisActive' => (IsActive),
        ]);
        $product = Product::create($storeProduct);
        return redirect('/product')->with('completed', 'Product has been saved!');
    }