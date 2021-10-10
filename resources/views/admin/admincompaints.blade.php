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
     
   <div class="col-md-4 mt-4" >
        <table class="table table-light" >
          <thead class="thead-dark">
            <tr>
              <th scope="col" style="font-weight: bold; color:white">Name</th>
              <th scope="col" style="font-weight: bold; color:white">Email</th>
              <th scope="col" style="font-weight: bold; color:white">Hostel Name</th>
              <th scope="col" style="font-weight: bold; color:white">Floor Number</th>
              <th scope="col" style="font-weight: bold; color:white">Room Number</th>
              <th scope="col" style="font-weight: bold; color:white">Date</th>
              <th scope="col" style="font-weight: bold; color:white">Message</th>
                 <th scope="col" style="font-weight: bold; color:white">Image</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <th>{{$item->name}}</th>
              <td>{{$item->email}}</td>
              <td>{{$item->hostelname}}</td>
              <td>{{$item->floornumber}}</td>
              <td>{{$item->roomnumber}}</td>
              <td>{{$item->date}}</td>
              <td>{{$item->message}}</td>
              <td><img src="{{asset('uploads/student/'.$item->image)}}" ></td>
            </tr>
            @endforeach
           
          </tbody>
        </table>
    </div>




    </div>
    <!-- plugins:js -->
    @include('admin.adminscript')
  </body>
</html>