<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;



class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchModels = [
            \App\Models\Product::class,
            \App\Models\Supplier::class,
        ];

        $searchColumns = [
            \App\Models\Product::class => 'name',
            \App\Models\Supplier::class => 'company_name',
            // Добавь другие модели и соответствующие столбцы, если необходимо
        ];

        $searchTerm = $request->input('q');
        $results = collect();

        foreach ($searchModels as $model) {
            $searchColumn = $searchColumns[$model];
            $modelResults = $model::where($searchColumn, 'LIKE', '%' . $searchTerm . '%')->get();
            $results = $results->concat($modelResults);
        }

        return view('search_results', ['results' => $results]);
    }
}
