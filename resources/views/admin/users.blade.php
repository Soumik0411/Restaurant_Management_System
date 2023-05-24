<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

        <div style="position: relative; top: 60px; right: -150px">

            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
 
                    @foreach ($data as $data)
                    <tr>
                      <th scope="row">{{$data->name}}</th>
                      <td>{{$data->email}}</td>
                      @if($data->usertype=="0")
                      <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                      @else
                      <td><a>N/A</a></td>
                      @endif
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
</body>
</html>