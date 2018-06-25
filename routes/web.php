<?php

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

//首页路由
Route::get('/', 'Index@show');

Route::get('/login', function () {
    return view('welcome');
});

//患者路由组
Route::group([
    'prefix' => 'patient',
    'namespace' => 'Patient'
], function (){

    /*
     * 总体投放效果
     */

    //页面处理路由
//    Route::get('/information/{action}', 'Information@process');
    //数据处理路由
    Route::post('/information/{action}', 'Information@process');

    /*
     * 插件投放效果
     */
    //页面处理路由
    Route::get('/bucket_contrast_effect', 'BucketContrastEffect@show');
    //数据处理路由
    Route::post('/bucket_contrast_effect/{action}', 'BucketContrastEffect@process');

//        Route::get('/bucket_effect', 'BucketEffect@show');
//
//        Route::get('/bucket_distribute', 'BucketDistribute@show');

    /*
     * 多目标优化
     */
    Route::get('/multi_objective_effect', 'MultiObjectiveEffect@show');
});