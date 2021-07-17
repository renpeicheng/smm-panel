<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.dashboard');
    }

    public function newOrder()
    {
        return view('dashboard.new-order');
    }
    public function orderHistory()
    {
        return view('dashboard.order-history');
    }
    public function priceList()
    {
        return view('dashboard.price-list');
    }
    public function topup()
    {
        return view('dashboard.topup');
    }
    public function topupHistory()
    {
        return view('dashboard.topup-history');
    }
    public function openTicket()
    {
        return view('dashboard.open-ticket');
    }
    public function faq()
    {
        return view('dashboard.faq');
    }
}
