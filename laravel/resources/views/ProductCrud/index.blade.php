@extends('layouts.mainlayout')
@section('title', 'Index')
@section('content')
<h1>Product List</h1>
<form action="" method="get">
    <input type="search" name="search" value="{{$search}}" placeholder="Search Product">
    <button type="submit">Search</button>&emsp;
    <a href="/Product/create">+Add Product</a>
</form>
<br>
<table>
<tr>
    <th>Product ID</th>
    <th>Product Code</th>
    <th>Product Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Status</th>
</tr>

@forelse($products as $key => $product)
    <tr>
        <td>
            <p>{{ $product['ProductId'] }}</p>
        </td>
        <td>
            <p>{{  $product['ProductCode'] }}</p>
        </td>
        <td>
            <p>{{  $product['ProductName'] }}</p>
        </td>
        <td>
            <p>{{  $product['ProductDescription'] }}</p>
        </td>
        <td>
            <p>{{  $product['ProductPrice'] }}</p>
        </td>
        <td>
            @if($product['IsActive']==true)
            <p>Active</p>
            @else
            <p>Inactive</p>
            @endif
        </td>
        <td>
        <form action="/Product/{{ $product['ProductId'] }}/edit">
            <input type="submit" value="Edit"/>
        </form>
        </td>
        <td>
        <form action="/Product/{{ $product['ProductId'] }}" method="POST">
        @csrf
        @method('Delete')
        <input type="hidden" name="name" value= <?php echo $product['ProductId'] ?>>
        <input type="submit" name="submit" onclick="return confirm('Do  you want to delete? <?php echo $product['ProductName'] ?>?')" value="Delete">
        </form>
        </td>
    </tr>

@empty
    <h3>No results</h3>
@endforelse

</table>
@endsection