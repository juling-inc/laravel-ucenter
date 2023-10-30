<?php

Route::any(config('ucenter.url').'/api/'.config('ucenter.apifilename'), '\Juling\Ucenter\Controllers\ApiController@run');
