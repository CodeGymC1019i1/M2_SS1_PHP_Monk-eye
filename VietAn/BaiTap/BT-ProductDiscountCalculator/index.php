<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
    <style>
        input{
            width: 300px;
            font-size: 16px;
            border: 1px solid black;
            padding: 10px 10px 10px 10px;
            margin: 10px 0px;
        }
        #submit{
            padding: 10px 10px 10px 10px;
            margin: auto;
        }
    </style>
</head>
<body>
<form method="post" action="displayDiscount.php">
    <input type="text" name="productDescription" placeholder="Product Description"><br/>
    <input type="number" name="listPrice" placeholder="List Price"><br/>
    <input type="number" name="discountPercent" placeholder="Discount Percent"><br/>
    <button type="submit" id="submit">Caculate Discount</button>
</form>
</body>
</html>
