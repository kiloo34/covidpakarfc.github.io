<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Symptom;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('guest.home', [
            'title'     => 'landing',
            'subtitle'  => '',
            'data'      => '',
            'active'    => ''
        ]);
    }

    public function info()
    {
        return view('guest.info', [
            'title'     => 'info',
            'subtitle'  => '',
            'data'      => '',
            'active'    => ''
        ]);
    }

    public function diagnose()
    {
        $symptoms = Symptom::has('symptomCategory')->get();
        return view('guest.diagnose', [
            'title'     => 'diagnosa',
            'subtitle'  => '',
            'data'      => '',
            'gejalas'   => $symptoms,
            'active'    => ''
        ]); 
    }

    public function store(Request $request)
    {
        $actualRuleDatas = [];
        $rules = Rule::all();

        $actualRuleDatas = $request->categorySymptoms;
        $suspect = [];
        $iteration = 0;

        $compare = [];
        $prc = [];
        $res = [
            'process' => [],
            'ruleActual' => $actualRuleDatas
        ];

        $max = 0.0;
        $index = 0;
        $percent = 0.0;
        $desc = '';

        // looping for rules from database
        foreach ($rules as $i => $rule) {
            $ruleDatas = json_decode($rule->rules);
            // loop for comparison of actual rule data that exists in each rule in the database
            $ruleEquals = [];
            foreach ($ruleDatas as $j => $ruleData) {
                // start process looping comparison from actual data
                $equals = 0;
                if (is_array($ruleData)) {
                    foreach ($ruleData as $k => $data) {
                        $equals = collect($actualRuleDatas)->contains($data) ? 1 : 0;
                        if ($equals == 1) {
                            break;
                        }
                    }
                } else {
                    $equals = collect($actualRuleDatas)->contains($ruleData) ? 1 : 0;
                }
                if ($equals == 1) {
                    $ruleEquals[$j] = $ruleData;
                }
            }
            
            
            $percent = round((count($ruleEquals) / count($ruleDatas)) * 100, 2);
            if ($percent == 100) {
                $desc = 'Terinfeksi ' . $rule->disease_category->name;
            } else {
                $desc = 'Hasil Sementara Gejala memiliki tingkat kemiripan ' . $percent . ' dengan ' . $rule->disease_category->name . ' Lakukan PCR untuk tes Lanjutan';
            }
            $prc[$i] = [
                'ruleId' => $rule->id,
                'category' => $percent < 100 ? 'Tidak Terinfeksi' : $rule->disease_category->name,
                'ruleCount' => count($ruleDatas),
                'ruleEquals' => $ruleEquals,
                'ruleEqualsCount' => count($ruleEquals),
                'ruleEqualsPercent' => $percent,
                'description' => $desc
            ];
            $now = $prc[$i]['ruleEqualsPercent'];
            if ($now > $max) {
                $index = $i;
                $max = $now;
            }
        }
        $res['process'][] = $prc[$index];
        return response()->json($res);
    }
}
