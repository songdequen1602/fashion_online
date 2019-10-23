<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use DB;
use Excel;
class ImportExcelController extends Controller
{
    public function index(Request $request){
    	$model= new Comments;
    	$comments= Comments::all();
    	return view('import',[
    		'baiviet'=> $comments
    	]);
    }
    public function import(Request $request){
    	$this->validate($request,[
    		'select_file' => 'required|mimes:xls,xlsx'
    	]);
    	$path = $request->file('select_file')->getRealPath();
    	$data = Excel::load($path)->get();
    	if($data->count()>0)
    	{
    		foreach ($data->toArray() as $key => $value) {
    			foreach ($value as $row) {
    				$insert_data[]= array(
    					'email' => $row['email'],
    					'curtomer_name' => $row['curtomer_name'],
    					'product_id' => $row['product_id'],
    					'address' => $row['address'],

    				);
    			}
    		}
    	}
    	if(!empty($insert_data)){
    		$model->fill($request->all());
    	// dd($model);
    		$model->save();
    	}
    	return back()->with('success','Excel Data Imported successfully');
    }
}
