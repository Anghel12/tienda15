<?php

use App\Http\Controllers\Admin\BanController;
use App\Http\Controllers\admin\BlockedFollowController;
use App\Http\Controllers\Admin\BlogMetaController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CoinConfigController;
use App\Http\Controllers\Admin\CommentsAllController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatabaseController;
use App\Http\Controllers\Admin\DeviceInfoController;
use App\Http\Controllers\Admin\DevToolsController;
use App\Http\Controllers\Admin\EnvConfigController;
use App\Http\Controllers\Admin\FavoriteController;
use App\Http\Controllers\admin\FollowController;
use App\Http\Controllers\admin\FooterController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\admin\ImagesController;
use App\Http\Controllers\Admin\ImpersonateController;
use App\Http\Controllers\Admin\MensajesController;
use App\Http\Controllers\admin\NavbarConfigController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\admin\orderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PaymentMethodsController;
use App\Http\Controllers\Admin\PedidoController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PostYoutubeController;
use App\Http\Controllers\admin\profileController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\sliderController;
use App\Http\Controllers\Admin\subCategoryController;
use App\Http\Controllers\Admin\ReferralController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\transactionsController;
use App\Http\Controllers\Admin\CalculatorController;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\Admin\HomeBanerController;
use App\Http\Controllers\Admin\HomeContactController;
use App\Http\Controllers\Admin\HomeContactDetailsController;
use App\Http\Controllers\Admin\LoanDetailsController;
use App\Http\Controllers\Admin\LoansController;
use App\Http\Controllers\Admin\MapsController;
use App\Http\Controllers\Admin\PlacesController;
use App\Http\Controllers\Payments\MercadoPagoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\SharedController;
use App\Http\Controllers\Admin\TermController;
use App\Http\Controllers\Admin\WalletController;
use Chatify\ChatifyMessenger;
use App\Http\Controllers\HomeHelpController;
use App\Http\Controllers\Admin\AboutUsHomeController;


Route::get('/', [HomeController::class, 'index'])->middleware(['can:admin.home'
/* ,'auth:sanctum', 
config('jetstream.auth_session'),
'verified' */
])->name('admin.index');
/* IMPERSONATE CAMBIAR DE USUARIO SIENDO ADMIN */
Route::post('impersonate/{user}/start', [ImpersonateController::class, 'start'])->name('impersonate.start');
/* impersonate/stop sin middleware */
Route::get('impersonate/stop', [ImpersonateController::class, 'stop'])->name('impersonate.stop');
/* nosotros about us  */
/* Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('about_us_homes', AboutUsHomeController::class);
}); */
Route::resource('about_us_homes', AboutUsHomeController::class)->names('admin.about_us_homes');

/* ruta de ayuda home */
Route::resource('home_helps', HomeHelpController::class)->names('admin.home_helps');

/* Route::get('/admin/referrals', [ReferralController::class, 'index'])->name('admin.referrals.index');
 */
Route::get('/register', [ReferralController::class, 'referral'])->name('admin.referrals.index');

Route::resource('wallet', WalletController::class)->names('admin.wallet'); 

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('coins-configuracion', CoinConfigController::class)->names('admin.coinsConfig');

Route::resource('Transacciones', transactionsController::class)->names('admin.transactions');

Route::resource('PaymentMethods', PaymentMethodsController::class)->names('admin.PaymentMethods');

Route::resource('Payments', PaymentController::class)->names('admin.Payments');

Route::resource('Comments', CommentsAllController::class)->names('admin.CommentsAll');

Route::resource('sub_categories', subCategoryController::class)->names('admin.sub_categories');

Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

Route::resource('users', UserController::class)->only('index', 'edit', 'update', 'show')->names('admin.users');

Route::resource('orders', orderController::class)->only('index', 'edit', 'update', 'show')->names('admin.orders');

Route::get('/user_order', [ReferralController::class, 'UserOrder'])->name('admin.orders.user_order');



Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('postyoutube', PostYoutubeController::class)->names('admin.postyoutubes');

Route::resource('sales', SaleController::class)->names('admin.sales');

Route::resource('pedidos', PedidoController::class)->names('admin.pedidos');

Route::resource('providers', ProviderController::class)->names('admin.providers');
 
Route::resource('brands', BrandController::class)->names('admin.brands');

Route::resource('dashboards', DashboardController::class)->names('admin.dashboards');
 
/* perfil del usuario */
Route::resource('profile', profileController::class)->names('admin.profile');
 
Route::get('/admin/profile/{user}', [ProfileController::class, 'show'])->name('admin.profile.show');

/* comprar monedas ct */
Route::get('buyCoins', [CoinController::class, 'showBuyCoinsForm'])->name('admin.buyCoins.index');
Route::post('processPayment', [CoinController::class, 'processPayment'])->name('processPayment');
Route::post('/payment/notification', [CoinController::class, 'paymentNotification'])->name('paymentNotification');
  
/* mercado pago checks*/
Route::get('MercadoPago/success', [MercadoPagoController::class, 'success'])->name('admin.MercadoPago.success');
Route::get('MercadoPago/failure', [MercadoPagoController::class, 'failure'])->name('admin.MercadoPago.failure');
Route::get('MercadoPago/pending', [MercadoPagoController::class, 'pending'])->name('admin.MercadoPago.pending');

/* configuracion de la vista home crud */

Route::resource('navbars', NavbarConfigController::class)->names('admin.navbars');
Route::resource('sliders', sliderController::class)->names('admin.sliders');
Route::resource('footers', FooterController::class)->names('admin.footers');
/* ICONOES  */
Route::get('/icons', [IconController::class, 'index'])->name('admin.icons.index');

/* Mensajes */
Route::resource('messages', MensajesController::class)->names('admin.messages');

/* Imagnes  */
Route::resource('Imagenes', ImagesController::class)->names('admin.Images');

/* Mensajes */
Route::get('mensajes', [MensajesController::class, 'listarMensajes'])->name('admin.mensajes.listar');
Route::get('mensajes/{id}', [MensajesController::class, 'verMensaje'])->name('admin.mensajes.ver');
/* banear usuarios */
Route::resource('bans', BanController::class)->names('admin.bans');
Route::put('desbaneo/{id}', [BanController::class, 'desbaneo'])->name('admin.bans.desbaneo');
/* DATABASE */
Route::resource('Database', DatabaseController::class)->names('admin.database');

/* ENV CONFIGURACION no mostrar a nadie */
/* Route::resource('envconfig', EnvConfigController::class)->names('admin.envconfig');
 */
/* dev tools */
Route::resource('DevTools', DevToolsController::class)->names('admin.DevTools');

/* rasterar usuario middwolrd */
Route::resource('DeviceInfos', DeviceInfoController::class)->names('admin.deviceInfos');

/* rasterar usuario middwolrd */
Route::resource('Notifications', NotificationController::class)->names('admin.Notifications');

/* favoritos rutas */
Route::resource('Favorites', FavoriteController::class)->names('admin.favorites');

/* favoritos rutas defino mis rutas */
Route::resource('reviews', ReviewController::class)->parameters(['reviews' => 'product_id'])->names('admin.reviews');
/* Route::get('reviews/create/{post}', [ReviewController::class, 'create'])->name('admin.reviews.create');
 */
/* FOLOWERS USER */
Route::resource('follows', FollowController::class)->names('admin.follows');
Route::post('/users/{user}/follow', [FollowController::class, 'follow'])->name('admin.users.follow');
Route::delete('/users/{user}/unfollow', [FollowController::class, 'unfollow'])->name('admin.users.unfollow');


/* BLOQUEO FOLOWERS USER */
Route::resource('BlockedFollow', BlockedFollowController::class)->names('admin.Blocked_follows');

/* Historial USER */
Route::resource('Historial', HistoryController::class)->names('admin.histories');

/* reportes o ayudas FOLOWERS USER admin.reports.create*/

Route::resource('Report', ReportController::class)->names('admin.reports');

/* reportes o ayudas FOLOWERS USER admin.reports.create*/
Route::resource('HomeBaners', HomeBanerController::class)->names('admin.HomeBaners');
/* CaALCULADORA */
Route::resource('Calculator', CalculatorController::class)->names('admin.Calculators');
/* COMPARTIDOS CON LA URL  */
Route::resource('Shared', SharedController::class)->names('admin.Shareds');
/* Terminos y condiciones   */
Route::resource('Term', TermController::class)->names('admin.Terms');

/* Terminos y condiciones   */
Route::resource('Rules', RuleController::class)->names('admin.Rules');

/* Terminos y condiciones   */
Route::resource('Loans', LoansController::class)->names('admin.Loans');
Route::resource('LoanDetails', LoanDetailsController::class)->names('admin.LoanDetails');

/* Blogs para comunicar a los usuarios    */
Route::resource('Blogs', BlogsController::class)->names('admin.Blogs');
Route::resource('BlogMeta', BlogMetaController::class)->names('admin.BlogMeta');


/* HomeContact vista formulario    */
Route::resource('HomeContact', HomeContactController::class)->names('admin.HomeContact');
Route::resource('HomeContactDetails', HomeContactDetailsController::class)->names('admin.HomeContactDetails');

/* HomeContact vista formulario    */
Route::resource('Maps', MapsController::class)->names('admin.Maps');
Route::resource('Places', PlacesController::class)->names('admin.Places');

