<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showIndex(){
        return view('frontview/index');
    }

    function showCart(){
        return view('frontview/cart');
    }

    function showShop(){
        return view('frontview/shop');
    }

    function showSingle(){
        return view('frontview/single');
    }
    function showBase(){
        return view('template/base');
    }
    function showProduk(){
        return view('admin/produk');
    }
    function showKategori(){
        return view('admin/kategori');
    }

    function showBeranda(){
        return view('admin/beranda');
    }

    function showPromo(){
        return view('admin/promo');
    }
}