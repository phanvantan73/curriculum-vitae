<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HomeService;

class HomeController extends Controller
{
	protected $homeService;

	public function __construct(HomeService $homeService)
	{
		$this->homeService = $homeService;
	}

    public function getInfo()
    {
    	return response()->json($this->homeService->getInfo());
    }

    public function getCareer()
    {
    	return response()->json($this->homeService->getCareer());
    }

    public function getExperience()
    {
    	return response()->json($this->homeService->getExperience());
    }
}
