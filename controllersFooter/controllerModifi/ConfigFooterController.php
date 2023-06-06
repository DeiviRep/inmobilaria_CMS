<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ConfigFooter;
use App\Pagina;
use Session;
use Illuminate\Support\Facades\Redirect;

class ConfigFooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $pagina = DB::table('users')
            ->where('current_page', '=', auth()->user()->current_page)
            ->first();

        $current_page = $pagina->{'current_page'};

        $footer = DB::table('config_footer')
            ->where('idpagina', '=', $current_page)
            ->first();

        $bacground = $footer->{"color"};

        $paginaactiva = DB::table('pagina')
            ->where('id', '=', auth()->user()->current_page)
            ->first();

        return view('admin.footer.index', compact('footer', 'bacground', 'paginaactiva'));
    }

    function update_footer(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'color' => 'max:50',
            'background' => 'max:50',
            'cr' => 'max:150',
            'direccion' => 'max:250',
            'telefono' => 'max:15|min:7',
            'correo' => 'max:150|email',
            'horarios' => 'max:50',
        ]);

        $footer = ConfigFooter::findOrFail($id);
        $footer->color = $request->get('color');
        $footer->background = $request->get('background');
        $footer->cr = $request->get('cr');
        $footer->direccion = $request->get('direccion');
        $footer->telefono = $request->get('telefono');
        $footer->correo = $request->get('correo');
        $footer->horarios = $request->get('horarios');

        //    $footer->facebook = $request->get('facebook');
        //    $footer->instagram = $request->get('instagram');
        //    $footer->whatsapp = $request->get('whatsapp');
        //    $footer->youtube = $request->get('youtube');
        //    $footer->tiktok = $request->get('tiktok');
        //    $footer->twitter = $request->get('twitter');
        foreach (['facebook', 'instagram', 'whatsapp', 'youtube', 'tiktok', 'twitter'] as $redSocial) {
            $getSocial = $request->get($redSocial);
            if (!is_null($getSocial)) {
                $footer->$redSocial = $getSocial;
            } else {
                $socialVacio = 'vacio';
                $footer->$redSocial = $socialVacio;
            }
        }
        $footer->update();
        return Redirect::to('admin/configuracion/footer');
    }
}
