<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Traits\slug;
use Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.dashboard', compact('categories'));
    }

    /**
     * This method generates alias
     * @return  JSON formata data of alias
     * @since   2017-10-30
     * @author  NetQuick
     */
    public function aliasGenerate()
    {
        $alias = Request::input('alias');
        $sector = Request::input('sector');

        $unique = true;
        // if (!empty($sector)) {
        //     $unique = false;
        // }
        $slug = slug::create_slug($alias, $unique);
        $response = array('alias' => $slug);
        echo json_encode($response);
    }
}
