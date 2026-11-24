<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMenu = Menu::count();
        $totalKategori = Category::count();
        $totalUser = User::count();
        $totalOrder = Order::count();
        $totalPendapatan = Order::where('status', 'selesai')->sum('total_harga');

        return view('dashboard', compact(
            'totalMenu',
            'totalKategori',
            'totalUser',
            'totalOrder',
            'totalPendapatan'
        ));
    }
}