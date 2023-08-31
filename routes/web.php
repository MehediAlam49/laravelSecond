<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\testingController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/startBlade', function () {
    return view('startBlade');
});

Route::get('/post/firstPost', function () {
    return view('firstPost');
});

// <--------Route Parameter & contraints start------------>
// Route Parameter
Route::get('/test/{id?}', function (string $id = null,) {
    if ($id) {
        return "<h1>Post Id: " . $id . "</h1>";
    } else {
        return "<h1>Post Id Not Found</h1>";
    }
});
// Route multiple Parameter
Route::get('/test/{id?}/comment/{commentId?}', function (string $id = null, string $comment = null) {
    if ($id) {
        return "<h1>Post Id: " . $id . "</h1> <h2>Comment Id: " . $comment . "</h2>";
    } else {
        return "<h1>Post Id Not Found</h1>";
    }
});

// Route contraints -> only for user Number value input
Route::get('/test1/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post Id: " . $id . "</h1>";
    } else {
        return "<h1>Post Id Not Found</h1>";
    }
})->whereNumber('id');

// Route contraints -> only for user Alphabetic value input
Route::get('/test2/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post Id: " . $id . "</h1>";
    } else {
        return "<h1>Post Id Not Found</h1>";
    }
})->whereAlpha('id');

// Route contraints -> only for user Alphabetic & Numeric value input
Route::get('/test3/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post Id: " . $id . "</h1>";
    } else {
        return "<h1>Post Id Not Found</h1>";
    }
})->whereAlphaNumeric('id');

// Route contraints -> only for user specific value input
Route::get('/test4/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post Id: " . $id . "</h1>";
    } else {
        return "<h1>Post Id Not Found</h1>";
    }
})->whereIn('id', ['song', 'movie']);

// Route contraints -> only for user Regular expretion value input
Route::get('/test5/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post Id: " . $id . "</h1>";
    } else {
        return "<h1>Post Id Not Found</h1>";
    }
})->where('id', '[0-9, a-zA-Z]+');

// Route contraints -> only for user multiple parameter & Regular expretion value input
Route::get('/test6/{id?}/comment/{commentId}', function (string $id, string $comment) {
    if ($id) {
        return "<h1>Post Id: " . $id . " & Comment Id: " . $comment . "</h1>";
    } else {
        return "<h1>Post Id Not Found</h1>";
    }
})->where('id', '[0-9]+')->where('comment', '[a-zA-Z]');

// <--------Route Parameter & contraints End------------>


// <--------Route Named Route & Routes Group Start------------>
// Name Route
Route::get('/about-us', function () {
    return view('about');
})->name('about');
Route::get('/redirected-page', function () {
    return view('post');
})->name('post');

// Route redirect
Route::redirect('/post', '/redirected-page', 301);

// Route group
Route::prefix('group')->group(function () {
    Route::get('/gallery', function () {
        return view('group/gallery');
    });
    Route::get('/status', function () {
        return view('group/status');
    });
});


// <--------Route Named Route & Routes Group End------------>



// <--------Blade template inheritance route Start------------>
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/contact', function () {
    return view('contact');
})->name('contact-us');
// <--------Blade template inheritance route End------------>


// <--------Blade template PHP in JS Start------------>
Route::get('/jsTest', function () {
    return view('jsTest');
});
// <--------Blade template PHP in JS End------------>



// <--------Data pass Route to view Start------------>
function getUser()
{
    return [
        1 => ['name' => 'Mehedi Alam', 'phone' => '01772050842', 'city' => 'Dhaka'],
        2 => ['name' => 'Saiful Alam', 'phone' => '01552050842', 'city' => 'Rajshahi'],
        3 => ['name' => 'Aowlad Hossain', 'phone' => '01992050842', 'city' => 'Sylet'],
        4 => ['name' => 'Yeadul Hossain', 'phone' => '01882050842', 'city' => 'Chittagong'],
    ];
}
Route::get('/users', function () {
    // $name = "Mehedi Alam";
    // return view('users', ['user' => $name, 'city' => "Dhaka"]);
    // return view('users')->with('user', $name)->with('city', 'Dhaka');
    // return view('users')->withUser($name)->withCity('Dhaka');

    $names = getUser();
    return view('users', ['user' => $names]);
});



Route::get('/user/{id}', function ($id) {
    $users = getUser();
    $user = $users[$id];
    return view('user', ['id' => $user]);
})->name('view.user');
// <--------Data pass Route to view End------------>


// <--------Controller Start------------>
// Route::get('/homeController', [pageController::class, 'showHome'])->name('homeController');
// Route::get('/blogController', [pageController::class, 'showBlog'])->name('blogController');
// Route::get('/userController/{id}', [pageController::class, 'showUser'])->name('userController');

// group controller
Route::controller(pageController::class)->group(function () {
    Route::get('/homeController', 'showHome')->name('homeController');
    Route::get('/blogController', 'showBlog')->name('blogController');
    Route::get('/userController/{id}', 'showUser')->name('userController');
});

// Single action controller--invokable
Route::get('/testing', testingController::class);
// <--------Controller End------------>






// Route fallback
// Route::fallback(function(){
//     return "<h1>Page Not Found.</h1>";
// });
