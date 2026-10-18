<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    //
    public function home()
    {
        // 8 produk untuk carousel di beranda (2 slide x 4 produk)
        $featured = Instrument::take(8)->get();
        return view('page.home', compact('featured'));
    }

    public function index(Request $request)
    {
        $query = Instrument::query();

        // Fitur pencarian (nama atau merek)
        if ($request->filled('q')) {
            $keyword = $request->q;
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%')
                  ->orWhere('brand', 'like', '%' . $keyword . '%');
            });
        }

        // Fitur filter kategori (kolom type)
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $instruments = $query->get();

        // Daftar kategori untuk tombol filter
        $types = Instrument::select('type')->distinct()->pluck('type');

        return view('page.instrument', compact('instruments', 'types'));
    }

    public function show($id)
    {
        $instrument = Instrument::findOrFail($id);
        return view('page.instrument-detail', compact('instrument'));
    }
    
}