<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>show</title>
  </head>
  <body>


    <div class="container">
      
      <div class="row">
        <div class="col-sm-10">
          <h1 class="text-danger text-center">Personal information</h1>

          @if(Session::has('del'))
          
         {!! Session::get('del')!!}

          @endif


          <h1></h1>






    <table class="table table-success table-bordered table-striped table-hover">


      <tr>
        
        
          <td>Id</td>
          <td>Name</td>
          <td>Email</td>
          <td>Class</td>
          <td>Image</td>
          <td class="bg-dar">Action</td>
          <td class="text-primary"><a href="{{route('registerform')}}">register</a></td>
          <td class="text-danger"><a href="{{route('registerform2')}}">register2</a></td>
          

        
      </tr>

      @foreach($show as $data)

      <tr>
        
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->class}}</td>

        <td><img src="{{URL::to($data->image)}}"></td>

        <td class="bg-dark">
          
        <a class="text-primary" href="{{route('view',$data->id)}}">View</a>
        
        <a class="text-danger" href="{{route('edit',$data->id)}}">Update</a>


        <a href="{{route('delete',$data->id)}}">Delete</a>


        </td>



      </tr>


      @endforeach



      

   
    </table>

     {{$show->links()}}

        </div>
      </div>
    </div>

    





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>