<form method="post" action="{{route('product.destroy', ['product' => $product])}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" />
</form>


<button onclick="location.href='{{route('product.edit', ['product' => $product])}}'">Edit</button>

<div class="create">
    <button onclick="location.href='{{route('product.create')}}'">Add New Product</button>
</div>