<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")
   
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")


    <div class="my-5 mx-5">

        <table class="table table-bordered">
   
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Number of Guest</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($data as $data)
            <tr>
              <th scope="row">{{$data->name}}</th>
              <td>{{$data->email}}</td>
              <td>{{$data->phone}}</td>
              <td>{{$data->guest}}</td>
              <td>{{$data->date}}</td>
              <td>{{$data->time}}</td>
              <td>{{$data->message}}</td>
              
            </tr>
                
            @endforeach
        </tbody>
      </table>

    </div>

    </div>


    <!-- container-scroller -->
    @include("admin.adminscript")
  </body>
</html>