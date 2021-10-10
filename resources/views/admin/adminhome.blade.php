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
        <!-- main-panel ends -->
    <!-- container-scroller -->
    </div>
    <!-- plugins:js -->
    @include('admin.adminscript')
  </body>
</html>