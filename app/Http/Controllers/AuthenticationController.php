<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        if(Auth::check()) {
            $user = Auth::user();

            return view('dashboard', [
                "user" => $user,
            ]);
        }

        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function login(Request $request)
    {        
        $validated_data = $request->validate([
            "username" => 'required|max:255',
            "password" => 'required|min:5|max:255'
        ]);
        

        if(Auth::attempt($validated_data)){
            $request->session()->regenerate();

            return redirect('/')->with([
                'pesan' => 'Berhasil Login',
            ]);
        }

        return back()->with('login_failed', 'Username atau Password salah')->onlyInput('username');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email:rfc|unique:users',
            'password' => 'required|min:5|max:255',
            're_password' => 'required|min:5|max:255|same:password',
            'photo' => 'image|nullable|max:1999'
        ]);

        //Format nama file gambar
        if($request->hasFile('photo')){
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpan = $filename . "_" . time() . "." . $extension;
            $path = $request->file('photo')->storeAs('photos', $filenameSimpan);
            
            // $filenameSimpanSquare = $filename . "_" . time() . "Square"."." . $extension;
            // $pathSquare = $request->file('photo')->storeAs('photos_square', $filenameSimpanSquare);
            
            // $image = Image::make($request->file('photo'))->resize(100, 100)->save($pathSquare);
            // $image->save($pathSquare);
        }
        
        User::create([
            'username' => $validated_data['username'],
            'email' => $validated_data['email'],
            'password' => $validated_data['password'],
            'photo' => $path,
            // 'photo_resize' => $pathResize,
            // 'photo_square' => $pathSquare
        ]);

        /**
         * Buat Email
         */
        // $data = [
        //     "name" => "Register Account",
        //     "subject" => "Register Account",
        //     "body" => "Selamat, Akun anda " ."<b>". $validated_data['username'] . "</b>" . " telah berhasil terdaftar",
        // ];

        // $data['email'] = $validated_data['email'];

        // dispatch(new SendEmailJob($data));
        
        return redirect('/login')->with('pesan', 'Register Berhasil! Silahkan Login')->onlyInput('username');
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('pesan', 'Berhasil Logout');
    }

    public function profile()
    {
        if(Auth::check()){
            $user = Auth::user();
    
            return view('profile', compact('user'));
        }

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        if(Auth::check()){
            $user = Auth::user();
    
            return view('edit', compact('user'));
        }

        return redirect('/login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            $userUpdate = User::findOrFail($user->id);
            $request->validate([
                'email' => 'required|email:rfc',
                'photo' => 'image|nullable'
            ]);
    
            if($request->hasFile('photo')){
                $filenameWithExt = $request->file('photo')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('photo')->getClientOriginalExtension();
                $filenameSimpan = $filename . "_" . time() . "." . $extension;
                $path = $request->file('photo')->storeAs('photos', $filenameSimpan);
                File::delete("storage/".$user->photo);                
                // $filenameSimpanSquare = $filename . "_" . time() . "Square"."." . $extension;
                // $pathSquare = $request->file('photo')->storeAs('photos_square', $filenameSimpanSquare);
                
                // $image = Image::make($request->file('photo'))->resize(100, 100)->save($pathSquare);
                // $image->save($pathSquare);
            }

            $userUpdate->update([
                'email' => $request['email'],
                'photo' => $path
            ]);

            return redirect('/edit')->with('pesan', 'Profil Berhasil Di Update');

        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $user = Auth::user();

        $path = "storage/app/public/photos";
        File::delete($path ."/". $user->photo);
        User::findOrFail($user->id)->delete();
        Auth::logout();

        return redirect('/')->with('pesan', 'Akun Berhasil Dihapus');
    }
}