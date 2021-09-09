<?php
Route::get('/','UserController@index')->name('user');
Route::post('/login','UserAuthenticationController@login')->name('post-login');
Route::post('/register','UserAuthenticationController@register')->name('post-register');
Route::post('/doctor/login','UserAuthenticationController@doctorLogin')->name('post-doctor-login');
Route::post('/doctor/register','UserAuthenticationController@doctorRegister')->name('post-doctor-register');
Route::post('/tester/login','UserAuthenticationController@testerLogin')->name('post-tester-login');
Route::post('/tester/register','UserAuthenticationController@testerRegister')->name('post-tester-register');



// home routes
Route::post('/ecg','HomeController@postEcg')->name('post-ecg');
Route::post('/ecg/update','HomeController@updateEcg')->name('update-ecg');
Route::post('/ecg/delete','HomeController@deleteEcg')->name('ecg-delete');
Route::post('/ecg/training','HomeController@postEcgTraining')->name('post-ecg-training');
Route::post('/ecg/training/delete','HomeController@deleteEcgTraining')->name('post-ecg-training-delete');


Route::post('/bloodpressure','HomeController@postBloodPressure')->name('post-bp');
Route::post('/bloodpressure/update','HomeController@updateBloodPressure')->name('post-bp-update');
Route::post('/bloodpressure/delete','HomeController@deleteBloodPressure')->name('post-bp-delte');
Route::post('/bloodpressure/training','HomeController@postBloodPressureTraining')->name('post-bp-training');
Route::post('/bloodpressure/training/delete','HomeController@deleteBloodPressureTraining')->name('post-bp-training-delete');

Route::post('/temperature','HomeController@postTemperature')->name('post-temperature');
Route::post('/temperature/update','HomeController@updateTemperature')->name('post-temperature-update');
Route::post('/temperature/delete','HomeController@deleteTemperature')->name('post-temperature-delete');
Route::post('/temperature/training','HomeController@postTemperatureTraining')->name('post-temperature-training');
Route::post('/temperature/training/delete','HomeController@deleteTemperatureTraining')->name('post-temperature-training-delete');

Route::post('/oxyzensaturation','HomeController@postOxyzenSaturation')->name('post-oxyzen-saturation');
Route::post('/oxyzensaturation/update','HomeController@updateOxyzenSaturation')->name('post-oxyzen-saturation-update');
Route::post('/oxyzensaturation/delete','HomeController@deleteOxyzenSaturation')->name('post-oxyzen-saturation-delete');
Route::post('/oxyzensaturation/training','HomeController@postOxyzenSaturationTraining')->name('post-oxyzen-saturation-training');
Route::post('/oxyzensaturation/training/delete','HomeController@deleteOxyzenSaturationTraining')->name('post-post-oxyzen-saturation-training-delete');

Route::post('/sugar','HomeController@postSugar')->name('post-sugar');
Route::post('/sugar/update','HomeController@updateSugar')->name('post-sugar-update');
Route::post('/sugar/delete','HomeController@deleteSugar')->name('post-sugar-delete');
Route::post('/sugar/training','HomeController@postSugarTraining')->name('post-');
Route::post('/sugar/training/delete','HomeController@deleteSugarTraining')->name('post-sugar-training-delete');
// homr routes end
