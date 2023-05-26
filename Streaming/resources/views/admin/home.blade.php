
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

        @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      <!-- sidebar section -->
        @include('admin.sidebar')

      <!-- navbar section -->
        @include('admin.navbar')

        <!-- body section -->
        @include('admin.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
