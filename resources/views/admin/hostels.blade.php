<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostels</title>
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
        <div class="container-scroller ">
        @include('admin.adminnavabar')
         <form action="{{url('/uploadhostel')}}" method="POST" enctype="multipart/form-data" class="mt-6 ml-6 col-md-4" style="border: 2px solid red;height:50%; padding:1rem;border-radius:10px;">
           @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Hostel Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="write the name of the hostel..." aria-describedby="emailHelp">
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="write a description" aria-describedby="emailHelp">
              </div>
            <button type="submit" value="Save" class="btn btn-primary">Submit</button>
          </form>

           <div class="col-md-6 mt-6">
              <table class="table table-striped ml-2">
                <thead>
                  <tr>
                    <th scope="col" style="font-weight: bold; color:white">Hostel Name</th>
                    <th scope="col" style="font-weight: bold; color:white">Description</th>
                    <th scope="col" style="font-weight: bold; color:white">Image</th>
                    <th scope="col" style="font-weight: bold; color:white">Action</th>
                  </tr>
                </thead>
                <tbody>
            @foreach ($data as $item)
            
 
                  <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td><img src="/hostel/{{$item->image}}" width="200" height="200"></td>
                    <td><a href="{{url('/deletehostel',$item->id)}}" class="btn btn-danger">Delete</a>
                      <a href="{{url('/updatehostel',$item->id)}}" class="btn btn-success">Edit</a>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
             </div>
      </div>
     
        @include('admin.adminscript')
      </body>
    </html>
</body>
</html>
{{-- action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data"  --}}