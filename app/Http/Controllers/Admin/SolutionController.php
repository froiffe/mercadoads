<?php

namespace App\Http\Controllers\Admin;

use App\Type;
use App\Solution;
use App\Characteristic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Fractal\Facades\Fractal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SolutionCreate;
use App\Http\Requests\SolutionUpdate;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Transformers\SolutionTransformer;

class SolutionController extends Controller
{
    public function list(Request $request)
    {
        return view('admin.solutions.list');
    }

    public function create()
    {
        $solutions = Solution::all();
        $characteristics = Characteristic::all();
        $types = Type::all();

        return view('admin.solutions.create')
            ->with('solutions', $solutions)
            ->with('types', $types)
            ->with('characteristics', $characteristics);
    }

    public function store(SolutionCreate $request)
    {
        DB::beginTransaction();

        $solution = new Solution;

        // save spanish translation
        app()->setLocale('es');

        $solution->slug = $request->input('slug_es');
        $solution->title = $request->input('title_es');
        $solution->subtitle = $request->input('subtitle_es');
        $solution->description = $request->input('description_es');
        $solution->description_list = $request->input('description_list_es');
        $solution->characteristics_text = $request->input('characteristics_text_es');

        if( !is_null($request->file('image_es')) ) {
            $image = $request->file('image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/solutions');
            $image = Image::make($image);
            $image->resize(394, 294, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $solution->image = $path;
        }

        if( !is_null($request->file('image_desktop_es')) ) {
            $desktopBannerImage = $request->file('image_desktop_es');
            $path = $desktopBannerImage->hashName('uploads/solutions');

            if( $desktopBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $desktopBannerImage);
            }
            else {
                $image = Image::make($desktopBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_desktop = $path;
        }

        if( !is_null($request->file('image_webmobile_es')) ) {
            $mobileBannerImage = $request->file('image_webmobile_es');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }
            else {
                $image = Image::make($mobileBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_webmobile = $path;
        }

        if( !is_null($request->file('image_app_es')) ) {
            $mobileBannerImage = $request->file('image_app_es');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }
            else {
                $image = Image::make($mobileBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_app = $path;
        }

        // video
        if( !is_null($request->file('video_desktop_es')) ) {
            $desktopBannerImage = $request->file('video_desktop_es');
            $path = $desktopBannerImage->hashName('uploads/solutions');

            if( $desktopBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $desktopBannerImage);
            }

            $solution->video_desktop = $path;
        }

        if( !is_null($request->file('video_webmobile_es')) ) {
            $mobileBannerImage = $request->file('video_webmobile_es');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }

            $solution->video_webmobile = $path;
        }

        if( !is_null($request->file('video_app_es')) ) {
            $mobileBannerImage = $request->file('video_app_es');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }

            $solution->video_app = $path;
        }

        $solution->image_default = $request->input('image_default_es');

        if( !is_null($request->file('specs_file_es')) ) {
            $extension = $request->file('specs_file_es')->getClientOriginalExtension();
            $filename = $solution->slug.'_es.'.$extension;

            $path = Storage::disk('public_uploads')->putFileAs('solutions', $request->file('specs_file_es'), $filename);

            $solution->specs_file = 'uploads/'.$path;
        }

        $solution->seo_title = $request->input('seo_title_es');
        $solution->seo_description = $request->input('seo_description_es');

        if( !is_null($request->file('seo_image_es')) ) {
            $image = $request->file('seo_image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/solutions');
            $image = Image::make($image);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $solution->seo_image = $path;
        }

        // save portuguese translation
        app()->setLocale('pt');

        $solution->slug = $request->input('slug_pt');
        $solution->title = $request->input('title_pt');
        $solution->subtitle = $request->input('subtitle_pt');
        $solution->description = $request->input('description_pt');
        $solution->characteristics_text = $request->input('characteristics_text_pt');
        $solution->description_list = $request->input('description_list_pt');

        if( !is_null($request->file('image_pt')) ) {
            $image = $request->file('image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/solutions');
            $image = Image::make($image);
            $image->resize(394, 294, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $solution->image = $path;
        }

        if( !is_null($request->file('image_desktop_pt')) ) {
            $desktopBannerImage = $request->file('image_desktop_pt');
            $path = $desktopBannerImage->hashName('uploads/solutions');

            if( $desktopBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $desktopBannerImage);
            }
            else {
                $image = Image::make($desktopBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_desktop = $path;
        }

        if( !is_null($request->file('image_webmobile_pt')) ) {
            $mobileBannerImage = $request->file('image_webmobile_pt');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }
            else {
                $image = Image::make($mobileBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_webmobile = $path;
        }

        if( !is_null($request->file('image_app_pt')) ) {
            $mobileBannerImage = $request->file('image_app_pt');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }
            else {
                $image = Image::make($mobileBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_app = $path;
        }

        $solution->image_default = $request->input('image_default_pt');

        // video
        if( !is_null($request->file('video_desktop_pt')) ) {
            $desktopBannerImage = $request->file('video_desktop_pt');
            $path = $desktopBannerImage->hashName('uploads/solutions');

            if( $desktopBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $desktopBannerImage);
            }

            $solution->video_desktop = $path;
        }

        if( !is_null($request->file('video_webmobile_pt')) ) {
            $mobileBannerImage = $request->file('video_webmobile_pt');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }

            $solution->video_webmobile = $path;
        }

        if( !is_null($request->file('video_app_pt')) ) {
            $mobileBannerImage = $request->file('video_app_pt');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }

            $solution->video_app = $path;
        }

        if( !is_null($request->file('specs_file_pt')) ) {
            $extension = $request->file('specs_file_pt')->getClientOriginalExtension();
            $filename = $solution->slug.'_pt.'.$extension;

            $path = Storage::disk('public_uploads')->putFileAs('solutions', $request->file('specs_file_pt'), $filename);
            $solution->specs_file = 'uploads/'.$path;
        }

        $solution->seo_title = $request->input('seo_title_pt');
        $solution->seo_description = $request->input('seo_description_pt');

        if( !is_null($request->file('seo_image_pt')) ) {
            $image = $request->file('seo_image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/solutions');
            $image = Image::make($image);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $solution->seo_image = $path;
        }

        $solution->position = $request->input('position');
        $solution->category = $request->input('category');

        if( $solution->save() ) {
            $solution->solutionsRelated()->sync($request->input('solutions'));
            $solution->characteristics()->sync($request->input('characteristics'));
            $solution->types()->sync($request->input('types'));

            DB::commit();

            return redirect()->route('solutions.list')->withSuccess('Formato creado correctamente.');
        }

        DB::rollback();
    }

    public function edit(Solution $solution)
    {
        $solutions = Solution::where('id', '!=', $solution->id)->get();
        $characteristics = Characteristic::all();
        $types = Type::all();

        return view('admin.solutions.edit')
            ->with('solutions', $solutions)
            ->with('characteristics', $characteristics)
            ->with('types', $types)
            ->with('solution', $solution);
    }

    public function update(SolutionUpdate $request, Solution $solution)
    {
        // save spanish translation
        app()->setLocale('es');

        $solution->slug = $request->input('slug_es');
        $solution->title = $request->input('title_es');
        $solution->subtitle = $request->input('subtitle_es');
        $solution->description = $request->input('description_es');
        $solution->description_list = $request->input('description_list_es');
        $solution->characteristics_text = $request->input('characteristics_text_es');

        if( is_null($request->input('has_image_es')) && !is_null($solution->{'image:es'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image:es'}));
            $solution->image = null;
        }

        if( !is_null($request->file('image_es')) ) {
            if( !is_null($solution->{'image:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image:es'}));
            }

            $image = $request->file('image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/solutions');

            $image = Image::make($image);
            $image->resize(394, 294, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $solution->image = $path;
        }

        if( is_null($request->input('has_image_desktop_es')) && !is_null($solution->{'image_desktop:es'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_desktop:es'}));
            $solution->image_desktop = null;
        }

        if( !is_null($request->file('image_desktop_es')) ) {
            if( !is_null($solution->{'image_desktop:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_desktop:es'}));
            }

            $desktopBannerImage = $request->file('image_desktop_es');
            $path = $desktopBannerImage->hashName('uploads/solutions');

            if( $desktopBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $desktopBannerImage);
            }
            else {
                $desktopBannerImage = $request->file('image_desktop_es');
                $image = Image::make($desktopBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_desktop = $path;
        }

        if( is_null($request->input('has_image_webmobile_es')) && !is_null($solution->{'image_webmobile:es'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_webmobile:es'}));
            $solution->image_webmobile = null;
        }

        if( !is_null($request->file('image_webmobile_es')) ) {
            if( !is_null($solution->{'image_webmobile:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_webmobile:es'}));
            }

            $mobileBannerImage = $request->file('image_webmobile_es');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }
            else {
                $image = Image::make($mobileBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_webmobile = $path;
        }

        if( is_null($request->input('has_image_app_es')) && !is_null($solution->{'image_app:es'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_app:es'}));
            $solution->image_app = null;
        }

        if( !is_null($request->file('image_app_es')) ) {
            if( !is_null($solution->{'image_app:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_app:es'}));
            }

            $mobileBannerImage = $request->file('image_app_es');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }
            else {
                $image = Image::make($mobileBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_app = $path;
        }

        // video
        if( is_null($request->input('has_video_desktop_es')) && !is_null($solution->{'video_desktop:es'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_desktop:es'}));
            $solution->video_desktop = null;
        }

        if( !is_null($request->file('video_desktop_es')) ) {
            if( !is_null($solution->{'video_desktop:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_desktop:es'}));
            }

            $desktopBannerImage = $request->file('video_desktop_es');
            $path = $desktopBannerImage->hashName('uploads/solutions');

            if( $desktopBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $desktopBannerImage);
            }

            $solution->video_desktop = $path;
        }

        if( is_null($request->input('has_video_webmobile_es')) && !is_null($solution->{'video_webmobile:es'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_webmobile:es'}));
            $solution->video_webmobile = null;
        }

        if( !is_null($request->file('video_webmobile_es')) ) {
            if( !is_null($solution->{'video_webmobile:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_webmobile:es'}));
            }

            $mobileBannerImage = $request->file('video_webmobile_es');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }

            $solution->video_webmobile = $path;
        }

        if( is_null($request->input('has_video_app_es')) && !is_null($solution->{'video_app:es'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_app:es'}));
            $solution->video_app = null;
        }

        if( !is_null($request->file('video_app_es')) ) {
            if( !is_null($solution->{'video_app:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_app:es'}));
            }

            $mobileBannerImage = $request->file('video_app_es');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }

            $solution->video_app = $path;
        }

        $solution->image_default = $request->input('image_default_es');

        if( is_null($request->input('has_specs_file_es')) && !is_null($solution->{'specs_file:es'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'specs_file:es'}));
            $solution->specs_file = null;
        }

        if( !is_null($request->file('specs_file_es')) ) {
            if( !is_null($solution->{'specs_file:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'specs_file:es'}));
            }

            $extension = $request->file('specs_file_es')->getClientOriginalExtension();
            $filename = $solution->slug.'_es.'.$extension;

            $path = Storage::disk('public_uploads')->putFileAs('solutions', $request->file('specs_file_es'), $filename);

            $solution->specs_file = 'uploads/'.$path;
        }

        $solution->seo_title = $request->input('seo_title_es');
        $solution->seo_description = $request->input('seo_description_es');

        if( !is_null($request->file('seo_image_es')) ) {
            if( !is_null($solution->{'seo_image:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'seo_image:es'}));
            }
            $image = $request->file('seo_image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/solutions');
            $image = Image::make($image);
            $image->resize(1920, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $solution->seo_image = $path;
        }

        // save portuguese translation
        app()->setLocale('pt');

        $solution->slug = $request->input('slug_pt');
        $solution->title = $request->input('title_pt');
        $solution->subtitle = $request->input('subtitle_pt');
        $solution->description = $request->input('description_pt');
        $solution->description_list = $request->input('description_list_pt');
        $solution->characteristics_text = $request->input('characteristics_text_pt');

        if( is_null($request->input('has_image_pt')) && !is_null($solution->{'image:pt'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image:pt'}));
            $solution->image = null;
        }

        if( !is_null($request->file('image_pt')) ) {
            if( !is_null($solution->{'image:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image:pt'}));
            }

            $image = $request->file('image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/solutions');
            $image = Image::make($image);
            $image->resize(394, 294, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $solution->image = $path;
        }

        if( is_null($request->input('has_image_desktop_pt')) && !is_null($solution->{'image_desktop:pt'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_desktop:pt'}));
            $solution->image_desktop = null;
        }

        if( !is_null($request->file('image_desktop_pt')) ) {
            if( !is_null($solution->{'image_desktop:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_desktop:pt'}));
            }

            $desktopBannerImage = $request->file('image_desktop_pt');
            $path = $desktopBannerImage->hashName('uploads/solutions');

            if( $desktopBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $desktopBannerImage);
            }
            else {
                $image = Image::make($desktopBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_desktop = $path;
        }

        if( is_null($request->input('has_image_webmobile_pt')) && !is_null($solution->{'image_webmobile:pt'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_webmobile:pt'}));
            $solution->image_webmobile = null;
        }

        if( !is_null($request->file('image_webmobile_pt')) ) {
            if( !is_null($solution->{'image_webmobile:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_webmobile:pt'}));
            }

            $mobileBannerImage = $request->file('image_webmobile_pt');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }
            else {
                $image = Image::make($mobileBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_webmobile = $path;
        }

        if( is_null($request->input('has_image_app_pt')) && !is_null($solution->{'image_app:pt'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_app:pt'}));
            $solution->image_app = null;
        }

        if( !is_null($request->file('image_app_pt')) ) {
            if( !is_null($solution->{'image_app:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'image_app:pt'}));
            }

            $mobileBannerImage = $request->file('image_app_pt');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'gif' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }
            else {
                $image = Image::make($mobileBannerImage);
                $image->resize(null, 720, function ($constraint) {
                    $constraint->aspectRatio();
                });

                Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());
            }

            $solution->image_app = $path;
        }

        // video
        if( is_null($request->input('has_video_desktop_pt')) && !is_null($solution->{'video_desktop:pt'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_desktop:pt'}));
            $solution->video_desktop = null;
        }

        if( !is_null($request->file('video_desktop_pt')) ) {
            if( !is_null($solution->{'video_desktop:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_desktop:pt'}));
            }

            $desktopBannerImage = $request->file('video_desktop_pt');
            $path = $desktopBannerImage->hashName('uploads/solutions');

            if( $desktopBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $desktopBannerImage);
            }

            $solution->video_desktop = $path;
        }

        if( is_null($request->input('has_video_webmobile_pt')) && !is_null($solution->{'video_webmobile:pt'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_webmobile:pt'}));
            $solution->video_webmobile = null;
        }

        if( !is_null($request->file('video_webmobile_pt')) ) {
            if( !is_null($solution->{'video_webmobile:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_webmobile:pt'}));
            }

            $mobileBannerImage = $request->file('video_webmobile_pt');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }

            $solution->video_webmobile = $path;
        }

        if( is_null($request->input('has_video_app_pt')) && !is_null($solution->{'video_app:pt'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_app:pt'}));
            $solution->video_app = null;
        }

        if( !is_null($request->file('video_app_pt')) ) {
            if( !is_null($solution->{'video_app:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'video_app:pt'}));
            }

            $mobileBannerImage = $request->file('video_app_pt');
            $path = $mobileBannerImage->hashName('uploads/solutions');

            if( $mobileBannerImage->getClientOriginalExtension() == 'mp4' ) {
                Storage::disk('public_uploads')->putFile('solutions', $mobileBannerImage);
            }

            $solution->video_app = $path;
        }

        $solution->image_default = $request->input('image_default_pt');

        if( is_null($request->input('has_specs_file_pt')) && !is_null($solution->{'specs_file:pt'}) ) {
            Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'specs_file:pt'}));
            $solution->specs_file = null;
        }

        if( !is_null($request->file('specs_file_pt')) ) {
            if( !is_null($solution->{'specs_file:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'specs_file:pt'}));
            }

            $extension = $request->file('specs_file_pt')->getClientOriginalExtension();
            $filename = $solution->slug.'_pt.'.$extension;

            $path = Storage::disk('public_uploads')->putFileAs('solutions', $request->file('specs_file_pt'), $filename);

            $solution->specs_file = 'uploads/'.$path;
        }

        $solution->seo_title = $request->input('seo_title_pt');
        $solution->seo_description = $request->input('seo_description_pt');

        if( !is_null($request->file('seo_image_pt')) ) {
            if( !is_null($solution->{'seo_image:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $solution->{'seo_image:pt'}));
            }
            $image = $request->file('seo_image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/solutions');
            $image = Image::make($image);
            $image->resize(1920, 783, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $solution->seo_image = $path;
        }

        $solution->solutionsRelated()->sync($request->input('solutions'));
        $solution->characteristics()->sync($request->input('characteristics'));
        $solution->types()->sync($request->input('types'));
        $solution->position = $request->input('position');
        $solution->category = $request->input('category');

        if( $solution->save() ) {
            return redirect()->route('solutions.edit', $solution)->withSuccess('Formato actualizado correctamente.');
        }
    }

    public function destroy(Solution $solution)
    {
        $solution->delete();

        return redirect()->route('solutions.list')->withSuccess('Formato borrado correctamente.');
    }

    // AJAX
    public function ajaxList(Request $request)
    {
        $administrators = Solution::query()->where('id', '!=', Auth::guard('admin')->user()->id)->get();

        return DataTables::of($administrators)
            ->setTransformer(new SolutionTransformer)
            ->make(true);
    }
}
