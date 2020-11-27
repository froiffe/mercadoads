<?php

namespace App\Http\Controllers\Admin;

use App\Solution;
use App\SuccessStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Fractal\Facades\Fractal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\SuccessStoryCreate;
use App\Http\Requests\SuccessStoryUpdate;
use App\Transformers\SuccessStoryTransformer;

class SuccessStoryController extends Controller
{
    public function list(Request $request)
    {
        return view('admin.success-stories.list');
    }

    public function create()
    {
        $solutions = Solution::all();

        return view('admin.success-stories.create')
            ->with('solutions', $solutions);
    }

    public function store(SuccessStoryCreate $request)
    {
        DB::beginTransaction();

        $successStory = new SuccessStory;

        // save spanish translation
        app()->setLocale('es');

        $successStory->slug = $request->input('slug_es');
        $successStory->title = $request->input('title_es');
        $successStory->banner_home_title = $request->input('banner_home_title_es');
        $successStory->description = $request->input('description_es');
        $successStory->description_list = $request->input('description_list_es');
        $successStory->content = $request->input('content_es');
        $successStory->video_id = $request->input('video_id_es');
        $successStory->brand = $request->input('brand_es');
        $successStory->seo_title = $request->input('seo_title_es');
        $successStory->seo_description = $request->input('seo_description_es');

        if( !is_null($request->file('image_es')) ) {
            $image = $request->file('image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/success-stories');
            $image = Image::make($image);
            $image->resize(430, 310, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->image = $path;
        }

        if( !is_null($request->file('desktop_banner_image_es')) ) {
            $desktopBannerImage = $request->file('desktop_banner_image_es');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/success-stories');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->desktop_banner_image = $path;
        }

        if( !is_null($request->file('mobile_banner_image_es')) ) {
            $mobileBannerImage = $request->file('mobile_banner_image_es');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/success-stories');
            $image = Image::make($mobileBannerImage);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->mobile_banner_image = $path;
        }

        if( !is_null($request->file('desktop_list_banner_image_es')) ) {
            $desktopBannerImage = $request->file('desktop_list_banner_image_es');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/success-stories');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 572, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->desktop_list_banner_image = $path;
        }

        if( !is_null($request->file('mobile_list_banner_image_es')) ) {
            $mobileBannerImage = $request->file('mobile_list_banner_image_es');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/success-stories');
            $image = Image::make($mobileBannerImage);
            $image->resize(1024, 755, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->mobile_list_banner_image = $path;
        }

        if( !is_null($request->file('seo_image_es')) ) {
            $image = $request->file('seo_image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/success-stories');
            $image = Image::make($image);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->seo_image = $path;
        }

        $successStory->is_highlight_list = $request->input('is_highlight_list_es') ? 1 : 0;
        $successStory->is_highlight_home = $request->input('is_highlight_home_es') ? 1 : 0;

        // save portuguese translation
        app()->setLocale('pt');

        $successStory->slug = $request->input('slug_pt');
        $successStory->title = $request->input('title_pt');
        $successStory->banner_home_title = $request->input('banner_home_title_pt');
        $successStory->description = $request->input('description_pt');
        $successStory->description_list = $request->input('description_list_pt');
        $successStory->content = $request->input('content_pt');
        $successStory->video_id = $request->input('video_id_pt');
        $successStory->brand = $request->input('brand_pt');
        $successStory->seo_title = $request->input('seo_title_pt');
        $successStory->seo_description = $request->input('seo_description_pt');

        if( !is_null($request->file('image_pt')) ) {
            $image = $request->file('image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/success-stories');
            $image = Image::make($image);
            $image->resize(430, 310, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->image = $path;
        }

        if( !is_null($request->file('desktop_banner_image_pt')) ) {
            $desktopBannerImage = $request->file('desktop_banner_image_pt');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/success-stories');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->desktop_banner_image = $path;
        }

        if( !is_null($request->file('mobile_banner_image_pt')) ) {
            $mobileBannerImage = $request->file('mobile_banner_image_pt');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/success-stories');
            $image = Image::make($mobileBannerImage);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->mobile_banner_image = $path;
        }

        if( !is_null($request->file('desktop_list_banner_image_pt')) ) {
            $desktopBannerImage = $request->file('desktop_list_banner_image_pt');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/success-stories');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 572, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->desktop_list_banner_image = $path;
        }

        if( !is_null($request->file('mobile_list_banner_image_pt')) ) {
            $mobileBannerImage = $request->file('mobile_list_banner_image_pt');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/success-stories');
            $image = Image::make($mobileBannerImage);
            $image->resize(1024, 755, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->mobile_list_banner_image = $path;
        }

        if( !is_null($request->file('seo_image_pt')) ) {
            $image = $request->file('seo_image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/success-stories');
            $image = Image::make($image);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->seo_image = $path;
        }

        $successStory->is_highlight_list = $request->input('is_highlight_list_pt') ? 1 : 0;
        $successStory->is_highlight_home = $request->input('is_highlight_home_pt') ? 1 : 0;

        if( $successStory->save() ) {
            $successStory->solutions()->sync($request->input('solutions'));

            DB::commit();

            return redirect()->route('success-stories.list')->withSuccess('Caso de éxito creado correctamente.');
        }

        DB::rollback();
    }

    public function edit(SuccessStory $successStory)
    {
        $solutions = Solution::all();

        return view('admin.success-stories.edit')
            ->with('solutions', $solutions)
            ->with('successStory', $successStory);
    }

    public function update(SuccessStoryUpdate $request, SuccessStory $successStory)
    {
        // save spanish translation
        app()->setLocale('es');

        $successStory->slug = $request->input('slug_es');
        $successStory->title = $request->input('title_es');
        $successStory->banner_home_title = $request->input('banner_home_title_es');
        $successStory->description = $request->input('description_es');
        $successStory->description_list = $request->input('description_list_es');
        $successStory->content = $request->input('content_es');
        $successStory->video_id = $request->input('video_id_es');
        $successStory->seo_title = $request->input('seo_title_es');
        $successStory->seo_description = $request->input('seo_description_es');

        $successStory->is_active = $request->input('is_active_es') ? 1 : 0;

        if( !is_null($request->file('image_es')) ) {
            if( !is_null($successStory->image) ) {
                Storage::disk('public_uploads')->delete($successStory->image);
            }

            $image = $request->file('image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/success-stories');
            $image = Image::make($image);
            $image->resize(430, 310, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->image = $path;
        }

        if( !is_null($request->file('desktop_banner_image_es')) ) {
            if( !is_null($successStory->desktop_banner_image) ) {
                Storage::disk('public_uploads')->delete($successStory->desktop_banner_image);
            }

            $desktopBannerImage = $request->file('desktop_banner_image_es');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/success-stories');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->desktop_banner_image = $path;
        }

        if( !is_null($request->file('mobile_banner_image_es')) ) {
            if( !is_null($successStory->mobile_banner_image) ) {
                Storage::disk('public_uploads')->delete($successStory->mobile_banner_image);
            }

            $mobileBannerImage = $request->file('mobile_banner_image_es');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/success-stories');
            $image = Image::make($mobileBannerImage);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->mobile_banner_image = $path;
        }

        if( !is_null($request->file('desktop_list_banner_image_es')) ) {
            if( !is_null($successStory->desktop_list_banner_image) ) {
                Storage::disk('public_uploads')->delete($successStory->desktop_list_banner_image);
            }

            $desktopBannerImage = $request->file('desktop_list_banner_image_es');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/success-stories');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 572, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->desktop_list_banner_image = $path;
        }

        if( !is_null($request->file('mobile_list_banner_image_es')) ) {
            if( !is_null($successStory->mobile_list_banner_image) ) {
                Storage::disk('public_uploads')->delete($successStory->mobile_list_banner_image);
            }

            $mobileBannerImage = $request->file('mobile_list_banner_image_es');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/success-stories');
            $image = Image::make($mobileBannerImage);
            $image->resize(1024, 755, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->mobile_list_banner_image = $path;
        }

        if( !is_null($request->file('seo_image_es')) ) {
            if( !is_null($successStory->seo_image) ) {
                Storage::disk('public_uploads')->delete($successStory->seo_image);
            }

            $image = $request->file('seo_image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/success-stories');
            $image = Image::make($image);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->seo_image = $path;
        }

        $successStory->brand = $request->input('brand_es');
        $successStory->is_highlight_list = $request->input('is_highlight_list_es') ? 1 : 0;
        $successStory->is_highlight_home = $request->input('is_highlight_home_es') ? 1 : 0;

        // save portuguese translation
        app()->setLocale('pt');

        $successStory->slug = $request->input('slug_pt');
        $successStory->title = $request->input('title_pt');
        $successStory->banner_home_title = $request->input('banner_home_title_pt');
        $successStory->description = $request->input('description_pt');
        $successStory->description_list = $request->input('description_list_pt');
        $successStory->content = $request->input('content_pt');
        $successStory->video_id = $request->input('video_id_pt');
        $successStory->seo_title = $request->input('seo_title_pt');
        $successStory->seo_description = $request->input('seo_description_pt');

        $successStory->is_active = $request->input('is_active_pt') ? 1 : 0;

        if( !is_null($request->file('image_pt')) ) {
            if( !is_null($successStory->image) ) {
                Storage::disk('public_uploads')->delete($successStory->image);
            }

            $image = $request->file('image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/success-stories');
            $image = Image::make($image);
            $image->resize(430, 310, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->image = $path;
        }

        if( !is_null($request->file('desktop_banner_image_pt')) ) {
            if( !is_null($successStory->desktop_banner_image) ) {
                Storage::disk('public_uploads')->delete($successStory->desktop_banner_image);
            }

            $desktopBannerImage = $request->file('desktop_banner_image_pt');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/success-stories');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->desktop_banner_image = $path;
        }

        if( !is_null($request->file('mobile_banner_image_pt')) ) {
            if( !is_null($successStory->mobile_banner_image) ) {
                Storage::disk('public_uploads')->delete($successStory->mobile_banner_image);
            }

            $mobileBannerImage = $request->file('mobile_banner_image_pt');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/success-stories');
            $image = Image::make($mobileBannerImage);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->mobile_banner_image = $path;
        }

        if( !is_null($request->file('desktop_list_banner_image_pt')) ) {
            if( !is_null($successStory->desktop_list_banner_image) ) {
                Storage::disk('public_uploads')->delete($successStory->desktop_list_banner_image);
            }

            $desktopBannerImage = $request->file('desktop_list_banner_image_pt');
            $extension = $desktopBannerImage->getClientOriginalExtension();
            $path = $desktopBannerImage->hashName('uploads/success-stories');
            $image = Image::make($desktopBannerImage);
            $image->resize(1440, 572, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->desktop_list_banner_image = $path;
        }

        if( !is_null($request->file('mobile_list_banner_image_pt')) ) {
            if( !is_null($successStory->mobile_list_banner_image) ) {
                Storage::disk('public_uploads')->delete($successStory->mobile_list_banner_image);
            }

            $mobileBannerImage = $request->file('mobile_list_banner_image_pt');
            $extension = $mobileBannerImage->getClientOriginalExtension();
            $path = $mobileBannerImage->hashName('uploads/success-stories');
            $image = Image::make($mobileBannerImage);
            $image->resize(1024, 755, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->mobile_list_banner_image = $path;
        }

        if( !is_null($request->file('seo_image_pt')) ) {
            if( !is_null($successStory->seo_image) ) {
                Storage::disk('public_uploads')->delete($successStory->seo_image);
            }

            $image = $request->file('seo_image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/success-stories');
            $image = Image::make($image);
            $image->resize(1440, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $successStory->seo_image = $path;
        }

        $successStory->brand = $request->input('brand_pt');
        $successStory->is_highlight_list = $request->input('is_highlight_list_pt') ? 1 : 0;
        $successStory->is_highlight_home = $request->input('is_highlight_home_pt') ? 1 : 0;

        $successStory->solutions()->sync($request->input('solutions'));

        if( $successStory->save() ) {
            return redirect()->route('success-stories.edit', $successStory)->withSuccess('Caso de éxito actualizado correctamente.');
        }
    }

    public function destroy(SuccessStory $successStory)
    {
        $successStory->delete();

        return redirect()->route('success-stories.list')->withSuccess('Caso de éxito borrado correctamente.');
    }

    // AJAX
    public function ajaxList(Request $request)
    {
        $administrators = SuccessStory::query()->where('id', '!=', Auth::guard('admin')->user()->id)->get();

        return DataTables::of($administrators)
            ->setTransformer(new SuccessStoryTransformer)
            ->make(true);
    }
}
