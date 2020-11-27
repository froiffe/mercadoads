<?php

namespace App\Http\Controllers\Admin;

use App\Insight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Fractal\Facades\Fractal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\InsightCreate;
use App\Http\Requests\InsightUpdate;
use App\Transformers\InsightTransformer;

class InsightController extends Controller
{
    public function list(Request $request)
    {
        return view('admin.insights.list');
    }

    public function create()
    {
        $insights = Insight::all();

        return view('admin.insights.create')
            ->with('insights', $insights);
    }

    public function store(InsightCreate $request)
    {
        DB::beginTransaction();

        $insight = new Insight;

        // save spanish translation
        app()->setLocale('es');

        $insight->slug = $request->input('slug_es');
        $insight->title = $request->input('title_es');
        $insight->subtitle = $request->input('subtitle_es');
        $insight->description = $request->input('description_es');
        $insight->description_list = $request->input('description_list_es');
        $insight->content = $request->input('content_es');
        $insight->seo_title = $request->input('seo_title_es');
        $insight->seo_description = $request->input('seo_description_es');

        if( !is_null($request->file('image_es')) ) {
            $image = $request->file('image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(890, 310, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->image = $path;
        }

        if( !is_null($request->file('image_home_es')) ) {
            $image = $request->file('image_home_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(574, 410, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->image_home = $path;
        }

        if( !is_null($request->file('desktop_banner_image_es')) ) {
            $desktopBannerImage = $request->file('desktop_banner_image_es');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/insights');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->desktop_banner_image = $path;
        }

        if( !is_null($request->file('mobile_banner_image_es')) ) {
            $mobileBannerImage = $request->file('mobile_banner_image_es');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/insights');
            $image = Image::make($mobileBannerImage);
            $image->resize(1024, 1820, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->mobile_banner_image = $path;
        }

        if( !is_null($request->file('desktop_internal_image_es')) ) {
            $desktopBannerImage = $request->file('desktop_internal_image_es');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/insights');
            $image = Image::make($desktopBannerImage);
            $image->resize(568, 663, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->desktop_internal_image = $path;
        }

        if( !is_null($request->file('mobile_internal_image_es')) ) {
            $mobileBannerImage = $request->file('mobile_internal_image_es');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/insights');
            $image = Image::make($mobileBannerImage);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->mobile_internal_image = $path;
        }

        if( !is_null($request->file('seo_image_es')) ) {
            $image = $request->file('seo_image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->seo_image = $path;
        }

        $insight->is_highlight_list = $request->input('is_highlight_list_es') ? 1 : 0;
        $insight->is_highlight_home = $request->input('is_highlight_home_es') ? 1 : 0;
        $insight->date = $request->input('date_es') != '01-01-1970' ? date('Y-m-d', strtotime($request->input('date_es'))) : null;

        // save portuguese translation
        app()->setLocale('pt');

        $insight->slug = $request->input('slug_pt');
        $insight->title = $request->input('title_pt');
        $insight->subtitle = $request->input('subtitle_pt');
        $insight->description = $request->input('description_pt');
        $insight->description_list = $request->input('description_list_pt');
        $insight->content = $request->input('content_pt');
        $insight->seo_title = $request->input('seo_title_pt');
        $insight->seo_description = $request->input('seo_description_pt');

        if( !is_null($request->file('image_pt')) ) {
            $image = $request->file('image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(890, 310, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->image = $path;
        }

        if( !is_null($request->file('image_home_pt')) ) {
            $image = $request->file('image_home_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(574, 410, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->image_home = $path;
        }

        if( !is_null($request->file('desktop_banner_image_pt')) ) {
            $desktopBannerImage = $request->file('desktop_banner_image_pt');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/insights');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->desktop_banner_image = $path;
        }

        if( !is_null($request->file('mobile_banner_image_pt')) ) {
            $mobileBannerImage = $request->file('mobile_banner_image_pt');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/insights');
            $image = Image::make($mobileBannerImage);
            $image->resize(1024, 1820, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->mobile_banner_image = $path;
        }

        if( !is_null($request->file('desktop_internal_image_pt')) ) {
            $desktopBannerImage = $request->file('desktop_internal_image_pt');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/insights');
            $image = Image::make($desktopBannerImage);
            $image->resize(568, 663, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->desktop_internal_image = $path;
        }

        if( !is_null($request->file('mobile_internal_image_pt')) ) {
            $mobileBannerImage = $request->file('mobile_internal_image_pt');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/insights');
            $image = Image::make($mobileBannerImage);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->mobile_internal_image = $path;
        }

        if( !is_null($request->file('seo_image_pt')) ) {
            $image = $request->file('seo_image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->seo_image = $path;
        }

        $insight->position = $request->input('position');
        $insight->is_highlight_list = $request->input('is_highlight_list_pt') ? 1 : 0;
        $insight->is_highlight_home = $request->input('is_highlight_home_pt') ? 1 : 0;
        $insight->date = $request->input('date_pt') != '01-01-1970' ? date('Y-m-d', strtotime($request->input('date_pt'))) : null;

        $insight->format = $request->input('format');

        if( $insight->save() ) {
            $insight->insightsRelated()->sync($request->input('insights'));

            DB::commit();

            return redirect()->route('insights.list')->withSuccess('Insight creado correctamente.');
        }

        DB::rollback();
    }

    public function edit(Insight $insight)
    {
        $insights = Insight::where('id', '!=', $insight->id)->get();

        return view('admin.insights.edit')
            ->with('insights', $insights)
            ->with('insight', $insight);
    }

    public function update(InsightUpdate $request, Insight $insight)
    {
        // save spanish translation
        app()->setLocale('es');

        $insight->slug = $request->input('slug_es');
        $insight->title = $request->input('title_es');
        $insight->subtitle = $request->input('subtitle_es');
        $insight->description = $request->input('description_es');
        $insight->description_list = $request->input('description_list_es');
        $insight->content = $request->input('content_es');
        $insight->seo_title = $request->input('seo_title_es');
        $insight->seo_description = $request->input('seo_description_es');

        $insight->is_active = $request->input('is_active_es') ? 1 : 0;

        if( !is_null($request->file('image_es')) ) {
            if( !is_null($insight->image) ) {
                Storage::disk('public_uploads')->delete($insight->image);
            }

            $image = $request->file('image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(890, 310, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->image = $path;
        }

        if( !is_null($request->file('image_home_es')) ) {
            if( !is_null($insight->image_home) ) {
                Storage::disk('public_uploads')->delete($insight->image_home);
            }

            $image = $request->file('image_home_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(574, 410, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->image_home = $path;
        }

        if( !is_null($request->file('desktop_banner_image_es')) ) {
            if( !is_null($insight->desktop_banner_image) ) {
                Storage::disk('public_uploads')->delete($insight->desktop_banner_image);
            }

            $desktopBannerImage = $request->file('desktop_banner_image_es');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/insights');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->desktop_banner_image = $path;
        }

        if( !is_null($request->file('mobile_banner_image_es')) ) {
            if( !is_null($insight->mobile_banner_image) ) {
                Storage::disk('public_uploads')->delete($insight->mobile_banner_image);
            }

            $mobileBannerImage = $request->file('mobile_banner_image_es');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/insights');
            $image = Image::make($mobileBannerImage);
            $image->resize(1024, 1820, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->mobile_banner_image = $path;
        }

        if( !is_null($request->file('desktop_internal_image_es')) ) {
            if( !is_null($insight->desktop_internal_image) ) {
                Storage::disk('public_uploads')->delete($insight->desktop_internal_image);
            }

            $desktopBannerImage = $request->file('desktop_internal_image_es');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/insights');
            $image = Image::make($desktopBannerImage);
            $image->resize(568, 663, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->desktop_internal_image = $path;
        }

        if( !is_null($request->file('mobile_internal_image_es')) ) {
            if( !is_null($insight->mobile_internal_image) ) {
                Storage::disk('public_uploads')->delete($insight->mobile_internal_image);
            }

            $mobileBannerImage = $request->file('mobile_internal_image_es');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/insights');
            $image = Image::make($mobileBannerImage);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->mobile_internal_image = $path;
        }

        if( !is_null($request->file('seo_image_es')) ) {
            if( !is_null($insight->seo_image) ) {
                Storage::disk('public_uploads')->delete($insight->seo_image);
            }

            $image = $request->file('seo_image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->seo_image = $path;
        }

        $insight->is_highlight_list = $request->input('is_highlight_list_es') ? 1 : 0;
        $insight->is_highlight_home = $request->input('is_highlight_home_es') ? 1 : 0;
        $insight->date = $request->input('date_es') != '01-01-1970' ? date('Y-m-d', strtotime($request->input('date_es'))) : null;

        // save portuguese translation
        app()->setLocale('pt');

        $insight->slug = $request->input('slug_pt');
        $insight->title = $request->input('title_pt');
        $insight->subtitle = $request->input('subtitle_pt');
        $insight->description = $request->input('description_pt');
        $insight->description_list = $request->input('description_list_pt');
        $insight->content = $request->input('content_pt');
        $insight->seo_title = $request->input('seo_title_pt');
        $insight->seo_description = $request->input('seo_description_pt');

        $insight->is_active = $request->input('is_active_pt') ? 1 : 0;

        if( !is_null($request->file('image_pt')) ) {
            if( !is_null($insight->image) ) {
                Storage::disk('public_uploads')->delete($insight->image);
            }

            $image = $request->file('image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(890, 310, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->image = $path;
        }

        if( !is_null($request->file('image_home_pt')) ) {
            if( !is_null($insight->image_home) ) {
                Storage::disk('public_uploads')->delete($insight->image_home);
            }

            $image = $request->file('image_home_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(574, 410, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->image_home = $path;
        }

        if( !is_null($request->file('desktop_banner_image_pt')) ) {
            if( !is_null($insight->desktop_banner_image) ) {
                Storage::disk('public_uploads')->delete($insight->desktop_banner_image);
            }

            $desktopBannerImage = $request->file('desktop_banner_image_pt');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/insights');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->desktop_banner_image = $path;
        }

        if( !is_null($request->file('mobile_banner_image_pt')) ) {
            if( !is_null($insight->mobile_banner_image) ) {
                Storage::disk('public_uploads')->delete($insight->mobile_banner_image);
            }

            $mobileBannerImage = $request->file('mobile_banner_image_pt');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/insights');
            $image = Image::make($mobileBannerImage);
            $image->resize(1024, 1820, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->mobile_banner_image = $path;
        }

        if( !is_null($request->file('desktop_internal_image_pt')) ) {
            if( !is_null($insight->desktop_internal_image) ) {
                Storage::disk('public_uploads')->delete($insight->desktop_internal_image);
            }

            $desktopBannerImage = $request->file('desktop_internal_image_pt');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/insights');
            $image = Image::make($desktopBannerImage);
            $image->resize(568, 663, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->desktop_internal_image = $path;
        }

        if( !is_null($request->file('mobile_internal_image_pt')) ) {
            if( !is_null($insight->mobile_internal_image) ) {
                Storage::disk('public_uploads')->delete($insight->mobile_internal_image);
            }

            $mobileBannerImage = $request->file('mobile_internal_image_pt');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/insights');
            $image = Image::make($mobileBannerImage);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->mobile_internal_image = $path;
        }

        if( !is_null($request->file('seo_image_pt')) ) {
            if( !is_null($insight->seo_image) ) {
                Storage::disk('public_uploads')->delete($insight->seo_image);
            }

            $image = $request->file('seo_image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/insights');
            $image = Image::make($image);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $insight->seo_image = $path;
        }

        $insight->position = $request->input('position');
        $insight->is_highlight_list = $request->input('is_highlight_list_pt') ? 1 : 0;
        $insight->is_highlight_home = $request->input('is_highlight_home_pt') ? 1 : 0;
        $insight->date = $request->input('date_pt') != '01-01-1970' ? date('Y-m-d', strtotime($request->input('date_pt'))) : null;

        $insight->format = $request->input('format');

        $insight->insightsRelated()->sync($request->input('insights'));

        if( $insight->save() ) {
            return redirect()->route('insights.edit', $insight)->withSuccess('Insight actualizado correctamente.');
        }
    }

    public function destroy(Insight $insight)
    {
        $insight->delete();

        return redirect()->route('insights.list')->withSuccess('Insight borrado correctamente.');
    }

    // AJAX
    public function ajaxList(Request $request)
    {
        $insights = Insight::query()->get();

        return DataTables::of($insights)
            ->setTransformer(new InsightTransformer)
            ->make(true);
    }
}
