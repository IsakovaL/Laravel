<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>orders-list</title>
</head>
<body>

@include('dashboard')
<div class="top-links" style="display: flex; justify-content: space-between;padding: 40px 0;">
    <p><a href="/orders/list" style="font-weight:bold; font-size: 20px">go back</a></p>
    <p style="margin: 0 150px 0 0" ><a href="/orders/create" class="add-order" style="font-weight:bold; font-size: 20px">add new order</a></p>
</div>
        <h1 style="text-align:center">Список заказов</h1>

            <table class="orderslist" style="margin:0 auto; width:80%">
                <tr style="text-align: left">
                    <th>number</th>
                    <th>id</th>
                    <th>user_id</th>
                    <th>admin_id</th>
                    <th>status</th>
                </tr>
                @php
                    $i=0;
                @endphp
                    @foreach ($orders as $order) 
                    @php
                        $i=$i+1;
                    @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$order->id}}</td>
                                <td>{{$order->user_id}}</td>
                                <td>{{$order->admin_id}}</td>
                                <td>{{$order->qty}}</td>
                                <td>
                                    <a href="{{ 'edit/' . $order->id }}">edit</a>
                                </td>
                                <td>
                                    <a href="{{'delete/' . $order->id}}">delete</a>
                                </td>
                                <td>
                                    <a href="">view</a>
                                </td>
                            </tr>
                    
                    @endforeach
    </table>

    @include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>