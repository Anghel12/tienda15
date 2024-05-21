<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coin;
use App\Models\Follow;
use App\Models\Pedido;
use App\Models\Post;
use App\Models\Provider;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserCoin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
/*   public function __construct()
  {
      $this->middleware('can:admin.dashboards.index')->only('index');
      $this->middleware('can:admin.dashboards.create')->only('create', 'store');
      $this->middleware('can:admin.dashboards.edit')->only('edit', 'update');
      $this->middleware('can:admin.dashboards.destroy')->only('destroy'); 
  } */

    public function index(){ 
// Obtén los registros de "CPU Traffic" desde la base de datos
     /*  $cpuTraffic = CpuTraffic::all();  */
      
      $likes = Follow::count(); // Obtén la cuenta total de registros de "Likes"
      $sales = UserCoin::sum('balance'); // Obtén la suma de los montos de "Sales"
      $newMembers = User::whereDate('created_at', '>=', now()->subDays(7))->count(); // Obtén la cuenta total de registros de "New Members" creados en los últimos 7 días
  
      return view('admin.dashboards.index', compact( 'likes', 'sales', 'newMembers'));
     }
}
