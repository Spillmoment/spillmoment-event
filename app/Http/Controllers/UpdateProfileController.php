<?php

namespace App\Http\Controllers;

use App\Models\EventRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\UserOldPassword;
use Illuminate\Support\Facades\File;

class UpdateProfileController extends Controller
{

	public function dashboard()
	{
		return view('auth.profile-dashboard');
	}

	public function changePasswordIndex()
	{
		return view('auth.profile-dashboard');
	}

	public function changePasswordStore(Request $request)
	{
		$request->validate([
			'current_password' => ['required', new UserOldPassword],
			'password' => ['required', 'min:3'],
			'password_confirmation' => ['same:password'],
		]);

		$user = User::findOrFail(Auth::id());
		$user->update(['password' => Hash::make($request->password)]);;
		return back()->with(['success' => 'Account berhasil diupdate!']);
	}

	public function changeDataIndex()
	{
		$user = User::findOrFail(Auth::id());
		return view('auth.profile-dashboard', compact('user'));
	}

	public function changeDataUpdate(Request $request)
	{
		$request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|min:12|max:15|unique:users,email,' . Auth::id(),
			'phone' => 'required|min:12|max:15|unique:users,phone,' . Auth::id(),
			'gender' => 'required|in:pria,wanita',
			'photo'	 => 'sometimes|nullable|image|mimes:jpeg,jpg,png,bmp',
			'address' => 'required'
		]);

		if ($request->hasFile('photo')) {
			File::delete('uploads/users/' . Auth::user()->photo);
			$photo =  $request->file('photo');
			$extention = $photo->getClientOriginalExtension();
			$filename = time() . '.' . $extention;
			$photo->move('uploads/users/', $filename);

			User::findOrFail(Auth::id())->update([
				'name' => $request->name,
				'email' => $request->email,
				'phone' => $request->phone,
				'gender' => $request->gender,
				'photo' => $filename,
				'address' => $request->address,
			]);
		}

		return back()->with(['success' => 'Profile berhasil diupdate!']);
	}

	public function event()
	{
		$data['event'] = EventRegister::with(['event', 'users'])->where('user_id', Auth::id())->get();
		$data['check_event'] = EventRegister::all()->count();
		return view('auth.profile-dashboard', $data);
	}
}
