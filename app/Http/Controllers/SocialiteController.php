<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        // Google user object dari google
        $userFromGoogle = Socialite::driver('google')->user();

        // Ambil user dari database berdasarkan google user id
        $userFromDatabase = User::where('google_id', $userFromGoogle->getId())->first();

        // Jika tidak ada user, maka buat user baru
        if (!$userFromDatabase) {
            $newUser = new User([
                'google_id' => $userFromGoogle->getId(),
                'name' => $userFromGoogle->getName(),
                'email' => $userFromGoogle->getEmail(),
            ]);

            $newUser->save();

            // Login user yang baru dibuat
            auth('web')->login($newUser);
            session()->regenerate();

            return redirect('/');
        }

        // Jika ada user langsung login saja
        auth('web')->login($userFromDatabase);
        session()->regenerate();
        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function registerWithGoogle(Request $request)
    {
        try {
            // Mendapatkan data user dari Google
            $userFromGoogle = Socialite::driver('google')->user();

            // Memeriksa apakah user sudah terdaftar berdasarkan google_id
            $existingUser = User::where('google_id', $userFromGoogle->getId())->first();

            // Jika user sudah terdaftar, kembalikan respons dengan pesan yang sesuai
            if ($existingUser) {
                return redirect()->route('login')->with('error', 'Akun sudah terdaftar');
            }

            // Membuat user baru
            $newUser = new User([
                'google_id' => $userFromGoogle->getId(),
                'name' => $userFromGoogle->getName(),
                'email' => $userFromGoogle->getEmail(),
                // Tambahkan field lain yang dibutuhkan untuk registrasi, seperti password, dll.
            ]);

            // Menyimpan user baru ke database
            $newUser->save();

            // Autentikasi user baru
            auth('web')->login($newUser);
            $request->session()->regenerate();

            // Kembalikan respons sukses
            return redirect()->route('dashboard')->with('success', 'Registrasi berhasil');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('login')->with('error', 'Terjadi kesalahan saat melakukan registrasi');
        }
    }
}
