<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Phattarachai\LaravelMobileDetect\Agent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function recharge(Request $request)
    {
        return view('recharge-pc');
    }

    public function payment(Request $request)
    {
        return view('payment');
    }

    public function createQr(Request $request)
    {
        // dd($request->all());
        if (!$request->so_tien) {
            return redirect()->back();
        }
        $soTien = $request->so_tien * 1000;

        $imgQr = "https://img.vietqr.io/image/TCB-19037098036018-waRXhXy.jpg?amount=" . $soTien . "&addInfo=" . auth()->user()->username;
        // convert  to url
        $imgQr = urldecode($imgQr);
        // dd($imgQr);
        // dd($imgQr);
        // https://api.vietqr.io/image/970407-19037098036018-IgdZdK9.jpg?amount=111111&addInfo=baooibao1
        // $imgQr = "https://api.vietqr.io/image/970407-19037098036018-IgdZdK9.jpg?amount=111111&addInfo=baooibao1"

        return view('qr', compact('imgQr', 'soTien'));
    }

    public function homeMobile(Request $request)
    {
        return view('home-mobile');
    }

    public function rechargeMobile(Request $request)
    {
        return view('recharge-mobile');
    }

    public function paymentMobile(Request $request)
    {
        return view('payment-mobile');
    }

    public function createQrMobile(Request $request)
    {
        if (!$request->so_tien) {
            return redirect()->back();
        }
        $soTien = $request->so_tien * 1000;

        $imgQr = "https://img.vietqr.io/image/TCB-19037098036018-waRXhXy.jpg?amount=" . $soTien . "&addInfo=" . auth()->user()->username;
        // convert  to url
        $imgQr = urldecode($imgQr);

        return view("qr-mobile", compact("imgQr", "soTien"));
    }

    public function download(Request $request)
    {
        $files = glob('storage/uploads/*.*');
        if (count($files) == 0) return response()->json(['error' => 'No files found.'], 404);
        $file = $files[array_rand($files, 1)];
        $nameFile = 'Kubet' . rand(1, 34) . '.' . rand(0, 99) . '.apk';
        return response()->file($file, [
            'Content-Type' => 'application/vnd.android.package-archive',
            'Content-Disposition' => 'attachment; filename="' . $nameFile . '"'
        ]);
    }
}
