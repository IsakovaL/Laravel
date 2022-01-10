<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>create</title>
</head>
<body>
@include('dashboard')

<div class="top-links" style="display: flex; justify-content: space-between;padding: 40px 0;">
    <p><a href="/goods/list" style="font-weight:bold; font-size: 20px">go back</a></p>
</div>
    <div class="form-wrapper" style="width:60%; margin:50px auto">
    <form action="/goods/create" method="post">
        @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" placeholder="description" name="description">
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label"> Qty</label>
                <input type="text" class="form-control" id="qty" placeholder="qty" name="qty">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" placeholder="price" name="price">
            </div>
            <div class="buttons-wrapper" style="text-align: center;">
                <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
                <a href="/goods/list"> <button type="button" class="btn btn-secondary btn-lg">Cancel</button></a>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>