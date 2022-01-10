<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>goods-edit</title>
</head>
<body>
@include('dashboard')

<div class="top-links" style="display: flex; justify-content: space-between;padding: 40px 0;">
    <p><a href="/goods/list" style="font-weight:bold; font-size: 20px">go back</a></p>
    <p style="margin: 0 150px 0 0" ><a href="/goods/create" class="add-product" style="font-weight:bold; font-size: 20px">add new product</a></p>
</div>
    <div class="form-wrapper" style="width:60%; margin:50px auto">
    <form action="/goods/edit" method="post">
        @csrf
        <input type="hidden" name="id" id="id" value="{{ $id }}" />
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ $good->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" placeholder="description" name="description" value="{{ $good->description }}">
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label"> Qty</label>
                <input type="text" class="form-control" id="qty" placeholder="qty" name="qty" value="{{ $good->qty }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" placeholder="price" name="price" value="{{ $good->price }}">
            </div>
            <div class="buttons-wrapper" style="text-align: center;">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
                <a href="/goods/list"> <button type="button" class="btn btn-secondary btn-lg">Cancel</button></a>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>