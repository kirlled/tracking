<?php

namespace App\Http\Controllers;

use App\Models\Prepack;
use Illuminate\Http\Request;

class PrepackController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort');
        $order = $request->get('order');

        if (empty($sort) || !in_array($sort, ['tracking', 'creationdate'])) {
            $sort = 'tracking';
        }

        if (empty($order) || !in_array($order, ['desc', 'asc'])) {
            $order = 'asc';
        }

        $prepacks = Prepack::orderBy($sort, $order)
            ->paginate(15)
            ->withQueryString();

        return view('dashboard', ['prepacks' => $prepacks]);
    }
}
