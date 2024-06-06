<?php
    
    Route::get('/', 'IndexController@showIndex');	
    Route::get('/chat','ChatController@showChat');
    Route::get('/SingIn', 'LogInController@showLoginForm');
    Route::post('/login','LogInController@login');
    Route::get('/logout', 'LogInController@logout');

    Route::dispatch();

?>
