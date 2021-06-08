<?php

use App\Http\Controllers\AdressController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('homepage');
});


Route::get('pusher', function () {
    return view('pusher');
});

Route::get('pusher/test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Sana, Event has been sent!";
});

//route to go on the companies page
Route::get('/corporate', function () {
    return view('companies');
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('accountIsActivated');

//route to go on the politique page
Route::get('/politique', function () {
    return view('politique');
});

//route to go on the about page
Route::get('/a-propos', function () {
    return view('about');
});

//route to go on the CGU page
Route::get('/conditions-d-utilisation', function () {
    return view('cgu');
});

//route to go on the NOS SERVICES page
Route::get('/nos-services', function () {
    return view('service');
});



//route to go on the DEVENEZ LIVREURS page
Route::get('/devenez-livreurs', function () {
    return view('livreurs');
});

/*
//route for invoke admin middleware
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

//route to invoke deliver middleware
Route::get('/deliver', 'DeliverController@admin')
    ->middleware('is_deliver')
    ->name('deliver');

*/
//route for item resources
Route::resource('items',ItemController::class);

//route for bill resources
Route::resource('bills',BillController::class);

//route to go on the order second step page
Route::get('/secondStep', function () {
    return view('bills.create2');
});

//different routes for mobile money payment
Route::post('/envoi',[BillController::class, 'envoi'])->name('envoi');

Route::post('/notify', [BillController::class, 'notify'])->name('notify');

Route::post('/merci', [BillController::class, 'merci']);

Route::get('/merci', [BillController::class, 'merci']);

Route::post('/assign', [BillController::class, 'assign'])->name('assign');

Route::get('/payments', [BillController::class, 'paymentIndex']);
Route::post('/monthlyPayments', [BillController::class, 'monthlyPayments']);

//route for adress resources
Route::resource('adresses',AdressController::class);


//route for users resources
Route::resource('users',UserController::class);


//route for categories resources
Route::resource('categories',CategoryController::class);

//route for bills resources
Route::resource('bills', BillController::class);

//route for promotions resources
Route::resource('promotions',PromotionController::class);

/**
 * [Routes Ajax]
 * @var [type]
 */

//route pour stocker les infos avec ajax
//des items selectionnés et aller
//à la page commande
Route::post('/command', [OrderController::class, 'saveItemInSession']);

//pour checker si le code pressing esqt bon
Route::post('/checkCodePressing', [BillController::class, 'checkCodePressing']);

Route::post('/coordonnate', [OrderController::class, 'secondStepOrder']);


//ajax auth routes
Route::post('/register/user', [CustomAuthController::class, 'addUser']);
Route::post('/login/user', [CustomAuthController::class, 'loginUser']);

//créer une adresse via ajax

Route::post('/addAddress', [AdressController::class, 'createAjax']);

/*
|--------------------------------------------------------------------------
| ROUTES CONTACT
|--------------------------------------------------------------------------
|
*/
Route::post('/contact-us', [ContactController::class, 'contactUs'])->name('contact_us');

/*
|--------------------------------------------------------------------------
| ROUTES AUTH
|--------------------------------------------------------------------------
|
*/
Auth::routes(['verify' => true]);
Route::get('/password-reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.showResetForm');
Route::get('/account-activation', [UserController::class, 'account_activation'])->name('account.activation');
Route::get('/account-activation/send-mail', [UserController::class, 'send_account_activation'])->name('account.send_account_activation');
Route::post('/account-activation/send-mail', [UserController::class, 'send_account_activation_mail'])->name('account.send_account_activation_mail');
Route::get('/account-activation/{token}', [UserController::class, 'account_activate'])->name('account.activate');
Route::get('/get-notifications-view', [UserController::class, 'getNotificationView'])->name('notifications.index');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
