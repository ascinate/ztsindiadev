<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Brand;
use App\models\Service;
use App\models\Platform;
use App\models\Industry;
use App\models\Technology;
use App\models\Portfolio;
use App\models\Branch;




use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $brands = Brand::all();
        $services = Service::all();
        $platforms = Platform::all();
        $industries = Industry::all();
        $technologies = Technology::all();
        $branches = Branch::all();

        
        $portfolios = Portfolio::all();

        foreach ($portfolios as $portfolio) {
            $portfolio->first_image = null;

            if (!empty($portfolio->images)) {
                $imageArray = explode(',', $portfolio->images);
                $portfolio->first_image = asset('uploads/' . $imageArray[0]);
            }
        }

        return view('index', [
            'brands' => $brands,
            'services' => $services,
            'platforms' => $platforms,
            'industries' => $industries,
            'technologies' => $technologies,
            'portfolios' => $portfolios,
            'branches' => $branches,
        ]);
    }

}
