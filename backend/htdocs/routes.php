<?php

    Route::post('/login','LogInController@login');
    Route::get('/logout', 'LogInController@logout');

    Route::dispatch();

?>
