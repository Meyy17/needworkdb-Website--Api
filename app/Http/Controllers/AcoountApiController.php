<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AcoountApiController extends Controller
{
    public function account()
    {
        $account = Account::all();
        return response()->json(['message' => 'APInya User Y', 'data' => $account]);
    }
}
