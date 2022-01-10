<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>list</title>
</head>
<body>

@include('dashboard')
<div class="top-links" style="display: flex; justify-content: space-between;padding: 40px 0;">
    <p><a href="/goods/list" style="font-weight:bold; font-size: 20px">go back</a></p>
    <p style="margin: 0 150px 0 0" ><a href="/goods/create" class="add-product" style="font-weight:bold; font-size: 20px">add new product</a></p>
</div>
        <h1 style="text-align:center">Список товаров</h1>

            <form action="/goods/search" method="get" style="display:flex;align-items:end; float: right; margin-right: 150px;">
                <div class="mb-3">
                    <input type="text" class="form-control" id="search" placeholder="enter product name" name="search">
                </div>
                <div class="buttons-wrapper" style="text-align: center;">
                    <button type="submit" class="btn btn-primary btn-md">Search</button>
                </div>
            </form>

            <table class="productslist" style="margin:0 auto; width:80%">
                <tr style="text-align: left">
                    <th>number</th>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>qty</th>
                    <th>price</th>
                    <!-- <th>actions</th> -->
                </tr>
                @php
                    $i=0;
                @endphp
                    @foreach ($goods as $good) 
                    @php
                        $i=$i+1;
                    @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$good->id}}</td>
                                <td>{{$good->title}}</td>
                                <td>{{$good->description}}</td>
                                <td>{{$good->qty}}</td>
                                <td>{{$good->price}}</td>
                                <td>
                                    <a href="{{ 'edit/' . $good->id }}">edit</a>
                                </td>
                                <td>
                                    <a href="{{'delete/' . $good->id}}">delete</a>
                                </td>
                                <td>
                                    <a href="">view</a>
                                </td>
                            </tr>
                    
                    @endforeach
    </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>