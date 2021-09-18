<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  
Route::group(['middleware' => ['auth']], function() {
  
   /***GOOGLE DRIVEEEE */
   
   /*** GOOGLE DRIVE */
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    
    Route::get('/editer', [App\Http\Controllers\UserController::class, 'editer'])->name('users.editer');
    
    Route::get('utilisateurs', [App\Http\Controllers\HomeController::class, 'users'])->name('utilisateurs');
    Route::get('utilisateurs/{id}', [App\Http\Controllers\HomeController::class, 'user'])->name('utilisateurs.view');
    /*Route::post('folow', [App\Http\Controllers\HomeController::class, 'follwUserRequest'])->name('folow');*/
  
    Route::post('updateProfile/{id}', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('user.updateprofile');
    Route::post('addsignature', [App\Http\Controllers\UserController::class, 'addSignature'])->name('user.signature');
    
   
    // FOLLOWS __NOTIFICATION   addSignature
    Route::get('myusers', [App\Http\Controllers\UserController::class, 'index'])->name('myusers');
    
    



    Route::get('/account/{user:pseudo}', [App\Http\Controllers\UserController::class, 'account'])->name('user.account');//->middleware('verified');
    
    Route::get('/editUtil', [App\Http\Controllers\UserController::class, 'editUtil'])->name('editUtil');

   

     /*Route::get('/parametres', [App\Http\Controllers\UserController::class, 'parametres'])->name('parametres');
     Route::get('/aide', [App\Http\Controllers\UserController::class, 'aide'])->name('aide');*/
    Route::get('/postesFav/{user:pseudo}', [App\Http\Controllers\UserController::class, 'favoritepost'])->name('favorites');
    Route::get('/historique/{user:pseudo}', [App\Http\Controllers\UserController::class, 'historique'])->name('historique');
   
   /*
    Route::put('/savepost/{id}', [App\Http\Controllers\UserController::class, 'savePost'])->name('user.savePost');
    Route::get('/deletepost/{id}', [App\Http\Controllers\UserController::class, 'deletepost'])->name('user.deletepost');

    Route::post('save-likedislike',[App\Http\Controllers\PostController::class, 'save_likedislike'])->name('post.likeDislike');

    
    Route::get('/article/{post:slug}', [App\Http\Controllers\UserController::class, 'onepostshow'])->name('post.show');
    Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.add');
    Route::post('/reply/store', [App\Http\Controllers\CommentController::class, 'replyStore'])->name('reply.add');*/

    //FILES ROUTES
    /*Route::get('/filesIndex/{id}', [App\Http\Controllers\UserController::class, 'filesIndex'])->name('file.index');
    Route::put('/savefile/{id}', [App\Http\Controllers\UserController::class, 'saveFile'])->name('file.saveFile');
    Route::get('/voirfile/{id}', [App\Http\Controllers\UserController::class, 'voirfile'])->name('voirfile.index');
    Route::get('/deletefile/{id}', [App\Http\Controllers\UserController::class, 'deletefile'])->name('file.deletefile');*/
    
  





Route::get('/generatepdf', [App\Http\Controllers\FichepaieController::class, 'sendBulkMail'])->name('generatepdf');



    //EXCEL BULLETIN DE PAIES
Route::get('importExportView', [App\Http\Controllers\ExcelController::class, 'importExportView'])->name('importExportView');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('exportExcel/{type}', [App\Http\Controllers\ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [App\Http\Controllers\ExcelController::class, 'importExcel'])->name('importExcel');
#Route::get('/visualiser/{id}', [App\Http\Controllers\FichepaieController::class, 'visualiser'])->name('voir');
Route::get('email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('email');
Route::get('/voir/{id}', [App\Http\Controllers\FichepaieController::class, 'visualiser'])->name('voir');

});
