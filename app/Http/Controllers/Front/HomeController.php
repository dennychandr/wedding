<?php

namespace App\Http\Controllers\Front;

use Exception;
use Carbon\Carbon;
use App\Models\Guest;
use App\Models\GuestHistory;
use App\Models\GuestMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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

        GuestHistory::create([
            'guest_id' => $guestMessage->guest->id,
            'nama' => $guestMessage->guest->nama,
            'last_click' => Carbon::now(),
            'keterangan' => "Simpan Pesan"
        ]);

        // Balikkan response dalam format JSON
        return response()->json([
            'jenis_tamu' => $guestMessage->guest->jenis_tamu,
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
        GuestHistory::create([
            'guest_id' => $guest->id,
            'nama' => $guest->nama,
            'last_click' => Carbon::now(),
            'keterangan' => "Simpan Status"
        ]);

        // Balikkan response dalam format JSON
        return response()->json([
            'status' => $guest->status,
        ]);
    }

    public function a_a(Request $request)
    {
        try {
            DB::beginTransaction();

            $validated = $request->validate([
                'id' => 'required|string',
            ]);

            $guest = Guest::find($request->id);
            if (!$guest) {
                return;
            }

            $guest->update(['visit_count' => $guest->visit_count + 1]);
            GuestHistory::create([
                'guest_id' => $guest->id,
                'nama' => $guest->nama,
                'last_click' => Carbon::now(),
                'keterangan' => "Open Invitation"
            ]);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
        }
    }

    public function a_b(Request $request)
    {
        try {
            DB::beginTransaction();

            $validated = $request->validate([
                'id' => 'required|string',
            ]);

            $guest = Guest::find($request->id);
            if (!$guest) {
                return;
            }

            GuestHistory::create([
                'guest_id' => $guest->id,
                'nama' => $guest->nama,
                'last_click' => Carbon::now(),
                'keterangan' => "Open Gallery"
            ]);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
        }
    }
}
