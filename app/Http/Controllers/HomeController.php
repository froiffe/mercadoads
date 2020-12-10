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
        $data['google_calendar_button'] = (app()->getLocale()=='es') ? 'https://www.google.com/calendar/render?action=TEMPLATE&text=Mercado+Ads+Awards&dates=20201217T170000Z/20201217T180000Z&details=Mercado+Ads+Awards+es+la+primera+entrega+de+premios+de+publicidad+en+un+e-commerce.+Es+nuestra+manera+de+celebrar+las+mejores+estrategias+publicitarias+del+año+y+de+seguir+potenciando+el+negocio+de+marcas,+agencias+y+vendedores+en+la+plataforma+N°1+de+Latinoamérica.+Mirá+el+Stream+el+17/12/20+en+' . url(trans('routes.landings.awards2020')) . '+o+a+través+de+nuestro+perfil+de+linkedin+' . url(trans('routes.linkedin-url')) . '.&sf=true&output=xml' : 'https://www.google.com/calendar/render?action=TEMPLATE&text=Mercado+Ads+Awards&dates=20201217T170000Z/20201217T180000Z&details=Mercado+Ads+Awards+é+a+primeira+entrega+de+prêmios+de+publicidade+em+um+e-commerce.+É+a+nossa+maneira+de+celebrar+as+melhores+estratégias+publicitárias+do+ano+e+de+continuar+potencializando+os+negócios+de+marcas,+agências+e+vendedores+na+plataforma+N°1+da+América+Latina.+Veja+o+Stream+de+17/12/20+no+' . url(trans('routes.landings.awards2020')) . '+ou+através+do+nosso+perfil+no+LinkedIn+' . url(trans('routes.linkedin-url')) . '.&sf=true&output=xml';      

        $data['lang_text']  = $this->getLanguageDataText(app()->getLocale());
        $data['local_lang']  = app()->getLocale();

        return view('landings.awards2020',$data);
    }

    public function landingGanadores2020(){
        return view('landings.ganadores2020');        
    }

    public function getLanguageDataText(String $lang){
        $data_text = [];
        if ($lang == 'es'){
            $data_text['text-01'] = 'FALTAN';
            $data_text['text-02'] = 'DÍAS';
            $data_text['text-03'] = 'HORAS';
            $data_text['text-04'] = 'MIN';
            $data_text['text-05'] = 'SEG';
            $data_text['text-06'] = 'PARA CONOCER LAS MEJORES<br> ESTRATEGIAS PUBLICITARIAS DEL AÑO';
            $data_text['text-07'] = 'Agendar en mi calendario';
            $data_text['text-08'] = '<b>14 a 15 HS</b> AR | CL | UY <br><b>12 a 13 HS</b> CO<br><b>11 a 12 HS</b> MX';
            $data_text['text-09'] = 'dic';
        }else{
            $data_text['text-01'] = 'FALTAM';
            $data_text['text-02'] = 'DIAS';
            $data_text['text-03'] = 'HORAS';
            $data_text['text-04'] = 'MIN';
            $data_text['text-05'] = 'SEG';
            $data_text['text-06'] = 'PARA CONHECER AS MELHORES<br> ESTRATÉGIAS DE PUBLICIDADE DO ANO';
            $data_text['text-07'] = 'Agendar no meu calendário ';
            $data_text['text-08'] = '<b>14 a 15 HS</b>';
            $data_text['text-09'] = 'dez';
        }

        return $data_text;
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
