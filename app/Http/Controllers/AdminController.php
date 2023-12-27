<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class AdminController extends Controller
{
    public function showPromotionForm()
    {
        $users = User::all();
        return view('admin.admin_promote', compact('users'));
    }


    public function submitPromotionForm(Request $request)
    {
        $userId = $request->input('user_id');
        $user = User::find($userId);

        // Perform the logic to promote the user to admin
        $user->is_admin = true;
        $user->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'User promoted to admin successfully');
    }

}
