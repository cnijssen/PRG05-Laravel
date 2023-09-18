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
    <h1>LIST NEW SNEAKER IN STORE</h1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf 
        @method('post')
        <div class="insert">
            <label>Category</label>
            <select name="category">
                <option value="" disabled selected></option>
                <option value="Air Jordan 1">Air Jordan 1</option>
                <option value="Air Max 1">Air Max 1</option>
            </select>
        </div>
        <div class="insert">
            <label>Top</label>
            <select name="top">
                <option value="" disabled selected></option>
                <option value="High">High</option>
                <option value="Low">Low</option>
            </select>
        </div>
        <div class="insert">
            <label>Colorway</label>
            <input type="text" name="name" autocomplete="off" />
        </div>
        <div class="insert">
            <label>Size</label>
            <input type="number" name="size" step="0.5" min="0" max="15" autocomplete="off" />
        </div>
        <div class="insert">
            <label>Price</label>
            <input type="number" name="price" step="0.01" max="99999.99" min="0" autocomplete="off"/>
        </div>
        <div class="insert">
            <label>Gender</label>
            <select name="gender">
                <option value="" disabled selected></option>
                <option value="Men's">Men's</option>
                <option value="Women's">Women's</option>
            </select>
        </div>
        <div class="insert">
            <label>Image</label>
            <select name="image">
                <option value="" disabled selected></option>
                <option value="Jordan_1_Chicago_High.png">Air Jordan 1 Chicago High</option>
                <option value="Jordan_1_Mocha_High.png">Air Jordan 1 Mocha High</option>
                <option value="Jordan_1_Fragment_High.png">Air Jordan 1 Fragment High</option>
                <option value="Jordan_1_Phantom_Low.png">Air Jordan 1 Phantom Low</option>
                <option value="Jordan_1_Olive_Low.png">Air Jordan 1 Olive Low</option>
                <option value="Jordan_1_Fragment_Low.png">Air Jordan 1 Fragment Low</option>
                <option value="AirMax_1_Travis.png">Air Max 1 Baroque Brown</option>
                <option value="AirMax_1_Chili.png">Air Max 1 Chili</option>
                <option value="AirMax_1_RuggedOrange.png">Air Max 1 Rugged Orange</option>
            </select>
        </div>
        <div class="save">
            <input type="submit" value="List Sneaker" />
        </div>
    </form>
        <div class="cancel">
            <button onclick="location.href='{{ url()->previous() }}'">Cancel</button>
        </div>

    </script>
</body>
</html>
