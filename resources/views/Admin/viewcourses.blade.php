<!doctype html>
<html lang="en">

<head>
    <title>View Services</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<style>
        .back-css{

font-weight: bold;
font-size: 18px;
text-decoration: none;
background-color: lightblue;
border-radius: 30px;
border: 2px solid black;
}
</style>
<body>

    <div class="container mt-5">
        <a href="{{route('admin.sidebar')}}" class="back-css btn">Go Back</a>
        <h3 class="text-center fw-bold text-success mt-5">View Courses</h3>
        
        <table class="table mt-5">
            <thead class="table-dark">
              <tr >
                <th scope="col" hidden>#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
               
              </tr>
            </thead>
            <tbody>
          @foreach ($course as $users)
          <tr>
            <th hidden>{{$users->id}}</th>
            <td class=" py-3">{{$users->CourseTitle}}</td>
            <td class=" py-3">{{$users->Price}}</td>
            <td class=" py-3">{{$users->CourseDescription}}</td>
            <td>
                <img src="{{ asset('storage/' . $users->CourseImage) }}" alt="User Image" height="50" width="50">
            </td>
            
           <td>
            <div class="d-flex mx-auto">
                <a href="{{ route('admin.deletecourse',$users->id) }}" class="btn btn-danger me-5">Delete</a>

                <a href="{{route('admin.updatecourse',$users->id)}}" class="btn btn-success ">Update</a>
            </div>  
           </td>
          </tr>
          @endforeach
           
            </tbody>
          </table>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
