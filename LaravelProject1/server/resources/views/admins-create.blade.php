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
    <div class="form-wrapper" style="width:60%; margin:50px auto">
        <form action="/admins/create" method="post">
            @csrf
                <div class="mb-3">
                    <label for="status" class="form-label"> Status</label>
                    <input type="text" class="form-control" id="status" placeholder="admin status" name="status">
                </div>
                <div class="mb-3">
                    <label for="fName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fName" placeholder="admin first name" name="first_name">
                </div>
                <div class="mb-3">
                    <label for="lName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lName" placeholder="admin last name" name="last_name">
                </div>
                <div class="mb-3">
                    <label for="phNumber" class="form-label"> E-mail</label>
                    <input type="text" class="form-control" id="email" placeholder="admin e-mail" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="admin password" name="password">
                </div>
                <div class="buttons-wrapper" style="text-align: center;">
                    <button type="submit" class="btn btn-primary btn-lg">Add User</button>
                    <a href="/admins/list"><button type="button" class="btn btn-secondary btn-lg">Cancel</button></a> 
                </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>