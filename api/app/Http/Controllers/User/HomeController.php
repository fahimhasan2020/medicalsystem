<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Ecg;
use App\Model\EcgTraining;
use App\Model\BloodPressure;
use App\Model\BloodPressureTraining;
use App\Model\OxyzenSaturation;
use App\Model\OxyzenSaturationTraining;
use App\Model\Temperature;
use App\Model\TemperatureTraining;
use App\Model\Sugar;
use App\Model\SugarTraining;


class HomeController extends Controller
{
    public function postEcg(Request $request)
    {
        Ecg::create(['reading_number'=>$request->reading_number,
        'bpm'=>$request->bpm,'user_id'=>$request->user_id]);
        return response()->json(['success'=>'Ecg posted']);  
    }
    public function updateEcg(Request $request)
    {
        $ecg = Ecg::find($request->id);
        if($request->has('bpm')){
            $ecg->bpm = $request->bpm;
        }
        $ecg->update();
        return response()->json(['success'=>'Ecg updated']);  
    }
    public function deleteEcg(Request $request)
    {
        $ecg = Ecg::find($request->id);
        $ecg->delete();
        return response()->json(['success'=>'Ecg deleted']);  
    }

    public function postEcgTraining(Request $request)
    {
        EcgTraining::create(['bpm'=>$request->bpm]);
        return redirect()->back()->with('success','Ecg posted');  
    }
    public function deleteEcgTraining(Request $request)
    {
        $ecg = EcgTraining::find($request->id);
        $ecg->delete();
        return redirect()->back()->with('success','ECG deleted');
    }

    public function postBloodPressure(Request $request)
    {
        BloodPressure::create(['reading_number'=>$request->reading_number,
        'sys'=>$request->sys,'dias'=>$request->dias,'user_id'=>$request->user_id]);
        return response()->json(['success'=>'BP posted']);  
    }
    public function updateBloodPressure(Request $request)
    {
        $bp = BloodPressure::find($request->id);
        if($request->has('sys')){
            $bp->sys = $request->sys;
        }
        if($request->has('dias')){
            $bp->dias = $request->dias;
        }
        $bp->update();
        return response()->json(['success'=>'BP updated']);  
    }
    public function deleteBloodPressure(Request $request)
    {
        $bp = BloodPressure::find($request->id);
        $bp->delete();
        return response()->json(['success'=>'BP deleted']);  
    }

    public function postBloodPressureTraining(Request $request)
    {
        BloodPressureTraining::create(['sys'=>$request->sys,'dias'=>$request->dias]);
        return redirect()->back()->with('success','BP posted');  
    }
    public function deleteBloodPressureTraining(Request $request)
    {
        $bp = BloodPressureTraining::find($request->id);
        $bp->delete();
        return redirect()->back()->with('success','BP deleted'); 
    }

    public function postOxyzenSaturation(Request $request)
    {
        OxyzenSaturation::create(['reading_number'=>$request->reading_number,
        'saturation'=>$request->saturation,'user_id'=>$request->user_id]);
        return response()->json(['success'=>'OS posted']);  
    }
    public function updateOxyzenSaturation(Request $request)
    {
        $os = OxyzenSaturation::find($request->id);
        if($request->has('saturation')){
            $os->saturation = $request->saturation;
        }
        $os->update();
        return response()->json(['success'=>'OS updated']);  
    }
    public function deleteOxyzenSaturation(Request $request)
    {
        $os = OxyzenSaturation::find($request->id);
        $os->delete();
        return response()->json(['success'=>'OS deleted']);  
    }


    public function postOxyzenSaturationTraining(Request $request)
    {
        OxyzenSaturationTraining::create(['saturation'=>$request->saturation]);
        return redirect()->back()->with(['success'=>'OS posted']);  
    }
    public function deleteOxyzenSaturationTraining(Request $request)
    {
        $os = OxyzenSaturationTraining::find($request->id);
        $os->delete();
        return redirect()->back()->with(['success'=>'OS deleted']);  
    }

    public function postTemperature(Request $request)
    {
        Temperature::create(['reading_number'=>$request->reading_number,
        'temperature'=>$request->temperature,'user_id'=>$request->user_id]);
        return response()->json(['success'=>'Temperature posted']);  
    }
    public function updateTemperature(Request $request)
    {
        $t = Temperature::find($request->id);
        if($request->has('temperature')){
            $t->temperature = $request->temperature;
        }
        $t->update();
        return response()->json(['success'=>'Temperature updated']);  
    }
    public function deleteTemperature(Request $request)
    {
        $t = Temperature::find($request->id);
        $t->delete();
        return response()->json(['success'=>'Temperature deleted']);  
    }

    public function postTemperatureTraining(Request $request)
    {
        TemperatureTraining::create(['temperature'=>$request->temperature]);
        return redirect()->back()->with(['success'=>'Temperature posted']);  
    }
    public function deleteTemperatureTraining(Request $request)
    {
        $os = TemperatureTraining::find($request->id);
        $os->delete();
        return redirect()->back()->with(['success'=>'Temperature deleted']);  
    }

    public function postSugar(Request $request)
    {
        Sugar::create(['reading_number'=>$request->reading_number,
        'sugar'=>$request->sugar,'user_id'=>$request->user_id]);
        return response()->json(['success'=>'Sugar posted']);  
    }
    public function updateSugar(Request $request)
    {
        $s = Sugar::find($request->id);
        if($request->has('sugar')){
            $s->sugar = $request->sugar;
        }
        $s->update();
        return response()->json(['success'=>'Sugar updated']);  
    }
    public function deleteSugar(Request $request)
    {
        $s = Sugar::find($request->id);
        $s->delete();
        return response()->json(['success'=>'Sugar deleted']);  
    }

    public function postSugarTraining(Request $request)
    {
        SugarTraining::create([
        'sugar'=>$request->sugar]);
        return redirect()->back()->with(['success'=>'Sugar posted']);  
    }
    public function deleteSugarTraining(Request $request)
    {
        $s = SugarTraining::find($request->id);
        $s->delete();
        return redirect()->back()->with(['success'=>'Sugar deleted']);  
    }

}
