<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class postApiController extends Controller
{
    public function post()
    {
        $vacancies = Vacancy::all();
        return response()->json(['message' => 'APInya AQILL BANGGG', 'data' => $vacancies]);
    }
}
