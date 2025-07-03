<?php

namespace App\Http\Controllers\Front;

use App\Models\Guest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GuestMessage;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function index($id = null)
    {
        $guest = Guest::find($id);

        if (!$guest) {
            abort(403, "DATA UNDANGAN TIDAK DITEMUKAN, 
            PASTIKAN LINK YANG DIMASUKKAN BENAR.
            MOHON HUBUNGI DENNY.");
        }

        $guestMessages = GuestMessage::with('guest')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('fe.home.index', [
            'guest' => $guest,
            'guestMessages' => $guestMessages,
        ]);
    }

    public function simpan_pesan(Request $request)
    {
        $validated = $request->validate([
            'guest_id' => 'required|string',
            'nama' => 'required|string',
            'isi_pesan' => 'required|string|max:1000',
        ]);

        // Simpan ke database, contoh pakai model Guestbook
        $guestMessage = GuestMessage::create($validated);

        // Balikkan response dalam format JSON
        return response()->json([
            'nama' => $guestMessage->guest->nama,
            'pesan' => $guestMessage->isi_pesan,
        ]);
    }

    public function simpan_status(Request $request)
    {
        $validated = $request->validate([
            'guest_id' => 'required|string',
            'jawaban' => 'required|string',
        ]);

        $guest = Guest::find($request->guest_id);
        if (!$guest) {
            return;
        }

        $guest->update(['status' => $validated['jawaban']]);

        // Balikkan response dalam format JSON
        return response()->json([
            'status' => $guest->status,
        ]);
    }
}
