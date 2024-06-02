<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Courses</title>
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
        <h3 class="text-center fw-bold text-success mt-5">Update Courses</h3>
        <form action="{{ route('admin.coursestore',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="form-group">
                        <label for="Image" class="services-label">Updated Image</label>
                        <input type="file" name="CourseImage" id="Image" class="form-control services-file" required>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="form-group">
                        <label for="Title" class="services-label">Update Title</label>
                        <input type="text"  name="CourseTitle" class="form-control services-file" required value="{{$data->CourseTitle}}">
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="form-group">
                        <label for="Title" class="services-label">Updated Price</label>
                        <input type="text" name="Price" class="form-control services-file" required
                        value="{{$data->Price}}">
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="" class="services-label">Updated Description</label>
                    <textarea name="CourseDescription" class="form-control" id="" cols="30" rows="5" >{{$data->CourseDescription}}</textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-info mt-3">Update Course</button>
            </div>   
        </form>
    </div>
</body>
</html>
