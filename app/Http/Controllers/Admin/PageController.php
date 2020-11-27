<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Fractal\Facades\Fractal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\PageCreate;
use App\Http\Requests\PageUpdate;
use App\Transformers\PageTransformer;

class PageController extends Controller
{
    public function list(Request $request)
    {
        return view('admin.pages.list');
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(PageCreate $request)
    {
        DB::beginTransaction();

        $page = new Page;

        // save spanish translation
        app()->setLocale('es');

        // $page->slug = $request->input('slug_es');
        $page->seo_title = $request->input('seo_title_es');
        $page->seo_description = $request->input('seo_description_es');
        $page->seo_ogtitle = $request->input('seo_ogtitle_es');
        $page->seo_ogdescription = $request->input('seo_ogdescription_es');

        if( !is_null($request->file('seo_image_es')) ) {
            $image = $request->file('seo_image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/pages');
            $image = Image::make($image);
            $image->fit(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $page->seo_image = $path;
        }

        // save portuguese translation
        app()->setLocale('pt');

        // $page->slug = $request->input('slug_pt');
        $page->seo_title = $request->input('seo_title_pt');
        $page->seo_description = $request->input('seo_description_pt');
        $page->seo_ogtitle = $request->input('seo_ogtitle_pt');
        $page->seo_ogdescription = $request->input('seo_ogdescription_pt');

        if( !is_null($request->file('seo_image_pt')) ) {
            $image = $request->file('seo_image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/pages');
            $image = Image::make($image);
            $image->fit(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $page->seo_image = $path;
        }

        $page->name = $request->input('name');

        if( $page->save() ) {
            DB::commit();

            return redirect()->route('pages.list')->withSuccess('Página creada correctamente.');
        }

        DB::rollback();
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit')
            ->with('page', $page);
    }

    public function update(PageUpdate $request, Page $page)
    {
        // save spanish translation
        app()->setLocale('es');

        // $page->slug = $request->input('slug_es');
        $page->seo_title = $request->input('seo_title_es');
        $page->seo_description = $request->input('seo_description_es');
        $page->seo_ogtitle = $request->input('seo_ogtitle_es');
        $page->seo_ogdescription = $request->input('seo_ogdescription_es');

        if( !is_null($request->file('seo_image_es')) ) {
            if( !is_null($page->{'seo_image:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $page->{'seo_image:es'}));
            }

            $image = $request->file('seo_image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/pages');

            $image = Image::make($image);
            $image->fit(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $page->seo_image = $path;
        }

        // save portuguese translation
        app()->setLocale('pt');

        // $page->slug = $request->input('slug_pt');
        $page->seo_title = $request->input('seo_title_pt');
        $page->seo_description = $request->input('seo_description_pt');
        $page->seo_ogtitle = $request->input('seo_ogtitle_pt');
        $page->seo_ogdescription = $request->input('seo_ogdescription_pt');

        if( !is_null($request->file('seo_image_pt')) ) {
            if( !is_null($page->{'seo_image:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $page->{'seo_image:pt'}));
            }

            $image = $request->file('seo_image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/pages');
            $image = Image::make($image);
            $image->fit(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $page->seo_image = $path;
        }

        // $page->name = $request->input('name');

        if( $page->save() ) {
            return redirect()->route('pages.edit', $page)->withSuccess('Página actualizada correctamente.');
        }
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('pages.list')->withSuccess('Página borrada correctamente.');
    }

    // AJAX
    public function ajaxList(Request $request)
    {
        $pages = Page::query()->get();

        return DataTables::of($pages)
            ->setTransformer(new PageTransformer)
            ->make(true);
    }
}
