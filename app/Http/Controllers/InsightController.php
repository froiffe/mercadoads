<?php

namespace App\Http\Controllers;

use App\Page;
use App\Insight;
use App\LandingContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsightController extends Controller
{
    public function index()
    {
        $highlightInsights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
            ->where('insight_translations.is_active', 1)
            ->where('insight_translations.is_highlight_list', 1)
            ->where('insight_translations.locale', app()->getLocale())
            ->orderBy('insights.position')
            ->select('insights.*')
            ->get();

        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
            ->where('insight_translations.is_active', 1)
            ->where('insight_translations.is_highlight_list', 0)
            ->where('insight_translations.locale', app()->getLocale())
            ->orderBy('insights.position')
            ->select('insights.*')
            ->get();

        return view('insights.index')
            ->with('highlightInsights', $highlightInsights)
            ->with('insights', $insights)
            ->with('page', Page::where('name', 'Insights')->first());
    }

    public function details(Request $request, $slug)
    {
        $insight = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
            ->where('insight_translations.is_active', 1)
            ->where('insight_translations.slug', $slug)
            ->select('insights.*')
            ->first();

        if( is_null($insight) ) {
            abort(404);
        }

        $otherInsights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
            ->where('insights.id', '!=', $insight->id)
            ->where('insight_translations.is_active', 1)
            ->where('insight_translations.locale', app()->getLocale())
            ->orderBy('insights.position')
            ->limit(2)
            ->select('insights.*')
            ->get();

        return view('insights.details')
            ->with('insight', $insight)
            ->with('otherInsights', $otherInsights);
    }

    public function saveContact(Request $request)
    {
        DB::beginTransaction();

        $contact = new LandingContact;

        $contact->locale = app()->getLocale();
        $contact->form = $request->input('form');
        $contact->email = $request->input('email');

        if( $contact->save() ) {
            DB::commit();

            return response()->json([], 200);
        }

        DB::rollback();

        return response()->json([
            'message' => trans('insights.general.message-error')
        ], 400);
    }

    // custom insights
    public function indexTrends()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.mercado-libre')
            ->with('page', Page::where('name', 'Insights')->first())
            ->with('insights', $insights);
    }

    public function indexCovid()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.covid')
            ->with('page', Page::where('name', 'Insights Covid')->first())
            ->with('insights', $insights);
    }

    public function indexCovid2()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.covid-2')
            ->with('page', Page::where('name', 'Insights Covid 2')->first())
            ->with('insights', $insights);
    }

    public function indexHotSale()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.hot-sale')
            ->with('page', Page::where('name', 'Insights Hot Sale')->first())
            ->with('insights', $insights);
    }

    public function indexHotSaleArgentina()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.hot-sale-argentina')
            ->with('page', Page::where('name', 'Insights Hot Sale Argentina')->first())
            ->with('insights', $insights);
    }

    public function indexKantar()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.kantar')
            ->with('page', Page::where('name', 'Insights Kantar')->first())
            ->with('insights', $insights);
    }

    public function indexSmartphones()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.smartphones')
            ->with('page', Page::where('name', 'Insights Smartphones')->first())
            ->with('insights', $insights);
    }

    public function indexLaptops()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.laptops')
            ->with('page', Page::where('name', 'Insights Laptops')->first())
            ->with('insights', $insights);
    }

    public function indexCabello()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.cabello')
            ->with('page', Page::where('name', 'Insights Cabello')->first())
            ->with('insights', $insights);
    }

	public function indexLimpieza()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.limpieza')
            ->with('page', Page::where('name', 'Insights Limpieza')->first())
            ->with('insights', $insights);
    }

	public function indexPañales()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.diaper')
            ->with('page', Page::where('name', 'Insights Pañales')->first())
            ->with('insights', $insights);
    }

	public function indexElectrodomesticos()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.electrodomesticos')
            ->with('page', Page::where('name', 'Insights electrodomesticos')->first())
            ->with('insights', $insights);
    }
	
	public function indexTV()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.tv')
            ->with('page', Page::where('name', 'Insights TV')->first())
            ->with('insights', $insights);
    }
	
	public function indexBuenfin()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.buenfin')
            ->with('page', Page::where('name', 'Insights buenfin')->first())
            ->with('insights', $insights);
    }

	public function indexCybermonday()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.cybermonday')
            ->with('page', Page::where('name', 'Insights cybermonday')->first())
            ->with('insights', $insights);
    }
	
	public function indexBlackfriday()
    {
        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
        ->where('insight_translations.is_active', 1)
        ->where('insight_translations.is_highlight_list', 0)
        ->where('insight_translations.locale', app()->getLocale())
        ->orderBy('insights.position')
        ->select('insights.*')
        ->get();

        return view('insights.blackfriday')
            ->with('page', Page::where('name', 'Insights blackfriday')->first())
            ->with('insights', $insights);
    }
}
