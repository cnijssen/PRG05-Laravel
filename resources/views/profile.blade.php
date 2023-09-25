@include('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<h1>Hello <span>Corné</span></h1>

<div class="logout">
    <input type="submit" value="Logout" />
</div>

<div class="profile-card">
    <div class="edit-profile">
        <h2>Your information</h2>

        <form class="form" method="post">
            @csrf 
            @method('put')
            <div class="insert">
                <label>Name</label>
                <input type="text" name="name" autocomplete="off" value="Corné Nijssen" />
            </div>
            <div class="insert">
                <label>E-mail</label>
                <input type="email" name="name" autocomplete="off" value="cornenijss@gmail.com" />
            </div>

            <div class="update">
                <input type="submit" value="Update Profile" />
            </div>
        </form>
    </div>
    <div class="listings">
        <h2>Your Listings</h2>

        <div class="create">
            <button onclick="location.href='{{route('product.create')}}'">List New Sneaker</button>
        </div>
        <div class="switch-text">
            <p>Hide/Show</p>
        </div>
        <div class="your-list">
            @foreach($filteredProducts->sortByDesc('created_at') as $product)
            <label class="switch">
                <input onchange="toggleStatus(this)" data-id="{{$product->id}}" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $product->status ? 'checked' : '' }}>
                <span class="slider round"></span>
            </label>
            <div class="your-card">
                <img src="{{ asset('img/' . $product->image) }}">
                <h2>{{$product->category}} {{$product->top}}<br>{{$product->name}}</h2>
                <p>{{$product->gender}}<br>{{$product->size}}</p>
                <h3>€{{$product->price}}</h3>
            </div>
            <div class="edit-delete">
                <div class="buttons">
                    <button onclick="location.href='{{route('product.edit', ['product' => $product])}}'">Edit</button>
                    <form class="delete" method="post" action="{{route('product.destroy', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function toggleStatus(element) {
        let productId = $(element).data('id');
        let status = $(element).prop('checked');

        $.ajax({
            type: 'POST',
            url: '/product/toggle-status',
            data: {
                '_token': '{{ csrf_token() }}',
                'id': productId,
                'status': status ? 1 : 0
            },
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>

