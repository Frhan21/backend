<?php
namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SampleController extends Controller
{
    //
    public function index() {
        $sample = Sample::all();
        return response()->json($sample, 200);
    }

    public function show($id) {
        $sample = Sample::find($id);
        if($sample) {
            return response()->json($sample,200);
        } else {
            return response()->json([], 400);
        }

    }

    public function store(Request $request) {
        $this->validate($request, [
            "average_intensity"=>"required",
            "average_voltage"=>"required",
            "absorbance"=>"required"
        ]);

        $sample = Sample::create($request->all());
        return response()->json($sample, 200);
    }

    public function update(Request $request, $id) {

        $sample = Sample::find($id);

        if ($request->has('average_intensity')) {
            $sample->average_intensity = $request->input('average_intensity');
        }
        if ($request->has('average_voltage')) {
            $sample->average_voltage = $request->input('average_voltage');
        }
        if ($request->has('absorbance')) {
            $sample->absorbance = $request->input('absorbance');
        }

        $sample->save();
        return response()->json($sample, 200);
    }

    public function delete($id) {
        $sample = Sample::find($id);
        $sample->delete();
        return response()->json(['status'=>'Success', 'message'=> 'Data has been deteled'], 200);
    }
}
