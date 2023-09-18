@include('layouts.app')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">

<div class="block"></div>

<div class="filter-list">
    <form class="form" method="get" action="{{ url('/shop')}}">
        <input type="search" name="query" placeholder="Search..." value="{{ old('query', request('query')) }}">
        <button class="search" type="submit">Search</button>
        <div class="filter">
            <input type="checkbox" name="category[]" id="airJordan" value="Air Jordan 1" {{ in_array("Air Jordan 1", (array) old('category', [])) ? 'checked' : '' }}>
            <label class="{{ in_array("Air Jordan 1", (array) old('category', [])) ? 'checked' : '' }}" for="airJordan">Air Jordan</label>

            <input type="checkbox" name="category[]" id="airMax" value="Air Max 1" {{ in_array("Air Max 1", (array) old('category', [])) ? 'checked' : '' }}>
            <label class="{{ in_array("Air Max 1", (array) old('category', [])) ? 'checked' : '' }}" for="airMax">Air Max</label>

            <label class="{{ in_array("Men's", (array) old('gender', [])) ? 'checked' : '' }}" for="men">Men's</label>
            <input type="checkbox" name="gender[]" id="men" value="Men's" {{ in_array("Men's", (array) request('gender', [])) ? 'checked' : '' }}>

            <label class="{{ in_array("Women's", (array) old('gender', [])) ? 'checked' : '' }}" for="women">Women's</label>
            <input type="checkbox" name="gender[]" id="women" value="Women's" {{ in_array("Women's", (array) request('gender', [])) ? 'checked' : '' }}>

            <label class="{{ in_array("Low", (array) old('top', [])) ? 'checked' : '' }}" for="low">Low</label>
            <input type="checkbox" name="top[]" id="low" value="Low" {{ in_array("Low", (array) request('top', [])) ? 'checked' : '' }}>

            <label class="{{ in_array("High", (array) old('top', [])) ? 'checked' : '' }}" for="high">High</label>
            <input type="checkbox" name="top[]" id="high" value="High" {{ in_array("High", (array) request('top', [])) ? 'checked' : '' }}>
            <div class="apply-filters">
                <button type="submit">Apply Filters</button>
                <a onclick="location.href='{{ url('/shop')}}'">Remove filters</a>
            </div>

        </div>
    </form>

    <div class="sneaker-list">
        @foreach($filteredProducts->sortByDesc('created_at') as $product)
        <div class="card">
            <img src="{{ asset('img/' . $product->image) }}">
            <h2>{{$product->category}} {{$product->top}}<br>{{$product->name}}</h2>
            <p>{{$product->gender}} {{$product->size}}</p>
            <h3>€{{$product->price}}</h3>
            <button onclick="location.href='{{route('view', ['product' => $product])}}'">View</button>
        </div>
        @endforeach
    </div>
</div>

@extends('layouts.footer')
