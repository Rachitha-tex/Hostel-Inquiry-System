 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head> 
<body>
    <x-app-layout>
 
    </x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
       @include('admin.admincss')
      </head>
      <body>
        <div class="container-scroller">
        @include('admin.adminnavabar')
      
        <div style="position: :relative; top:60px; right:-150px padding-top:50px; width:70%;">
            <table class="table table-light  mt-6 ml-6">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">LastName</th>
                      <th scope="col">Email</th>
                      <th scope="col">User Id</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->lastname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->userId}}</td>
                    <td>{{$item->pnumber}}</td>

                    @if($item->usertype=="0")
                    <td><a href="{{url('/deleteuser',$item->id)}}" class="btn btn-danger">Delete</a></td>
                    @else
                    <td><a>Not Allowed</a></td>
                    @endif
                   
                   
                  </tr> 
                  @endforeach
                 
              </table>
        </div>
      </div>

        @include('admin.adminscript')
      </body>
    </html>
</body>
</html>