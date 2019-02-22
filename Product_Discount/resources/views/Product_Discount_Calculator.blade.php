<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description:</label><span>{{ $product}}</span><br/>
    <label>List Price:</label> <span>{{ $price}}</span><br/>
    <label>Discount Percent:</label> <span>{{ $discountPercent}}</span><br/>
    <label>Discount:</label> <span>{{$discountAmount}}</span><br/>
         <label>Discount_Price:</label> <span>{{$newPrice }}</span><br/>
</div>
</body>
</html>