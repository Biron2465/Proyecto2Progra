<?php

    Route::post('/login','LogInController@login');
    Route::post('/register','LogInController@register');
    Route::get('/logout', 'LogInController@logout');

    Route::dispatch();

?>
