<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/crud.css')}}">
    <title>C&C Sneakers</title>
</head>
<body>
    <h1>EDIT LISTING</h1>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
        <div class="insert">
            <label>Image</label>
            <select name="image">
                <option value="{{$product->image}}">{{$product->image}}</option>
                <option value="Jordan_1_Chicago_High.png">Air Jordan 1 Chicago High (Update)</option>
                <option value="Jordan_1_Mocha_High.png">Air Jordan 1 Mocha High (Update)</option>
                <option value="Jordan_1_Fragment_High.png">Air Jordan 1 Fragment High (Update)</option>
                <option value="Jordan_1_Taxi_Mid.png">Air Jordan 1 Taxi Mid (Update)</option>
                <option value="Jordan_1_Diamond_Mid.png">Air Jordan 1 Diamond Mid (Update)</option>
                <option value="Jordan_1_Sonics_Mid.png">Air Jordan 1 Sonics Mid (Update)</option>
                <option value="Jordan_1_Phantom_Low.png">Air Jordan 1 Phantom Low (Update)</option>
                <option value="Jordan_1_Olive_Low.png">Air Jordan 1 Olive Low (Update)</option>
                <option value="Jordan_1_Fragment_Low.png">Air Jordan 1 Fragment Low (Update)</option>
                <option value="AirForce_1_White_Mid.png">Air Force 1 Off-White White Mid (Update)</option>
                <option value="AirForce_1_BrownPlaid_Mid.png">Air Force 1 Brown Plaid Mid (Update)</option>
                <option value="AirForce_1_CaveStone_Mid.png">Air Force 1 Cave Stone Mid (Update)</option>
                <option value="AirForce_1_SummitWhite_Low.png">Air Force 1 Summit White Low (Update)</option>
                <option value="AirForce_1_MicaGreen_Low.png">Air Force 1 Mica Green Low (Update)</option>
                <option value="AirForce_1_Sail_Low.png">Air Force 1 Off-White Sail Low (Update)</option>
                <option value="AirMax_1_Travis.png">Air Max 1 Baroque Brown (Update)</option>
                <option value="AirMax_1_Chili.png">Air Max 1 Chili (Update)</option>
                <option value="AirMax_1_RuggedOrange.png">Air Max 1 Rugged Orange (Update)</option>
            </select>
        </div>
        <div class="insert">
            <label>Category</label>
            <select name="category">
                <option value="{{$product->category}}">{{$product->category}}</option>
                <option value="Air Jordan 1">Air Jordan 1 (Update)</option>
                <option value="Air Force 1">Air Force 1 (Update)</option>
                <option value="Air Max 1">Air Max 1 (Update)</option>
            </select>
        </div>
        <div class="insert">
            <label>Top</label>
            <select name="top">
                <option value="{{$product->top}}">{{$product->top}}</option>
                <option value="High">High (Update)</option>
                <option value="Mid">Mid (Update)</option>
                <option value="Low">Low (Update)</option>
            </select>
        </div>
        <div class="insert">
            <label>Colorway</label>
            <input type="text" name="name" autocomplete="off" value="{{$product->name}}" />
        </div>
        <div class="insert">
            <label>Gender</label>
            <select name="gender">
                <option value="{{$product->gender}}">{{$product->gender}}</option>
                <option value="Men's">Men's (Update)</option>
                <option value="Women's">Women's (Update)</option>
            </select>
        </div>
        <div class="insert">
            <label>Size</label>
            <input type="number" name="size" step="0.5" min="0" max="15" autocomplete="off" value="{{$product->size}}" />
        </div>
        <div class="insert">
            <label>Price</label>
            <input type="number" name="price" step="0.01" min="0" max="99999.99" autocomplete="off" value="{{$product->price}}" />
        </div>
        <div class="save">
            <input type="submit" value="Update Listing" />
        </div>
    </form>

    <div class="cancel">
            <button onclick="location.href='{{ url()->previous() }}'">Cancel</button>
        </div>
</body>
</html>