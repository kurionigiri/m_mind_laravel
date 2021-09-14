<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Log extends Model
{
    protected $fillable = [
        'created_at',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'q10',
        'q11',
        'q12',
        'q13',
        'q14',
        'q15',
        'q16',
        'q17',
        'q18',
        'q19',
        'q20',
        'q21',
        'q22',
        'q23',
        'q24',
        'q25',
        'q26',
        'q27',
        'q28',
        'q29',
        'q30',
        'q31',
        'q32',
        'user_id'
    ];

    public static function inData(array $data)
    {
        return    DB::table('logs')->insert([
            'q1'=>$data['q1'],
            'q2'=>$data['q2'],
            'q3'=>$data['q3'],
            'q4'=>$data['q4'],
            'q5'=>$data['q5'],
            'q6'=>$data['q6'],
            'q7'=>$data['q7'],
            'q8'=>$data['q8'],
            'q9'=>$data['q9'],
            'q10'=>$data['q10'],
            'q11'=>$data['q11'],
            'q12'=>$data['q12'],
            'q13'=>$data['q13'],
            'q14'=>$data['q14'],
            'q15'=>$data['q15'],
            'q16'=>$data['q16'],
            'q17'=>$data['q17'],
            'q18'=>$data['q18'],
            'q19'=>$data['q19'],
            'q20'=>$data['q20'],
            'q21'=>$data['q21'],
            'q22'=>$data['q22'],
            'q23'=>$data['q23'],
            'q24'=>$data['q24'],
            'q25'=>$data['q25'],
            'q26'=>$data['q26'],
            'q27'=>$data['q27'],
            'q28'=>$data['q28'],
            'q29'=>$data['q29'],
            'q30'=>$data['q30'],
            'q31'=>$data['q31'],
            'q32'=>$data['q32'],
            'user_id'=>$data['user_id'],
            'created_at'=>new Carbon('now'),
        ]);
    }

    public static function Id()
    {
        return DB::table('logs')->pluck('id');
    }

    public static function evaData($ides)
    {
        return DB::table('logs')->select(DB::raw('q1+ q2 + q3 + q4 + q5 + q6 + q7 + q8 + q9 AS evas'))   
            ->get($ides);
    }
    public static function worData($ides)
    {
        return DB::table('logs')->select(DB::raw('q10 + q11 + q12 + q13 + q14 + q15 + q16 AS wors'))
            ->get($ides);
    }
    public static function staData($ides)
    {
        return DB::table('logs')->select(DB::raw('q17 + q18 + q19 + q20 + q21 + q22 + q23 + q24 AS stas'))
            ->get($ides);
    }
    public static function vigData($ides)
    {
        return DB::table('logs')->select(DB::raw('q25 + q26 + q27 + q28 + q29 + q30 + q31 + q32 AS vigs'))
            ->get($ides);
    }

    public static function Date($ides)
    {
        return DB::table('logs')->select(['created_at'])
            ->get($ides);
    }
}
