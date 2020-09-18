<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class StudInsertController extends Controller
{
    
    public function insert(){
        $urlData = getURLList();
        return view('stud_create');
    }
    public function create(Request $request){
        $rules = [
			'name' => 'required|string|min:3|max:255',
			'age' => 'required|string|min:3|max:255',
            'mobile' => 'required|string|min:8|max:255'
            'email' => 'required|email|unique:users'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$student = new StudInsert;
                $student->name = $data['name '];
                $student->age = $data['age'];
				$student->mobile = $data['mobile'];
				$student->email = $data['email'];
				$student->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }
}


?>