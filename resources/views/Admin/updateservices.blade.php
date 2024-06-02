<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Services</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    .services-label{
        font-weight: bold;
    }
    .services-file{
        height: 3rem;
    }
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
        <h3 class="text-center fw-bold text-success mt-5">Update Services</h3>
        <form action="{{URL('updateservices',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
     <div class="row">
     <div class="col-lg-6 mt-5">
        <div class="form-group">
            <label for="Title" class="services-label">Title</label>
            <input type="text" name="Title" class="form-control services-file" value="{{$data->Title}}" required>
        </div>
     </div>
     <div class="col-lg-6 mt-5">
        <div class="form-group">
            <label for="Image" class="services-label">Choose New Image to Update</label>
            <input type="file" name="Image" id="Image" class="form-control services-file"  required>
        </div>
     </div>
     </div>
           <div class="text-center">
            <button type="submit" class="btn btn-info">Update Service</button>
           </div>   
        </form>
    </div>


    </form>
</div>





</body>
</html>