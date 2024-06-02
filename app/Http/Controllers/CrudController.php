<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\reviews;
use App\Models\services;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ServerBag;

class CrudController extends Controller
{
    //


    public function index(){

        $courses = courses::all();
        $services = services::all(); 
        $reviews=reviews::all();
        return view('FrontEnd.Index', ['courses' => $courses, 'services' => $services,'reviews'=>$reviews]);
     
        // return view('FrontEnd.Index');
    }
    



    public function sidebar(){
        return view("Admin.index");
    }

    // Services Data Insert 


    public function services()
    {
        return view("Admin.services");
    }

    // Service Add

    public function servicesstore(Request $request)
    {
        $store = $request->validate([
            "Title" => "required|string|max:255",
            "Image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
    
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imagePath = $image->store('images/services', 'public'); // store in 'public/images/services'
        }
    
        // Insert the data into the database
        $insert = new services(); // Assuming your model is `Service`
        $insert->Title = $store['Title'];
        $insert->Image = $imagePath; // Use the $imagePath
    
        $insert->save();
    
        return redirect()->route('admin.viewservices');
    }
    // End

    // Service View
public function viewservices()
{
    // return view ("Admin.viewservices");

    $service=services::all();
    return view ('Admin.viewservices',['service'=>$service]);
}
// End



// Services Delete

Public function delete($id){

services::destroy($id);


return redirect()->route('admin.viewservices');
    
}


// End

// Services Update

Public function update($id){
    
$data=services::find($id);
return view('Admin.updateservices', compact('data'));

}

public function updateservices(Request $request, $id) {
    
    $update = $request->validate([
        "Title" => "required|string|max:255",
        "Image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
    ]);

    $data = services::find($id);

    if (!$data) {
        return redirect()->route('admin.viewservices')->with('error', 'Service not found.');
    }


    if ($request->hasFile('Image')) {
        $image = $request->file('Image');
        $imagePath = $image->store('images/services', 'public');
        $data->Image = $imagePath;
    }

    // Update the title
    $data->Title = $update['Title'];

 
    $data->save();

    return redirect()->route('admin.viewservices');
}


// End



// Courses 

// View Add Course Page
public function courses(){
    return view("Admin.courses");
}
// End


// Insert Course

public function storecourses(Request $request) {
    $courses = $request->validate([
        'CourseImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'CourseTitle' => 'required',
        'Price' => 'required',
        'CourseDescription' => 'required',
    ]);

    if ($request->hasFile('CourseImage')) {
        $image = $request->file('CourseImage');
        $imagePath = $image->store('images/courses', 'public'); // store in 'public/images/services'
    }

    $insert = new courses(); // Assuming your model is `Course`
    $insert->CourseImage = $imagePath;
    $insert->CourseTitle = $courses['CourseTitle'];
    $insert->Price = $courses['Price'];
    $insert->CourseDescription = $courses['CourseDescription'];

    $insert->save();

    return redirect()->route('admin.viewcourses');
}
// End

// View Course

public function viewcourses(){

    $course=courses::all();
    return view('Admin.viewcourses',['course'=>$course]);
}

// End


// Delete Course

public function deletecourse($id){

courses::destroy($id);

return redirect()->route('admin.viewcourses');
}

// End



// Update Course 
public function updatecourse($id){
    $data=courses::find($id);
    return view('Admin.updatecourse', compact('data'));
}

 public function coursestore(Request $request, $id){
    
$update=$request->validate([
    'CourseImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    'CourseTitle' => 'required',
    'Price' => 'required',
    'CourseDescription' => 'required',
]);


$insert = courses::find($id);

if (!$insert) {
    return redirect()->route('admin.viewservices')->with('error', 'Service not found.');
}


if ($request->hasFile('CourseImage')) {
    $image = $request->file('CourseImage');
    $imagePath = $image->store('images/courses', 'public');
    $insert->CourseImage = $imagePath;
}

$insert->CourseTitle = $update['CourseTitle'];
    $insert->Price = $update['Price'];
    $insert->CourseDescription = $update['CourseDescription'];

    $insert->save();

    return redirect()->route('admin.viewcourses');


}

// End


// View Reviews Add Page

public function review(){
    return view('Admin.review');
}

// End


// Review Insert 
public function reviewstore(Request $request) {


    $reviews = $request->validate([
        'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Review' => 'required',
       
    ]);

    if ($request->hasFile('Image')) {
        $image = $request->file('Image');
        $imagePath = $image->store('images/reviews', 'public'); // store in 'public/images/services'
    }

    $insert = new reviews(); // Assuming your model is `Course`
    $insert->Image = $imagePath;
    $insert->Review = $reviews['Review'];


    $insert->save();

    return redirect()->route('admin.viewreviews');

}
// End


// View Reviews 

public function viewreviews(){


    $reviews=reviews::all();
    return view('Admin.viewreviews',['reviews'=>$reviews]);

}
// End

// Review Delete

public function deletereviews($id){

reviews::destroy($id);

return redirect()->route('admin.viewreviews');
    
}

// Update review page 

public function updatereviews($id){
    $data=reviews::find($id);
    return view('Admin.updatereviews', compact('data'));
}


public function updatereviewstore(Request $request, $id){

$store=$request->validate([

    'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    'Review' => 'required',

]);

$insert = reviews::find($id);

if($request->hasfile('Image')){
    
    $Image=$request->file('Image');
    $ImagePath=$Image->store('images/reviews','public');
    $insert->Image=$ImagePath;
}

$insert->Review=$store['Review'];

$insert->save();

return redirect()->route('admin.viewreviews');


}


}