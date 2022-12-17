<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\InspiringService;


class InspiringController extends Controller
{
    public function inspire()
    {
        return (new InspiringService())->inspire();
    }
}
