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

.reviews-css{
    justify-content: center;
    width: 500px;
}
</style>
<body>

    <div class="container mt-5">
        <a href="{{route('admin.sidebar')}}" class="back-css btn">Go Back</a>
        <h3 class="text-center fw-bold text-success mt-5">View Reviews</h3>
        
        <table class="table mt-5">
            <thead class="table-dark">
              <tr >
                <th scope="col" hidden>#</th>
                <th scope="col">Client Reviews</th>
                <th scope="col">Client Image</th>
                <th scope="col">Action</th>
               
              </tr>
            </thead>
            <tbody>
          @foreach ($reviews as $data)
          <tr>
            <th hidden>{{$data->id}}</th>
            <td class="py-5 reviews-css ">{{$data->Review}}</td>
            <td>
                <img src="{{ asset('storage/' . $data->Image) }}"  alt="User Image" height="100" width="100">
            </td>
            
           <td>
            <div class="d-flex mx-auto">
                <a href="{{ route('admin.deletereviews', $data->id) }}" class="btn btn-danger mt-5 me-5">Delete</a>

                <a href="{{ route('admin.updatereviews', $data->id) }}" class="btn btn-success mt-5 ">Update</a>
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
