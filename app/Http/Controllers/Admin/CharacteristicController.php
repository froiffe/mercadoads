<?php

namespace App\Http\Controllers\Admin;

use App\Characteristic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Fractal\Facades\Fractal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\CharacteristicCreate;
use App\Http\Requests\CharacteristicUpdate;
use App\Transformers\CharacteristicTransformer;

class CharacteristicController extends Controller
{
    public function list(Request $request)
    {
        return view('admin.characteristics.list');
    }

    public function create()
    {
        return view('admin.characteristics.create');
    }

    public function store(CharacteristicCreate $request)
    {
        DB::beginTransaction();

        $characteristic = new Characteristic;
        $characteristic->key = $request->input('key');

        // save spanish translation
        app()->setLocale('es');

        $characteristic->title = $request->input('title_es');
        $characteristic->description = $request->input('description_es');

        if( !is_null($request->file('image_es')) ) {
            $image = $request->file('image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/characteristics');
            $image = Image::make($image);
            $image->resize(60, 60, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $characteristic->image = $path;
        }

        // save portuguese translation
        app()->setLocale('pt');

        $characteristic->title = $request->input('title_pt');
        $characteristic->description = $request->input('description_pt');

        if( !is_null($request->file('image_pt')) ) {
            $image = $request->file('image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/characteristics');
            $image = Image::make($image);
            $image->resize(60, 60, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $characteristic->image = $path;
        }

        $characteristic->position = $request->input('position');

        if( $characteristic->save() ) {
            DB::commit();

            return redirect()->route('characteristics.list')->withSuccess('Característica creada correctamente.');
        }

        DB::rollback();
    }

    public function edit(Characteristic $characteristic)
    {
        return view('admin.characteristics.edit')
            ->with('characteristic', $characteristic);
    }

    public function update(CharacteristicUpdate $request, Characteristic $characteristic)
    {
        $characteristic->key = $request->input('key');

        // save spanish translation
        app()->setLocale('es');

        $characteristic->title = $request->input('title_es');
        $characteristic->description = $request->input('description_es');

        if( !is_null($request->file('image_es')) ) {
            if( !is_null($characteristic->{'image:es'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $characteristic->{'image:es'}));
            }

            $image = $request->file('image_es');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/characteristics');

            $image = Image::make($image);
            $image->resize(60, 60, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $characteristic->image = $path;
        }

        // save portuguese translation
        app()->setLocale('pt');

        $characteristic->title = $request->input('title_pt');
        $characteristic->description = $request->input('description_pt');

        if( !is_null($request->file('image_pt')) ) {
            if( !is_null($characteristic->{'image:pt'}) ) {
                Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $characteristic->{'image:pt'}));
            }

            $image = $request->file('image_pt');
            $extension = $image->getClientOriginalExtension();
            $path = $image->hashName('uploads/characteristics');
            $image = Image::make($image);
            $image->resize(60, 60, function ($constraint) {
                $constraint->aspectRatio();
            });

            Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

            $characteristic->image = $path;
        }

        $characteristic->position = $request->input('position');

        if( $characteristic->save() ) {
            return redirect()->route('characteristics.edit', $characteristic)->withSuccess('Característica actualizada correctamente.');
        }
    }

    public function destroy(Characteristic $characteristic)
    {
        $characteristic->delete();

        return redirect()->route('characteristics.list')->withSuccess('Característica borrada correctamente.');
    }

    // AJAX
    public function ajaxList(Request $request)
    {
        $characteristics = Characteristic::query()->get();

        return DataTables::of($characteristics)
            ->setTransformer(new CharacteristicTransformer)
            ->make(true);
    }
}
