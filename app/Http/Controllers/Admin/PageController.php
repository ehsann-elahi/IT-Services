<?php

namespace  App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\AdminProfile;

use Hash;


class PageController extends Controller
{

    public function adminlogin()
    {
        return view('admin.admin_login');
    }
    
    
         public function dashboard()
        {
            $totalContacts = Contact::count();
            return view('admin.dashboard', compact('totalContacts'));
        }

    public function AdminProfile()
    {
        $profile = AdminProfile::whereAdminId(auth()->user()->id)->first();
        return view('admin.profile', compact('profile'));
    }

    public function profilesave(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:190',
            'last_name' => 'required|max:190|string',
            'email' => 'required|max:190|email',
            'image' => 'image|mimes:jpg,png',
        ]);
        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'admin_id' => auth()->user()->id,
        );

        $moveTo = 'uploads/profile';
        $name = time() . '.' . $request->img->extension();
        $move = $request->img->move(public_path($moveTo), $name);
        $data['image'] = '/' . $moveTo . '/' . $name;

        auth()->user()->update($data);
        AdminProfile::create($data);
        return redirect()->Route('dashboard')->with([
            'variant' => 'success',
            'message' => 'Profile Created Successfully.'
        ]);
    }

    public function profileupdate(Request $request)
    {
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ];

        $moveTo = 'uploads/profile';
        $name = time() . '.' . $request->img->extension();
        $move = $request->img->move(public_path($moveTo), $name);
        $data['image'] = '/' . $moveTo . '/' . $name;

        auth()->user()->update($data);
        AdminProfile::whereAdminId(auth()->user()->id)->update($data);
        return redirect()->Route('dashboard')->with([
            'variant' => 'success',
            'message' => 'Profile Update Successfully.'
        ]);
    }

    public function adminchangepassword()
    {
        $profile = AdminProfile::whereAdminId(auth()->user()->id)->first();
        return view('admin.changepassword', compact('profile'));
    }

    public function adminupdatepassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed', // Ensure password is confirmed
        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->withErrors([
                'old_password' => 'The provided old password does not match our records.'
            ]);
        }
        
        $data = [
            'password' => Hash::make($request->new_password),
        ];

        auth()->user()->update($data);
        return redirect()->Route('dashboard')->with([
            'variant' => 'success',
            'message' => 'Update Password Successfully.'
        ]);
    }


}
