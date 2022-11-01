<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\apperController;

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


Route::get('/index', [PromotionsController::class, 'select_promotion']);

Route::get('/', [PromotionsController::class, 'select_promotion']);

Route::get('/promotionAddPage', function(){
    return view('index');
});

Route::get('promotionAddPage', function(){
    return view('promotionAddPage');
});

Route::get('addPromotion', [PromotionsController::class, 'addPromotion']);

Route::get('apperAddPage/{currentPromotionId}/{currentPromotionName}', [PromotionsController::class, 'get_promotion_id']);

Route::get('addApper', [apperController::class, 'addApper']);

Route::get('editPromotionPage/{currentPromotionId}', [PromotionsController::class, 'editPromotion']);

Route::put('updatePromotion/{id}', [PromotionsController::class, 'updatePromotion']);

Route::get('deletePromotion/{id}', [PromotionsController::class, 'deletePromotion']);

Route::get('editApperPage/{currentPromotionId}', [apperController::class, 'editApper']);

Route::put('updateApperPage/{currentPromotionId}', [apperController::class, 'updateApper']);

Route::get('deleteApper/{id}', [apperController::class, 'deleteApper']);

Route::get('search/{name}',[PromotionsController::class,'search']);

Route::get('search',[PromotionsController::class,'search']);



