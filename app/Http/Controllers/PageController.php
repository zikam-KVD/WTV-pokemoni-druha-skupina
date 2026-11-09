<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @return View
     */
    public function showIndex(): View
    {
        return view('welcome');
    }

    public function showPage(string $stringPage)
    {
        switch($stringPage){
            case 'video':
                $bladeName = "video";
                break;
            default:
                abort(404);    
        }

        return view($bladeName);
    }
}
