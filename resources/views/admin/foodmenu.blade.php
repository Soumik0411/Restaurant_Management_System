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

        <div class="d-flex flex-col" style="overflow: auto;margin-left:100px;">

            <div>

                <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <label class="mx-3" for="title">Title</label>
                        <input style="color:black"type="text" name="title" placeholder="Please enter title" required>
                    </div>
    
                    <div class="mb-3">
                        <label class="mx-3" for="price">Price(In Rs.)</label>
                        <input style="color:black"type="num" name="price" placeholder="Please enter price" required>
                    </div>
    
                    <div class="mb-3">
                        <label class="mx-3" for="image">Image</label>
                        <input style="color:black"type="file" accept="image/png, image/jpeg" name="image" placeholder="Please enter image" required>
                    </div>
    
                    <div class="mb-3">
                        <label class="mx-3" for="description">Description</label>
                        <input style="color:black"type="text" name="description" placeholder="Please enter description" required>
                    </div>
    
    
                    <div class="mb-3">
                        <button class="btn btn-primary">
                            
                            <input style="color: black" type="submit" value="Save">
                        </button>
                    </div>
    
                </form>
            </div>

            <div>

                <table class="table table-bordered">
           
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Price(In Rupees)</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                  </tr>
                </thead>
                <tbody>
 
                    @foreach ($data as $data)
                    <tr>
                      <th scope="row">{{$data->title}}</th>
                      <td>{{$data->price}}</td>
                      <td>{{$data->description}}</td>
                      <td><img src="/foodimage/{{$data->image}}" alt="{{$data->title}} image"></td>
                      <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                      <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                    </tr>
                        
                    @endforeach
                </tbody>
              </table>

            </div>
        </div>

    </div>


    <!-- container-scroller -->
    @include("admin.adminscript")
  </body>
</html>