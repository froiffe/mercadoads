<?php

namespace App\Http\Controllers;

use App\Page;
use App\Contact;
use App\Insight;
use App\SuccessStory;
use App\Mail\NewContact;
use App\Mail\NewContactProductAds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\ContactCreate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function home()
    {
        $successStory = SuccessStory::join('success_story_translations', 'success_stories.id', '=', 'success_story_translations.success_story_id')
            ->where('success_story_translations.is_active', 1)
            ->where('success_story_translations.is_highlight_home', 1)
            ->where('locale', app()->getLocale())
            ->select('success_stories.*')
            ->first();

        $insights = Insight::join('insight_translations', 'insights.id', '=', 'insight_translations.insight_id')
            ->where('insight_translations.is_active', 1)
            ->where('insight_translations.is_highlight_home', 1)
            ->where('locale', app()->getLocale())
            ->select('insights.*')
            ->get();

        return view('home')
            ->with('successStory', $successStory)
            ->with('insights', $insights)
            ->with('page', Page::where('name', 'Home')->first());
    }

    public function whyMeli()
    {
        return view('why-meli')
            ->with('page', Page::where('name', 'Por qué nosotros')->first());
    }

    public function contact()
    {
        return view('contact')
            ->with('page', Page::where('name', 'Contacto')->first());
    }

    public function changeLanguage(Request $request)
    {
        $locale = $request->input('locale');
        Session::put('locale', $locale);
        app()->setLocale($locale);

        $routeName = app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName();

        return redirect( trans('routes.' . $routeName) );
    }

    public function landingAwards2020(){
        return view('landings.awards2020');        
    }

    public function contactSuccess(Request $request)
    {
        $input = $request->all();
        $data['investment'] = (isset($input['investment']) && $input['investment']==true) ? true : false;
        if (app()->getLocale()!='pt'){
            $data['site'] = (isset($input['pais']) && $input['pais']!='Otro') ? $this->getSiteByCountryName($input['pais']) : '';
        }else{
            $data['site'] = $this->getSiteByCountryName('Brasil');
        }
        
        $routeName = app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName();
        if( $routeName == 'contact' ) {
            return view('contact-success',$data)
                ->with('page', Page::where('name', 'Contacto')->first());
        }

        abort(404);
    }

    // AJAX
    public function doContact(ContactCreate $request)
    {
        $contact = new Contact;

        $contact->locale = app()->getLocale();
        $contact->form = $request->input('form');
        $contact->name = $request->input('name');
        // $contact->lastname = $request->input('lastname');
        $contact->email = $request->input('email');
        // $contact->area_code = $request->input('area_code');
        // $contact->telephone = $request->input('telephone');
        $contact->business = $request->input('business');
        // $contact->business_type = $request->input('business_type');
        $contact->country = $request->input('country') ? $request->input('country') : null;
        // $contact->industry_type = $request->input('industry_type');
        $contact->investment = $request->input('investment');
        $contact->message = $request->input('message');
        $secret = env('RECAPTCHA_SECRET');
        $response = $request->input('captcha');

        $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response);
        $captcha_success = json_decode($verify);

        $param_investment = false;

        if( $captcha_success->success == false ) {
            //This user was not verified by recaptcha.
            return response()->json([
                'success' => false,
                'captcha_error' => trans('contact/general.captcha-error'),
                'url' => url(trans('routes.contact'))
            ]);
        }
        elseif( $captcha_success->success == true ) {
            //This user is verified by recaptcha
            if( $contact->save() ) {
                if( !is_null(env('CONTACT_EMAIL')) && env('CONTACT_EMAIL') != '' ) {
//                    Mail::to(env('CONTACT_EMAIL'))->send(new NewContact($contact));
                    // Me fijo si la inversión es menos que...
                    if (strpos($contact->investment, 'Menos') !== false) {
                        $data['country'] = $contact->country;
                        $data['site'] = ($contact->country != 'Otro') ? $this->getSiteByCountryName($contact->country) : '';
                        Mail::to($contact->email)->send(new NewContactProductAds($data));
                        $param_investment = true;
                    }
                }

                return response()->json([
                    'success' => true,
                    'country' => $request->input('country'),
                    'param_investment' => $param_investment,
                    'url' => $contact->form == 'advertiser' ? url(trans('routes.contact-success')) : url(trans('routes.contact-success-agency'))
                ]);
            }
        }

        return response()->json(false);
    }

    public function getSiteByCountryName($country){
        switch ($country){
            case 'Argentina':
                return 'https://ads.mercadolibre.com.ar/productAds';
            break;
            case 'Brasil': 
                return 'https://ads.mercadolivre.com.br/productAds';
            break;
            case 'Chile': 
                return 'https://ads.mercadolibre.cl/productAds';
            break;
            case 'México': 
                return 'https://ads.mercadolibre.com.mx/productAds';
            break;
            case 'Perú': 
                return 'https://ads.mercadolibre.com.pe/productAds';
            break;
            case 'Uruguay': 
                return 'https://ads.mercadolibre.com.uy/productAds';
            break;
            case 'Colombia': 
                return 'https://ads.mercadolibre.com.co/productAds';
            break;
            
        }
    }
}
