<x-app-layout>
 
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    <!-- Required meta tags -->
   @include('admin.admincss')
  </head>
  <body>
  <div class="container-scroller">
    @include('admin.adminnavabar')
     <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data" class="mt-6 ml-6 col-md-4" style="border: 2px solid red;height:50%; padding:1rem;border-radius:10px;">
           @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Hostel Name</label>
              <input type="text" class="form-control" name="name" value="{{$data->name}}" id="exampleInputEmail1" placeholder="write the name of the hostel..." aria-describedby="emailHelp">
            </div>
              
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" value="{{$data->description}}" name="description" id="exampleInputEmail1" placeholder="write a description" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Old Image</label>
               <img src="/hostel/{{$data->image}}" width="200" height="200">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">New Image</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" value="Save" class="btn btn-primary">Submit</button>
          </form>
    </div>
  
    @include('admin.adminscript')
  </body>
</html>