<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryModel;
class CountryController extends Controller
{
    public function country() {
      return response() ->json(CountryModel::get(), 200);
    }
    //fuction to display by id
    public function countryByID($id){
      //$error handling
      $country  = CountryModel::find($id);
      if(is_null($country)){
        return response()->json(["message" => "Record not found"], 404);
      }
      //200 is for response codes in laravel
      else {
      return response()->json(CountryModel::find($id), 200);
      }
    }
    //function to create
    public function countrySave(Request $request) {
      $country = CountryModel::create($request->all());
      //201 to create
      //
      return response()->json($country, 201);
    }
    //function to update
    public function countryUpdate(Request $request, $id){
      $country = CountryModel::find($id);
      //validation
      if(is_null($country)){
        return response()->json(["message" => "Record not found"], 404);
      }
      else {
        $country->update($request->all());
       return response()->json($id, 200);
      }
    }
    //function to delete
    public function countryDelete(Request $request, $id) {
      $country = CountryModel::find($id);
      //validation
      if(is_null($country)){
        return response()->json(["message" => "Record not found"], 404);
      }
      else {
         $id->delete($request->all());
      //204 is for no content
      return response()->json(null, 204);
    }
  }     
}
