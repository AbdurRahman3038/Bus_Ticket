<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Searchbox;

class SearchboxController extends Controller
{
    public function searchbox()
    {
        return view('frontend.content.searchbox');
    }
}
