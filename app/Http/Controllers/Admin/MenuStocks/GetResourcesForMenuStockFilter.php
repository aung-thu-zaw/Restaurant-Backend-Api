<?php

namespace App\Http\Controllers\Admin\MenuStocks;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetResourcesForMenuStockFilter extends Controller
{
    public function __invoke(): JsonResponse
    {
        try {
            $categories = Category::select('id', 'name', 'slug')->where('status', true)->get();

            return response()->json($categories, 200);
        } catch (\Exception $e) {
            return $this->apiExceptionResponse($e);
        }
    }
}
