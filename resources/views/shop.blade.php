@include('layouts.app')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">

<h1>Shop</h1>

<div class="filter-list">
    <form class="form" method="get" action="{{ url('/shop')}}">
        <input type="search" name="query" placeholder="Search..." value="{{ old('query', request('query')) }}">
        <button class="search" type="submit">Search</button>
        <div class="filter">
            <input type="checkbox" name="category[]" id="airJordan" value="Air Jordan 1" {{ in_array("Air Jordan 1", (array) old('category', [])) ? 'checked' : '' }}>
            <label class="{{ in_array("Air Jordan 1", (array) old('category', [])) ? 'checked' : '' }}" for="airJordan">Air Jordan</label>

            <input type="checkbox" name="category[]" id="airForce" value="Air Force 1" {{ in_array("Air Force 1", (array) old('category', [])) ? 'checked' : '' }}>
            <label class="{{ in_array("Air Force 1", (array) old('category', [])) ? 'checked' : '' }}" for="airForce">Air Force</label>

            <input type="checkbox" name="category[]" id="airMax" value="Air Max 1" {{ in_array("Air Max 1", (array) old('category', [])) ? 'checked' : '' }}>
            <label class="{{ in_array("Air Max 1", (array) old('category', [])) ? 'checked' : '' }}" for="airMax">Air Max</label>
            
            <label class="{{ in_array("Low", (array) old('top', [])) ? 'checked' : '' }}" for="low">Low</label>
            <input type="checkbox" name="top[]" id="low" value="Low" {{ in_array("Low", (array) request('top', [])) ? 'checked' : '' }}>

            <label class="{{ in_array("Mid", (array) old('top', [])) ? 'checked' : '' }}" for="mid">Mid</label>
            <input type="checkbox" name="top[]" id="mid" value="Mid" {{ in_array("Mid", (array) request('top', [])) ? 'checked' : '' }}>

            <label class="{{ in_array("High", (array) old('top', [])) ? 'checked' : '' }}" for="high">High</label>
            <input type="checkbox" name="top[]" id="high" value="High" {{ in_array("High", (array) request('top', [])) ? 'checked' : '' }}>

            <label class="{{ in_array("Men's", (array) old('gender', [])) ? 'checked' : '' }}" for="men">Men's</label>
            <input type="checkbox" name="gender[]" id="men" value="Men's" {{ in_array("Men's", (array) request('gender', [])) ? 'checked' : '' }}>

            <label class="{{ in_array("Women's", (array) old('gender', [])) ? 'checked' : '' }}" for="women">Women's</label>
            <input type="checkbox" name="gender[]" id="women" value="Women's" {{ in_array("Women's", (array) request('gender', [])) ? 'checked' : '' }}>
        </div>
    </form>

    <div class="sneaker-list">
        @foreach($filteredProducts->sortByDesc('created_at') as $product)
        <div class="card">
            <img src="{{ asset('img/' . $product->image) }}">
            <h2>Nike {{$product->category}} {{$product->top}}<br><span>{{$product->name}}</span></h2>
            <p>{{$product->gender}} {{$product->size}}</p>
            <h3>€{{$product->price}}</h3>
            <button onclick="location.href='{{route('view', ['product' => $product])}}'">View</button>
        </div>
        @endforeach
    </div>
</div>

{{ $filteredProducts->appends(request()->input())->links('vendor.pagination.custom') }}

<script>
    const checkboxes = document.querySelectorAll('.form input[type="checkbox"]');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            checkbox.form.submit();
        });
    });
</script>