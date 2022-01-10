<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>create-order</title>
</head>
<body>
@include('dashboard')


<div class="top-links" style="display: flex; justify-content: space-between;padding: 40px 0;">
    <p><a href="/orders/list" style="font-weight:bold; font-size: 20px">go back</a></p>
</div>
    <div class="form-wrapper" style="width:60%; margin:50px auto">
        <form action="/orders/create" method="post">
            @csrf

            <input type="hidden" name="orderId" value="{{ $orderId }}">

            <label for="choose-user" class="form-label">User</label>
            <select class="form-select" aria-label="Default select example" id="choose-user" name="chosenUser"> 
                <!-- <option selected>choose user</option> -->

            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{$user->first_name}}</option>
            @endforeach
            
            </select>
            <br>
            <label for="choose-product" class="form-label">Product</label>
            
            <select class="form-select" aria-label="Default select example" name="chosenProduct">
                <!-- <option selected>choose product</option> -->

            @foreach ($goods as $good)
                <option value="{{ $good->id }}">{{ $good->title }}</option>
            @endforeach

            </select>
            <br>

            <div class="mb-3">
                <label for="qty" class="form-label">Qty</label>
                <input type="number" class="form-control" id="qty" name="chosenQty">
                <br>
                <button class="btn btn-primary" type="submit" value="add to order">add to order</button>
            </div>
        </form>
    </div>

    <h1 style="text-align:center">Order</h1>

            <table class="orderslist" style="margin:0 auto; width:80%">
                <tr style="text-align: left">
                    <th>number</th>
                    <th>title</th>
                    <th>price</th>
                    <th>qty</th>
                    <th>total price</th>
                </tr>
                @php
                    $i=0;
                @endphp
                    @foreach ($products_lines as $product_line) 
                    @php
                        $i=$i+1;
                    @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$product_line->title}}</td>
                                <td>{{$product_line->price}}</td>
                                <td>{{$product_line->qty}}</td>
                                <td>{{$product_line->total_price}}</td>
                                
                                <td>
                                    <a href="{{'delete/'. $product_line->id}}">delete</a>
                                </td>                             
                            </tr>
                    
                    @endforeach
    </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>