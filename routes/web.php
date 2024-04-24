<?php
use App\Http\Controllers\auth\category;
use App\Http\Controllers\auth\categorycontroller;
use App\Http\Controllers\auth\dashboardcontroller;
use App\Http\Controllers\auth\pcontroller;
use App\Http\Controllers\auth\postcontroller;
use App\Http\Controllers\auth\tagcontroller;
use App\Http\Controllers\posts;
use App\Http\Controllers\site\blogcontroller;
use App\Http\Controllers\site\commentcontroller;
use App\Http\Controllers\site\commnetscontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Commentscontroller;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\Reseachpaper;
use App\Models\post;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |  
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */
    Route::get('/', function () {
        return view('welcome');  
    });
    Route::get('test', function () {
        return view('site.check'); 
    });
    Auth::routes();
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    route::get('dash',[dashboardcontroller::class,'dashboard'])->name('dashboard');
    route::get('home',[dashboardcontroller::class,'dashboard'])->name('dashboard')->middleware('auth');

    Route::get('blog', function () {
        return view('auth.dashboard');
    });
    Route::get('/lo', function () {
        auth()->logout();
        // return view('welcome');
    });

    // route::resource('auth/posts/create',postscontroller::class);
    // route::get('index',[post::class,'index']);

    // route::get('store',[postscontroller::class,'store']);
    // route::resource('test',postscontroller::class);


    // route::get('show',function(){
    // return view('auth.posts.show');
    // });

    // route::get('view', function () {

    // });

    // route::get('dev',[postscontroller::class,'store']);
// new seesion started
    
    route::get('post',[pcontroller::class,'index']);
    route::get('store',[pcontroller::class,'store']);

   route::get('create',[pcontroller::class,'create'])->middleware('auth');
   route::get('edit/{id}',[pcontroller::class,'edit']);
//    route::get('update/{id}',[pcontroller::class,'update']);
   Route::post('update/{id}', [PController::class, 'update'])->name('update');
   route::get('delete/{id}',[pcontroller::class,'destroy']);
   route::get('show/{id}',[pcontroller::class,'show']);
route::get('form',function () {
return view('auth.posts.form');
});
  
route::get('category',[categorycontroller::class,'index']);
route::get('tag',[tagcontroller::class,'index']);
Route::post('sthore', 'App\Http\Controllers\auth\pcontroller@store')->name('store');


// route::get('/',function () {
//     return view('site.index');
//     });
// route::get('/',[blogcontroller::class,'index']);



Route::post('/blogs/{id}/comments', [CommentController::class, 'comment'])->name('comment');
Route::get('comments/{id}', [commnetscontroller::class, 'comment'])->middleware('auth');


route::post('comment/reply{commnetId}',[commentcontroller::class,'postcommnet'])->name('post.commnet');

route::get('contact',[blogcontroller::class,'contact']);
route::get('service',[blogcontroller::class,'service']);
route::get('loginuser',[blogcontroller::class,'loginuser']);
route::get('sign',[blogcontroller::class,'sign']);


// User controller 
route::get('showuser',[Usercontroller::class,'index']);
route::get('deleteuser/{id}',[Usercontroller::class,'destroy']);



// site controller 

route::get('blog',[SiteController::class,'index'])->name('blog');


// Route::get('reseach',function(){
// return view('site\reseach');
// });
 route::get('sitenew',[SiteController::class,'newindex'])->name('newindex');
 route::get('authlogout',[SiteController::class,'authlogout'])->name('authlogout');
 route::get('reseach',[Reseachpaper::class,'siteallshow'])->name('reseach');

 Route::get('navbar',function(){
    return view('site\navbar');
    });

    Route::get('siteblog',function(){
       return view('site\site');  
       
        });    
        
    // Route::get('',function(){
    //     return view('Reseach\create');
    //      });
         route::get('createResarch',[Reseachpaper::class,'create'])->name('createResarch')->middleware('auth');
         route::post('reseach_paper_store',[Reseachpaper::class,'store'])->name('reseach_paper_store');
         route::get('show_reseach_paper',[Reseachpaper::class,'allshow'])->name('show_reseach_paper')->middleware('auth');
         route::get('destroy_reseach_paper/{id}',[Reseachpaper::class,'destroy'])->name('destroy_reseach_paper');
         route::get('edit_reseach_paper/{id}',[Reseachpaper::class,'edit'])->name('edit_reseach_paper');
         route::post('update_reseach_paper/{id}',[Reseachpaper::class,'update'])->name('update_reseach_paper');
         route::get('view_reseach_paper/{id}',[Reseachpaper::class,'show'])->name('view_reseach_paper');
        //  Route::get('singleblogs',function(){
        //     return view('site\singlepost');
        //      });
        
       route::get('single/{id}',[blogcontroller::class,'openSingleBlog'])->name('single')->middleware('auth');
              
              Route::get('about',function(){
          return view('site.about');
              });

        

        Route::post('commentssee/{id}', [CommentsController::class, 'indexshow'])->name('commentssee');
        Route::get('showallcomments', [CommentsController::class, 'showallcomments'])->name('showallcomments');
        Route::get('show123/{id}', [CommentsController::class, 'show123'])->name('show123');

        // reactions
        Route::post('like/{id}',[ReactionController::class,'like'])->name('like')->middleware('auth');
        Route::post('dislike/{id}',[ReactionController::class,'dislike'])->name('dislike')->middleware('auth');
        Route::get('showallreaction',[ReactionController::class,'showallreaction'])->name('showallreaction');

        Route::get('useradmin',function(){
          return view('layouts\about');
                });   
                