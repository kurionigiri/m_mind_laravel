<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Log::inData((array)$data);
        return redirect('list');
    }

    /**
     * Show the application evasion.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function test()
    {
        $user = \Auth::user();
        return view('test',compact('user'));
    }

    /**
     * Show the application list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list()
    {
        //$datas = Log::Data();
        $ides = log::Id();
        //dd($ides);
        // foreach ($ides as $id) {

        $eva = Log::evaData($ides);
        // dd($eva);
        //dd($evadata);
        
        $wor = Log::worData($ides);

        $sta = Log::staData($ides);
        

        $vig = Log::vigData($ides);

        $date = Log::Date($ides); 

        // $data = array(
        //     'dates' => Log::Date($ides), 
        //     'evas' => $eva,
        //     'wors' => $wor,
        //     'stas' => $sta,
        //     'vigs' => $vig,
        // );
        //dd($data);
    //}
    return View::make('score', ['dates' => $date,'evas' => $eva,'wors' => $wor,'stas' => $sta,'vigs' => $vig]);
    }
}
