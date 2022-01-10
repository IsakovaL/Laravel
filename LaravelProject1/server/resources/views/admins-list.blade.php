<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>admins-list</title>
</head>
<body>
@include('dashboard')
<div class="top-links" style="display: flex; justify-content: space-between;padding: 40px 0;">
    <p><a href="/dashboard" style="font-weight:bold; font-size: 20px">go to dashboard</a></p>
    <p style="margin: 0 150px 0 0" ><a href="/admins/create" class="add-admin" style="font-weight:bold; font-size: 20px">add new admin</a></p>
</div>

        <h1 style="text-align:center">Список админов</h1>

        <form action="/admins/search" method="get" style="display:flex;align-items:end; margin: 30px auto 20px auto;width: 70%;">
            <select class="form-select" aria-label="Default select example" name="status">
                <option selected>choose by status</option>
                <option value="New">New</option>
                <option value="Active">Active</option>
                <option value="Disabled">Disabled</option>
            </select>    
        <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="admin's name" aria-label="admin's username" aria-describedby="button-addon2" value="first_name">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="admin's email" aria-label="admin's email" aria-describedby="button-addon2" value="first_name">
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
                    <th>email</th>
                    <th>created_at</th>
                    <!-- <th>actions</th> -->
                </tr>
                @php
                    $i=0;
                @endphp
                    @foreach ($admins as $admin) 
                    @php
                        $i=$i+1;
                    @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$admin->id}}</td>
                                <td>{{$admin->status}}</td>
                                <td>{{$admin->first_name}}</td>
                                <td>{{$admin->last_name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->created_at}}</td>
                                <td>
                                    <a href="">edit</a>
                                </td>
                                <td>
                                    <a href="{{'delete/'.$admin->id}}" >delete</a>
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