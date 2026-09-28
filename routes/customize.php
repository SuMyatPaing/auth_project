<?php
use Illuminate\Support\Facades\Route;
Route::get('customize/register',function(){
  return view('customize.register');
});

Route::get('customize/login',function(){
  return view('customize.login');
});




//admin

Route::middleware('admin')->group(function(){
    Route::prefix('customize')->group(function(){
          Route::get('admin',function(){
  return view('customize.admin');
})->name('adminPage');

    Route::get('adminList',function(){
  return 'Admin list page';
})->name('adminList');
   });
});



// Route::get('customize/admin',function(){
//   return view('customize.admin');
// })->name('adminPage')->middleware('admin');

// Route::get('customize/adminList',function(){
//   return 'Admin list page';
// })->name('adminList')->middleware('admin');


//user
Route::group(['prefix' => 'customize' , 'middleware' => ['user']],function(){
    Route::get('user',function(){
  return view('customize.user');
})->name('userPage');

    Route::get('userList',function(){
  return 'User list page';
})->name('userList');
});

