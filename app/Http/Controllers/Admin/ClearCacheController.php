<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ClearCacheController extends Controller
{
    public function index()
    {
        Cache::flush();
        return back()->with('flash_message', 'КЭШ очищен');
    }
}
