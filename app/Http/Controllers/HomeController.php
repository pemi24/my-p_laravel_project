<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use App\Models\Home;
use App\Models\Contact;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
/*public function index()
    {

        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if ($usertype=='user') 
            {
                return view('home.homepage');
            }
            else if ($usertype=='admin') 
            {
                return view('user.create');
            }

            else
            {
                return redirect()->back();
            }
        }

    }

    public function edit()
    {

        return view("edit");

    }
    */
    public function homepage()
    {
       return view('home.homepage');
    }
    public function about()
    {
       return view('home.about');
    }

    /**
     * Display a listing of the resource.
     */
     public function index(): View|RedirectResponse
    {
        $user = Auth::user();
        if ($user->usertype === 'admin') {
            $user = Home::all();
        }else{

        $user = Home::where('email', $user->email)->get();
        }
        return view ('user.index')->with('user', $user);    
    }


    /**
     * Show the form for creating a new resource.
     */

    public function start(): View|RedirectResponse
    {
            return view('user.layout');
    }


    public function create(): View|RedirectResponse
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype === 'user' || $usertype === 'admin') {
                // User is authenticated and has a valid usertype
                return view('user.create');
            } else {
                // User is authenticated but has an invalid usertype
                return redirect()->route('register')->with('error', 'You do not have permission to access this page');
            }
        } else {
            // User is not authenticated, redirect them to the register page
            return redirect()->route('register')->with('error', 'You must be logged in to access this page');
        }
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        


        $input = $request->all();
        $input['id'] = Auth::id();
        $input['bdc'] = $request->has('bdc') ? 'I agree' : 'Not agreed';
        Home::create($input);
        return redirect('user')->with('flash_message', 'User Addedd!');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id): View
    {
        $user = Home::find($id);
        return view('user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        
        $user = Home::find($id);
        return view('user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
         $user = Home::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Home::destroy($id);
        return redirect('user')->with('flash_message', 'User deleted!');
    }

    public function downloadUser( string $id)
    {
        // Fetch the user data based on the provided user ID
        $user = Home::find($id);

        // Generate the content or file to be downloaded
        $content = "User Name: " . $user->username . "\r\n";
        $content .= "Address: " . $user->address . "\r\n";
        $content .= "Phone Number: " . $user->phoneNumber . "\r\n";
        $content .= "Description: " . $user->description . "\r\n";
        $content .= "Price: " . $user->price . "\r\n";
        $content .= "Date: " . $user->date . "\r\n";
        $content .= "Email: " . $user->email . "\r\n";
        $content .= "Bon De Commande: " . $user->bdc . "\r\n";

        // Set appropriate headers for the download
        $headers = [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => 'attachment; filename="user_data.txt"',
        ];

        // Return the response with the generated content and headers
        return response($content, 200, $headers);
    }


}
