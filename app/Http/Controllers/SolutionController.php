<?php

namespace App\Http\Controllers;

use App\Page;
use App\Type;
use App\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index(Request $request)
    {
        $formats = Solution::orderBy('position', 'ASC')->get();
        $types = Type::all();

        $typeSelected = null;
        if( $request->isMethod('post') ) {
            $filter = $request->input('type-filtered');
            $formats = Solution::whereHas('types', function($q) use($filter) {
                $q->where('id', [$filter]);
            })
            ->orderBy('position', 'ASC')
            ->get();

            $typeSelected = Type::find($filter);
        }

        return view('solutions.index')
            ->with('page', Page::where('name', 'Soluciones')->first())
            ->with('types', $types)
            ->with('typeSelected', $typeSelected)
            ->with('category', '')
            ->with('formats', $formats);
    }

    public function media(Request $request)
    {
        $formats = Solution::where('category', 'media')->orderBy('position', 'ASC')->get();
        $types = Type::all();

        $typeSelected = null;
        if( $request->isMethod('post') ) {
            $filter = $request->input('type-filtered');
            $formats = Solution::whereHas('types', function($q) use($filter) {
                $q->where('id', [$filter]);
            })
            ->orderBy('position', 'ASC')
            ->get();

            $typeSelected = Type::find($filter);
        }

        return view('solutions.index')
            ->with('page', Page::where('name', 'Soluciones Media')->first())
            ->with('types', $types)
            ->with('typeSelected', $typeSelected)
            ->with('category', 'media')
            ->with('formats', $formats);
    }

    public function supermercadolibre(Request $request)
    {
        $formats = Solution::where('category', 'supermercado_libre')->orderBy('position', 'ASC')->get();
        $types = Type::all();

        $typeSelected = null;
        if( $request->isMethod('post') ) {
            $filter = $request->input('type-filtered');
            $formats = Solution::whereHas('types', function($q) use($filter) {
                $q->where('id', [$filter]);
            })
            ->orderBy('position', 'ASC')
            ->get();

            $typeSelected = Type::find($filter);
        }

        return view('solutions.index')
            ->with('page', Page::where('name', 'Soluciones Supermercado Libre')->first())
            ->with('types', $types)
            ->with('typeSelected', $typeSelected)
            ->with('category', 'supermercado_libre')
            ->with('formats', $formats);
    }

    public function audienceDeals(Request $request)
    {
        $formats = Solution::where('category', 'audience_deals')->orderBy('position', 'ASC')->get();
        $types = Type::all();

        $typeSelected = null;
        if( $request->isMethod('post') ) {
            $filter = $request->input('type-filtered');
            $formats = Solution::whereHas('types', function($q) use($filter) {
                $q->where('id', [$filter]);
            })
            ->orderBy('position', 'ASC')
            ->get();

            $typeSelected = Type::find($filter);
        }

        return view('solutions.index')
            ->with('page', Page::where('name', 'Soluciones Audiencias Programaticas')->first())
            ->with('types', $types)
            ->with('typeSelected', $typeSelected)
            ->with('category', 'audience_deals')
            ->with('formats', $formats);
    }

    public function details(Request $request, $slug)
    {
        $format = Solution::join('solution_translations', 'solutions.id', '=', 'solution_translations.solution_id')
            ->where('solution_translations.slug', $slug)
            ->select('solutions.*')
            ->first();

        if( is_null($format) ) {
            abort(404);
        }

        return view('solutions.details')
            ->with('format', $format);
    }

    // AJAX
    public function filter(Request $request)
    {
        $filter = $request->input('filter');
        $category = $request->input('category');

        if( $filter == '' ) {
            if( $category ) {
                $formats = Solution::where('category', $category)->orderBy('position', 'ASC')
                    ->get();
            }
            else {
                $formats = Solution::orderBy('position', 'ASC')
                    ->get();
            }
        }
        else {
            if( $category ) {
                $formats = Solution::where('category', $category)
                ->whereHas('types', function($q) use($filter) {
                    $q->where('id', [$filter]);
                })
                ->orderBy('position', 'ASC')
                ->get();
            }
            else {
                $formats = Solution::whereHas('types', function($q) use($filter) {
                    $q->where('id', [$filter]);
                })
                ->orderBy('position', 'ASC')
                ->get();
            }
        }

        $view = view('solutions.filter-ajax')->with('formats', $formats)->render();

        return response()->json($view);
    }
}
