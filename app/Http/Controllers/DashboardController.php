<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Saldo;
use App\Models\Pemeliharaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpWord\TemplateProcessor;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function cetak()
    {
        $data = Pemeliharaan::whereYear('tgl', date('Y'))
            ->withSum('transaksi', 'jumlah')
            ->get();
        $saldo = Saldo::where('tahun', date('Y'))->first()->saldo;

        $path = public_path('/template/laporan_keuangan.docx');
        $pathSave = storage_path('app/public/' . 'Laporan Keuangan ' . date('Y') . '.docx');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'nomor' => 1,
            'ket' => 'Tahun Anggaran ' . date('Y'),
            'masuk' => \Laraindo\RupiahFormat::currency($saldo ?? 0),
            'keluar' => '-',
            'sisa' => \Laraindo\RupiahFormat::currency($saldo ?? 0),
        ]);

        $kampret = [];

        foreach ($data as $index => $a1) {
            $saldo = $saldo - $a1->transaksi_sum_jumlah;
            array_push($kampret, [
                'no' => $index + 2,
                'keterangan' => $a1->nota,
                'pemasukan' => '-',
                'pengeluaran' => \Laraindo\RupiahFormat::currency($a1->transaksi_sum_jumlah ?? 0),
                'saldo' => \Laraindo\RupiahFormat::currency($saldo ?? 0),
            ]);

        }
        \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
        $templateProcessor->cloneRowAndSetValues('no', $kampret);
        $templateProcessor->saveAs($pathSave);

        return response()->download($pathSave)->deleteFileAfterSend(true);

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}