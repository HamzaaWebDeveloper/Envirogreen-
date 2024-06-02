<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;



Route::get('/',[CrudController::class,'index']);
 Route::get('sidebar',[CrudController::class,'sidebar'])->name('admin.sidebar');
 Route::get('services', [CrudController::class, 'services'])->name('admin.addservices');
 Route::post('servicesstore', [CrudController::class, 'servicesstore'])->name('admin.servicesstore');
Route::get('viewservices',[CrudController::class,'viewservices'])->name('admin.viewservices');
Route::get('delete/{id}', [CrudController::class, 'delete'])->name('admin.delete');
Route::get('update/{id}', [CrudController::class, 'update'])->name('admin.update');
Route::post('updateservices/{id}',[CrudController::class,'updateservices'])->name('admin.updateservices');
Route::get('courses',[CrudController::class,'courses'])->name('admin.addcourses');
Route::post('storecourses', [CrudController::class,'storecourses'])->name('admin.storecourses');
Route::get('viewcourses',[CrudController::class,'viewcourses'])->name('admin.viewcourses');
Route::get('updatecourse/{id}',[CrudController::class,'updatecourse'])->name('admin.updatecourse');
Route::post('coursestore/{id}', [CrudController::class, 'coursestore'])->name('admin.coursestore');
Route::get('deletecourse/{id}',[CrudController::class,'deletecourse'])->name('admin.deletecourse');
Route::get('review',[CrudController::class,'review'])->name('admin.reviews');
Route::post('reviewstore',[CrudController::class,'reviewstore'])->name('admin.reviewstore');
Route::get('viewreviews',[CrudController::class,'viewreviews'])->name('admin.viewreviews');
Route::get('deletereviews/{id}',[CrudController::class,'deletereviews'])->name('admin.deletereviews');
Route::get('updatereviews/{id}',[CrudController::class,'updatereviews'])->name('admin.updatereviews');
Route::post('updatereviewstore/{id}',[CrudController::class,'updatereviewstore'])->name('admin.updatereviewstore');


