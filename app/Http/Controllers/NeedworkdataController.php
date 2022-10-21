<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class NeedworkdataController extends Controller
{
    public function post() {
        $vacancies = Vacancy::all();
        return view('needworkdata.post',compact(['vacancies']));
    }
}
