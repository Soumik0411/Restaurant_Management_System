<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    @include("admin.admincss")
   
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative;top:60px;right:-150px">

        <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-3">
                <label class="mx-3" for="title">Title</label>
                <input style="color:black"type="text" name="title" placeholder="Please enter title"  value="{{$data->title}}" required>
            </div>

            <div class="mb-3">
                <label class="mx-3" for="price">Price(In Rs.)</label>
                <input style="color:black"type="num" name="price" placeholder="Please enter price" value="{{$data->price}}" required>
            </div>

            

            <div class="mb-3">
                <label class="mx-3" for="description">Description</label>
                <input style="color:black"type="text" name="description" placeholder="Please enter description" value="{{$data->description}}" required>
            </div>

            <div class="mb-3">
                <label class="mx-3" for="image">Previouly uploaded Image</label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="previouly uploaded image">
            </div>

            <div class="mb-3">
                <label class="mx-3" for="image">Update Image</label>
                <input style="color:black"type="file" accept="image/png, image/jpeg" name="image" required>
            </div>


            <div class="mb-3">
                <button class="btn btn-primary">
                    
                    <input style="color: black" type="submit" value="Save">
                </button>
            </div>

        </form>
    </div>

    </div>


    <!-- container-scroller -->
    @include("admin.adminscript")
  </body>
</html>