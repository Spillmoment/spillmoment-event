<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UpdateProfileController extends Controller
{
	public function changePasswordIndex()
	{
		 return view('auth.profile-change-password');
	} 

	public function changePasswordStore(Request $request)
	{
		$user = User::findOrFail(Auth::id());

		$request->validate([
			'current_password' => ['required'],
			'password' => ['required', 'confirmed', Rules\Password::defaults()],
	  ]);
		
		if (Hash::check($request->current_password, $user->password)) { 

			if (Hash::check($request->password, $user->password)) {
				return redirect()->route('profile.password')->withErrors('Your password is the same as before !');
			}

			$user->fill([
				'password' => Hash::make($request->password)
			 ])->save();
			 
			return redirect()->route('profile.password')->with('status', 'Password changed !');
		} else {
			return redirect()->route('profile.password')->withErrors(['Your current password is wrong !']);
		}

	}

	public function changeDataIndex()
	{
		$user = User::findOrFail(Auth::id());
		 return view('auth.profile-change-data', compact('user'));
	} 
	
	public function changeDataUpdate(Request $request)
	{
		$request->validate([
				'name' => 'required|string|max:255',
				'phone' => 'required|min:12|max:15|unique:users,phone,'.Auth::id(),
				'gender' => 'in:pria,wanita',
		]);

		User::findOrFail(Auth::id())->update([
				'name' => $request->name,
				'phone' => $request->phone,
				'gender' => $request->gender,
				'address' => $request->address,
		]);
		 return back()->with('status', 'Update success.');
	} 
}
