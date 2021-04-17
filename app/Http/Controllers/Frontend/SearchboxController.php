<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchboxController extends Controller
{
    public function searchbox()
    {
        return view('frontend.content.searchbox');
    }
}
