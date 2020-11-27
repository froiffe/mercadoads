<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Exports\ContactsExport;
use Illuminate\Support\Facades\DB;
use Spatie\Fractal\Facades\Fractal;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactCreate;
use App\Http\Requests\ContactUpdate;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Transformers\ContactTransformer;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function list(Request $request)
    {
        return view('admin.contacts.list');
    }

    // public function create()
    // {
    //     return view('admin.contacts.create');
    // }

    // public function store(ContactCreate $request)
    // {
    //     DB::beginTransaction();

    //     $contact = new Contact;

    //     // save spanish translation
    //     app()->setLocale('es');

    //     // $contact->slug = $request->input('slug_es');
    //     $contact->seo_title = $request->input('seo_title_es');
    //     $contact->seo_description = $request->input('seo_description_es');

    //     if( !is_null($request->file('seo_image_es')) ) {
    //         $image = $request->file('seo_image_es');
    //         $extension = $image->getClientOriginalExtension();
    //         $path = $image->hashName('uploads/pages');
    //         $image = Image::make($image);
    //         $image->fit(1920, 783, function ($constraint) {
    //             $constraint->aspectRatio();
    //         });

    //         Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

    //         $contact->seo_image = $path;
    //     }

    //     // save portuguese translation
    //     app()->setLocale('pt');

    //     // $contact->slug = $request->input('slug_pt');
    //     $contact->seo_title = $request->input('seo_title_pt');
    //     $contact->seo_description = $request->input('seo_description_pt');

    //     if( !is_null($request->file('seo_image_pt')) ) {
    //         $image = $request->file('seo_image_pt');
    //         $extension = $image->getClientOriginalExtension();
    //         $path = $image->hashName('uploads/pages');
    //         $image = Image::make($image);
    //         $image->fit(1920, 783, function ($constraint) {
    //             $constraint->aspectRatio();
    //         });

    //         Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

    //         $contact->seo_image = $path;
    //     }

    //     $contact->name = $request->input('name');

    //     if( $contact->save() ) {
    //         DB::commit();

    //         return redirect()->route('pages.list')->withSuccess('Contacto creada correctamente.');
    //     }

    //     DB::rollback();
    // }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show')
            ->with('contact', $contact);
    }

    // public function edit(Contact $contact)
    // {
    //     return view('admin.contacts.edit')
    //         ->with('page', $contact);
    // }

    // public function update(ContactUpdate $request, Contact $contact)
    // {
    //     // save spanish translation
    //     app()->setLocale('es');

    //     // $contact->slug = $request->input('slug_es');
    //     $contact->seo_title = $request->input('seo_title_es');
    //     $contact->seo_description = $request->input('seo_description_es');

    //     if( !is_null($request->file('seo_image_es')) ) {
    //         if( !is_null($contact->{'seo_image:es'}) ) {
    //             Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $contact->{'seo_image:es'}));
    //         }

    //         $image = $request->file('seo_image_es');
    //         $extension = $image->getClientOriginalExtension();
    //         $path = $image->hashName('uploads/pages');

    //         $image = Image::make($image);
    //         $image->fit(1920, 783, function ($constraint) {
    //             $constraint->aspectRatio();
    //         });

    //         Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

    //         $contact->seo_image = $path;
    //     }

    //     // save portuguese translation
    //     app()->setLocale('pt');

    //     // $contact->slug = $request->input('slug_pt');
    //     $contact->seo_title = $request->input('seo_title_pt');
    //     $contact->seo_description = $request->input('seo_description_pt');

    //     if( !is_null($request->file('seo_image_pt')) ) {
    //         if( !is_null($contact->{'seo_image:pt'}) ) {
    //             Storage::disk('public_uploads')->delete(str_replace('uploads/', '', $contact->{'seo_image:pt'}));
    //         }

    //         $image = $request->file('seo_image_pt');
    //         $extension = $image->getClientOriginalExtension();
    //         $path = $image->hashName('uploads/pages');
    //         $image = Image::make($image);
    //         $image->fit(1920, 783, function ($constraint) {
    //             $constraint->aspectRatio();
    //         });

    //         Storage::disk('public_uploads')->put(str_replace('uploads/', '', $path), (string) $image->encode());

    //         $contact->seo_image = $path;
    //     }

    //     // $contact->name = $request->input('name');

    //     if( $contact->save() ) {
    //         return redirect()->route('pages.edit', $contact)->withSuccess('Contacto actualizado correctamente.');
    //     }
    // }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('pages.list')->withSuccess('Contacto borrado correctamente.');
    }

    public function export(Request $request)
    {
        return Excel::download(new ContactsExport, 'contactos al '. date('d-m-Y') .'.xlsx');
    }

    // AJAX
    public function ajaxList(Request $request)
    {
        $contacts = Contact::query()->get();

        return DataTables::of($contacts)
            ->setTransformer(new ContactTransformer)
            ->make(true);
    }
}
