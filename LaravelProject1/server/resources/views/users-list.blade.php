<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>users-list</title>
</head>
<body>
@include('dashboard')
<div class="top-links" style="display: flex; justify-content: space-between;padding: 40px 0;">
    <p><a href="/dashboard" style="font-weight:bold; font-size: 20px"></a></p>
    <p style="margin: 0 150px 0 0" ><a href="/users/create" class="add-user" style="font-weight:bold; font-size: 20px">add new user</a></p>
</div>

        <h1 style="text-align:center">Список пользователей</h1>

        <form action="/users/search" method="get" style="display:flex;align-items:end; margin: 30px auto 20px auto;width: 70%;">
            <select class="form-select" aria-label="Default select example" name="status">
                <option selected>choose by status</option>
                <option value="New">New</option>
                <option value="Active">Active</option>
                <option value="Disabled">Disabled</option>
            </select>    
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="user's name" aria-label="Recipient's username" aria-describedby="button-addon2" name="first_name" value="{{ $first_name }}">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="user's email" aria-label="Recipient's email" aria-describedby="button-addon2" name="email" value="{{ $email }}">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>

            <table class="productslist" style="margin:0 auto; width:80%">
                <tr style="text-align: left">
                    <th>number</th>
                    <th>id</th>
                    <th>status</th>
                    <th>first name</th>
                    <th>last name</th>
                    <th>phone number</th>
                    <th>e-mail</th>
                    <!-- <th>actions</th> -->
                </tr>
                @php
                    $i=0;
                @endphp
                    @foreach ($users as $user) 
                    @php
                        $i=$i+1;
                    @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$user->id}}</td>
                                <td>{{$user->status}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{ 'edit/' . $user->id }}">edit</a>
                                </td>
                                <td>
                                    <a href="{{'delete/'.$user->id}}" >delete</a>
                                </td>
                                <td>
                                    <a href="">view</a>
                                </td>
                            </tr>
                    
                    @endforeach
    </table>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>