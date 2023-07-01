<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\Support\Facades\Redirect;
use App\Models\Home;
use App\Models\Contact;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    
    public function index(): View
    {

     $user = Auth::user();

    if ($user->usertype === 'user') {
        $messages = Contact::where('email', $user->email)->get();
    } else {
        $messages = Contact::with('user')->get();
    }

    return view('admin.messages', compact('messages'));
     }
 
    public function contact(): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            $users = Home::first();
            return view('admin.contactus', compact ('user', 'users'));
        } else {
            return view('admin.contactus');
        }
    }


    public function mine(): View
    {
        return view('admin.mine');
    }
 
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
    
    // Assign the user_id of the currently authenticated user
    $input['user_id'] = Auth::id();
    
    Contact::create($input);
        return redirect('admin')->with('flash_message', 'Student Addedd!');
    }
 
    public function show(string $id): View
    {
        $admin = Contact::find($id);
        return view('admin.show')->with('admin', $admin);
    }

    public function adminlayout(): View
    {
        return view('admin.layout');
    }
 
    public function edit(string $id): View
    {
        $admin = Contact::find($id);
        return view('admin.edit')->with('admin', $admin);
    }
 
    public function update(Request $request, string $id): RedirectResponse
    {
        $admin = Contact::find($id);
        $input = $request->all();
        $admin->update($input);
        return redirect('admin')->with('flash_message', 'student Updated!');  
    }
 
    
    public function destroy(string $id): RedirectResponse
    {
        Contact::destroy($id);
        return redirect('admin')->with('flash_message', 'Student deleted!');
    }
}
