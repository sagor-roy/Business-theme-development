<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\HeadingController;
use App\Http\Controllers\backend\HomePageController;
use App\Http\Controllers\frontend\ContactController;

// Auth
Auth::routes();
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('logout', function (){
    return redirect()->back();
});
// End Auth

//Frontend Route
Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/price',[FrontendController::class,'price'])->name('price');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::post('/contact-message',[ContactController::class,'store'])->name('store');
// Product Detail
Route::get('/product/detail/{slug}',[FrontendController::class,'proDetail'])->name('proDetail');

// Backend Route
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    // AdiminProfile
    Route::get('/profile',[BackendController::class,'admin'])->name('profile');
    // BackendController
    Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');
    Route::get('/head',[BackendController::class,'head'])->name('head');
    Route::get('/home-page',[BackendController::class,'home'])->name('home');
    // HeadingController
    Route::post('/logo-update',[HeadingController::class,'logoUpdate'])->name('logoUpdate');
    Route::post('/social-update',[HeadingController::class,'socialUpdate'])->name('socialUpdate');
    Route::post('/address-update',[HeadingController::class,'addressUpdate'])->name('addressUpdate');
    Route::post('/copyRight-update',[HeadingController::class,'copyRight'])->name('copyRight');
    // HomePageController
    Route::post('/choose',[HomePageController::class,'choose']);
    Route::post('/offer',[HomePageController::class,'offer']);
    Route::post('/product',[HomePageController::class,'product']);
    Route::post('/staff',[HomePageController::class,'staff']);
    Route::post('/work',[HomePageController::class,'work']);
    Route::post('/client',[HomePageController::class,'client']);
    Route::post('/center-img',[HomePageController::class,'centerImg']);
    Route::post('/feedback',[HomePageController::class,'feedback']);
    Route::post('/partner',[HomePageController::class,'partner']);
    Route::post('/blog-section',[HomePageController::class,'blogSection']);
    Route::post('/click',[HomePageController::class,'click']);
    // HomeSection
    Route::post('/home-img',[HomePageController::class,'homeImg'])->name('homeImg');
    Route::post('/choose-head',[HomePageController::class,'chooseHead'])->name('chooseHead');
    Route::get('/choose-update/{id}',[BackendController::class,'chooseUpdate'])->name('chooseUpdate');
    Route::post('/choose-update/{id}',[HomePageController::class,'chooseEdit'])->name('chooseEdit');
    Route::post('/offer-update',[HomePageController::class,'offerUpdate'])->name('offerUpdate');
    Route::post('/offer-edit/{id}',[HomePageController::class,'offerEdit'])->name('offerEdit');
    // OfferSection
    Route::get('/content-1/{id}',[BackendController::class,'icon1'])->name('icon1');
    // ProductSection
    Route::post('/product-head',[HomePageController::class,'proHead'])->name('proHead');
    Route::post('/product-store',[HomePageController::class,'proStore'])->name('proStore');
    Route::get('/product-delete/{id}',[HomePageController::class,'proDelete'])->name('proDelete');
    Route::get('/product-edit/{id}',[BackendController::class,'proEdit'])->name('proEdit');
    Route::post('/product-update/{id}',[HomePageController::class,'proUpdate'])->name('proUpdate');
    // StaffSection
    Route::post('/staff-head',[HomePageController::class,'staffHead'])->name('staffHead');
    Route::post('/staff-store',[HomePageController::class,'staffStore'])->name('staffStore');
    Route::get('/staff/edit/{id}',[BackendController::class,'staffEdit'])->name('staffEdit');
    // HowItWorkSection
    Route::post('work-head',[HomePageController::class,'workHead'])->name('workHead');
    Route::get('work/edit/{id}',[BackendController::class,'workEdit'])->name('workEdit');
    Route::post('work/update/{id}',[HomePageController::class,'workUpdate'])->name('workUpdate');
    // ClientCommentSection
    Route::post('client/comment/store',[HomePageController::class,'commentStore'])->name('commentStore');
    Route::get('comment/delete/{id}',[HomePageController::class,'commentDelete'])->name('commentDelete');
    // CentralImageSection
    Route::post('central-img/update',[HomePageController::class,'centralImg'])->name('centralImg');
    // FeedbackSection
    Route::post('feedback-head',[HomePageController::class,'feedHead'])->name('feedHead');
    // PartnerSection
    Route::post('partner-head',[HomePageController::class,'partnerHead'])->name('partnerHead');
    Route::post('partner-store',[HomePageController::class,'partnerStore'])->name('partnerStore');
    Route::get('partner-delete/{id}',[HomePageController::class,'partnerDelete'])->name('partnerDelete');
    // ContactPage
    Route::get('/contact/detail-information/{id}',[BackendController::class,'conMessage'])->name('contactMessage');

});

