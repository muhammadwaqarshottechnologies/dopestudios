<?php

namespace App\Modules\Bidding\Controllers;

use App\BaseClasses\BaseController;
use Illuminate\View\View;

class BiddingController extends BaseController
{
	public function index(): View
	{
		return view('Bidding::bidding');
	}
}