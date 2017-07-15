<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parameter;

class ParametersController extends Controller
{
    public function getIndex() {

      $parameters = Parameter::get();

      return back()->with('config',$parameters);
    }

    public function postUpdate(Request $request) {
      for ($i=1; $i <= 6 ; $i++) {
        $parameter = Parameter::find($i);
        $parameter->value = abs($request->input($i));
        $parameter->save();
      }

      return back()->with('update_success','success');
    }
}
