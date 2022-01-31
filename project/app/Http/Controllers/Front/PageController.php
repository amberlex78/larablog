<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\FrontController;
use App\Models\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PageController extends FrontController
{
    /**
     * Display page.
     *
     * @param $slug
     * @return Factory|View|Application
     */
    public function index($slug): Factory|View|Application
    {
        $model = Page::where('slug', $slug)
            ->where('is_active', 1)
            ->firstOrFail();

        return view('front.page.index', compact('model'));
    }
}
