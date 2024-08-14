<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectCatController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\Admin\CmsController;
use App\Models\Contact;
use App\Models\Banner;
use App\Models\Projects;
use App\Models\Testimonial;
use App\Models\Blog;



Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('about-us', [HomeController::class, 'about'])->name('about');
Route::get('contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('property', [HomeController::class, 'property'])->name('property');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('property-details/{slug}', [HomeController::class, 'property_details'])->name('property_details');
Route::POST('contact-store', [HomeController::class, 'contactStore'])->name('contact.store');

Route::get('/dashboard', function () {
    $TotalProjects = Projects::count();
    $contacts = Contact::orderby('id','desc')->take(5)->get();
    $Testimonials = Testimonial::count();
    $totalContact = Contact::count();
    $TotalBlogs = Blog::count();
    return view('dashboard',compact('contacts','TotalProjects','Testimonials','TotalBlogs','totalContact'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('categories',ProjectCatController::class);
    Route::get('categories-delete/{id}',[ProjectCatController::class,'destroy'])->name('categories.delete');

    Route::resource('projects',ProjectController::class);
    Route::get('projects-delete/{id}',[ProjectController::class,'destroy'])->name('projects.delete');

    Route::resource('testimonials',TestimonialController::class);
    Route::get('testimonial-delete/{id}',[TestimonialController::class,'destroy'])->name('testimonials.delete');

    Route::resource('partners',PartnerController::class);
    Route::get('partners-delete/{id}',[PartnerController::class,'destroy'])->name('partners.delete');
    Route::get('partners-create',[PartnerController::class,'create'])->name('partners.create');
    Route::POST('partners-store',[PartnerController::class,'store'])->name('partners.store');
    Route::get('partners-edit/{id}',[PartnerController::class,'edit'])->name('partners.edit');
    Route::PUT('partners-update{id}',[PartnerController::class,'update'])->name('partners.update');

    Route::resource('banners',BannerController::class);
    Route::get('banners-delete/{id}',[BannerController::class,'destroy'])->name('banners.delete');
    Route::get('banners-status/{id}',[BannerController::class,'statusChange'])->name('banners.status');

    Route::resource('blogs',BlogController::class);
    Route::get('blogs',[BlogController::class,'blogs'])->name('blogs.index');
    Route::get('blogs-delete/{id}',[BlogController::class,'destroy'])->name('blogs.delete');
    Route::get('blogs-status/{id}',[BlogController::class,'statusChange'])->name('blogs.status');

    Route::get('contacts',[CmsController::class,'contacts'])->name('contacts');
    Route::get('contact-delete/{id}',[CmsController::class,'contactDelete'])->name('contact.delete');
   
    Route::resource('cms',CmsController::class);


}); 






require __DIR__.'/auth.php';
