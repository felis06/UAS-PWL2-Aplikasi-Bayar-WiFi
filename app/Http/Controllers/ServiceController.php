<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function pulsaPage()
    {
        if (Auth::check()) {
            return view('app.service.pulsa');
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }

    public function buatTransaksi(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;

        $jenis = $request->input('jenis');
        if ($request->input('jenis') == "pulsa") {
            $nominal = $request->input('nominal');
            $telp = $request->input('telp');

            $detail = [
                'nominal' => $nominal,
                'telp' => $telp,
                'jenis_transaksi' => $jenis,
            ];
            $totalBayar = $nominal;
        } else if ($request->input('jenis') == "internet") {
            $layanan = $request->input('layanan');
            $pelanggan = $request->input('pelanggan');
            $tagihan = 500000;
            
            $detail = [
                'layanan' => $layanan,
                'no_pelanggan' => $pelanggan,
                'tagihan' => $tagihan,
                'jenis_transaksi' => $jenis,
            ];
            
            $totalBayar = $tagihan;
        }

        $statusPembayaran = "belum dibayar";

        $transaksi = Transaksi::create([
            'user_id' => $userId,
            'detail_transaksi' => json_encode($detail),
            'total' => $totalBayar,
            'status_pembayaran' => $statusPembayaran,
            'nomer_transaksi' => rand(100000, 10000000),
        ]);

        $id = $transaksi->id;

        // return redirect()->route('pembayaran')->with('id', $id);
        return redirect()->route('pembayaran', ['id' => $id])->with('idTransaksi', $id);
    }

    public function pembayaranPage($id)
    {
        if (Auth::check()) {
            $transaksi = Transaksi::find($id);

            return view('app.service.transaksi.pembayaran', compact('transaksi'));
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }

    public function transferPage()
    {
        if (Auth::check()) {
            $user = Auth::user();

            return view('app.service.transaksi.transfer', compact('user'));
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }

    public function transferDetailPage(Request $request)
    {
        if (Auth::check()) {
            $tagihan = $request->input('tagihan');
            $user = Auth::user();
            $transaksi = Transaksi::where('nomer_transaksi', $tagihan)->first();

            $detail = json_decode($transaksi->detail_transaksi, true);

            return view('app.service.transaksi.transferDetail', compact('user', 'transaksi', 'detail'));
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }


    public function transferPinPage($id)
    {
        if (Auth::check()) {

            $transaksi = [
                'id' => $id
            ];

            return view('app.service.transaksi.transferPin', compact('transaksi'));
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }

    public function bayar(Request $request)
    {

        $user = Auth::user();
        $pin = (int) $request->input('pin');
        $tagihan = $request->input('tagihan');

        $idUser = User::find($user->id);
        if ($idUser->pin != $pin) {
            return redirect()->route('app')
                ->withErrors([
                    'message' => 'pin salah',
                ]);
        }


        $transaksi = Transaksi::find($tagihan);
        if ($transaksi) {
            // Update the attributes
            $transaksi->status_pembayaran = 'lunas';

            // Save the changes
            $transaksi->save();
        }
        if ($idUser) {
            $idUser->saldo = (int) $idUser->saldo - $transaksi->total;
            $idUser->save();
        }

        return redirect()->route('berhasil-bayar');
    }

    public function berhasilPage()
    {
        if (Auth::check()) {
            return view('app.service.transaksi.berhasil');
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }

    public function internetPage()
    {
        if (Auth::check()) {
            return view('app.service.internet');
        }

        return redirect()->route('auth.login')
            ->withErrors([
                'message' => 'Please login to use the app.',
            ])->onlyInput('email');
    }
}
