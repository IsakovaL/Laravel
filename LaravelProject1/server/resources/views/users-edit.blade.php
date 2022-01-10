<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>users-edit</title>
</head>
<body>
@include('dashboard')

<div class="top-links" style="display: flex; justify-content: space-between;padding: 40px 0;">
    <p><a href="/users/list" style="font-weight:bold; font-size: 20px">go back to users list</a></p>
    <p style="margin: 0 150px 0 0" ><a href="/users/create" class="add-user" style="font-weight:bold; font-size: 20px">add new user</a></p>
</div>
    <div class="form-wrapper" style="width:60%; margin:50px auto">
    <form action="/users/edit" method="post">
        @csrf
        <input type="hidden" name="id" id="id" value="{{ $id }}" />
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" placeholder="status" name="status" value="{{ $user->status }}">
            </div>
            <div class="mb-3">
                <label for="fName" class="form-label">First name</label>
                <input type="text" class="form-control" id="fName" placeholder="first name" name="fName" value="{{ $user->first_name }}">
            </div>
            <div class="mb-3">
                <label for="lName" class="form-label"> Last name</label>
                <input type="text" class="form-control" id="lName" placeholder="last name" name="lName" value="{{ $user->last_name }}">
            </div>
            <div class="mb-3">
                <label for="phNum" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="phNum" placeholder="phone number" name="phNum" value="{{ $user->phone_number }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" placeholder="e-mail" name="email" value="{{ $user->email }}">
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