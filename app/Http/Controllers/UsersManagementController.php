<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UsersManagement;
use App\Models\City;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Monarobase\CountryList\CountryListFacade;

class UsersManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
		$data = UsersManagement::orderBy('id', 'desc')
				->get();
        return view('UsersManagement',['data' => $data])->with('no', 1);
    }

    public function addForm()
    {
		$countries = CountryListFacade::getList('en');
        return view('addform',compact('countries'));
    }

    public function formSubmit(Request $request){
        
        $rules = [
			'name' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255',
			'address' => 'required',
			'dob' => 'required',
			'status' => 'required',
			'education' => 'required',
			'profile_pic' => 'required',
			'pincode' => 'required',
			'country' => 'required',
			'city' => 'required',
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('addForm')
			->withInput()
			->withErrors($validator);
		}
		else{
			if ($request->hasFile('profile_pic')) {
				$image = $request->file('profile_pic');
				$destinationPath = '/public/uploads/userimages';
				$filename = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
				$image->move(public_path() . '/uploads/userimages/', $filename);
				$image_name = $filename;
			}
            $data = $request->input();
			
			$dob_date=date('Y-m-d',strtotime($data['dob']));
			$age = (date('Y') - date('Y',strtotime($data['dob'])));
			try{
				$UsersManagement = new UsersManagement;
				$UsersManagement->name = $data['name'];
				$UsersManagement->email = $data['email'];
				$UsersManagement->address = $data['address'];
				$UsersManagement->dob = $dob_date;
				$UsersManagement->age = $age;
				$UsersManagement->status = $data['status'];
				$UsersManagement->education = $data['education'];
				$UsersManagement->pincode = $data['pincode'];
				$UsersManagement->profile_pic = $image_name;
				$UsersManagement->country = $data['country'];
				$UsersManagement->city = $data['city'];
				$UsersManagement->save();
				return redirect('list')->with('success', 'The form has been submitted successfully');	
			}
			catch(Exception $e){
				return redirect('addForm')->with('failed',"operation failed");
			}
		}


        
    }
	
	public function edit($id){
		$countries = CountryListFacade::getList('en');
		$cities = City::get();
        $data = UsersManagement::where('id',$id)->first();
        return view('editform',compact('data','countries','cities')); 
    }

    public function update(Request $request){
		
		$rules = [
			'name' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255',
			'address' => 'required',
			'dob' => 'required',
			'status' => 'required',
			'education' => 'required',
			'pincode' => 'required',
			'country' => 'required',
			'city' => 'required',
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('editForm')
			->withInput()
			->withErrors($validator);
		}
		else{
			
            $data = $request->input();
			
			$dob_date=date('Y-m-d',strtotime($data['dob']));
			$age = (date('Y') - date('Y',strtotime($data['dob'])));
			try{
				$updateData = array(
					"id"=>$request->id,
					"email" => $data['email'],
					"name" => $data['name'],
					"address" => $data['address'],
					"dob" => $dob_date,
					"age" => $age,
					"status"=>$request->status,
					"education" => $data['education'],
					"pincode" => $data['pincode'],
					"country" => $data['country'],
					"city" => $data['city'],
				);
				if ($request->hasFile('profile_pic')) {
					$image = $request->file('profile_pic');
					$destinationPath = '/public/uploads/userimages';
					$filename = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
					$image->move(public_path() . '/uploads/userimages/', $filename);
					$image_name = $filename;
					$updateData = array(
						"profile_pic" => $image_name,
					);
				}
				UsersManagement::where('id', $data['id'])->update($updateData);
				return redirect('list')->with('success', 'The form has been Updated successfully');	
			}
			catch(Exception $e){
				return redirect('addForm')->with('failed',"operation failed");
			}
		}
	}


    public function delete(Request $request){
        $id = $request->id;
        $res = UsersManagement::where('id', $id)->delete();
        $response = array(
            'status' => 'success',
        );
        return response()->json($response);
    }
	
	public function view($id){
        $countries = CountryListFacade::getList('en');
		$cities = City::get();
        $data = UsersManagement::where('id',$id)->first();
        return view('viewform',compact('data','countries','cities'));  
    }
	
	public function getCity(Request $request){
		$countryName = $request->countryName;
        $getCities = City::select('id','city_name')->where('country',$countryName)->get();
		return response()->json($getCities);
    }
	
	


}