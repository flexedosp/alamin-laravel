<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // Added missing import
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * Controller for handling API data fetches from Quran and Hadith sources.
 * Fetches external API data and passes it to Blade views.
 */
class ApiController extends Controller
{
    /**
     * Show data from Quran and Hadith external APIs in a Blade view.
     * Uses environment variables for URLs; falls back to null on failure.
     */

    public function quran(string $id = null, string $mode = 'surat')
    {
        $quranUrl = env('EQURAN_API_URL'); // e.g., https://equran.id/apidev/v2
        $quranData = null;

        if ($quranUrl) {
            try {
                if ($mode === 'surat' && $id) {
                    $quranUrl .= '/surat/' . intval($id);
                } else if ($mode === 'tafsir' && $id) {
                    $quranUrl .= '/tafsir/' . intval($id);
                } else {
                    $quranUrl .= ($mode === 'tafsir') ? '/tafsir' : '/surat';
                }
                $response = Http::timeout(10)->get($quranUrl);
                if ($response->successful()) {
                    $quranData = $response->json();
                }
            } catch (\Throwable $e) {
                // Log error if needed: \Log::error('Quran API fetch failed: ' . $e->getMessage());
                $quranData = null;
            }
        }
        return $quranData;
        // return view('user.platform.quran', ['quran' => $quranData]);
    }

    /**
     * Fetch Hadith data from URL in .env (HADITH_API_URL) and return hadits view.
     */
    public function hadits(Request $request)
    {
        $hadithUrl = env('HADITH_API_URL'); // e.g., https://raw.githubusercontent.com/gadingnst/hadith-api/master/hadiths.json
        $hadithData = null;

        if ($hadithUrl) {
            try {
                if ($request->has('book')) {
                    $book = $request->input('book');
                    $hadithUrl .= '/' . urlencode($book) . '/hadiths';
                } else {
                    // Default to a common book if none specified
                    $hadithUrl .= '/bukhari/hadiths';
                }
                $response = Http::timeout(10)->get($hadithUrl);
                if ($response->successful()) {
                    $hadithData = $response->json();
                }
            } catch (\Throwable $e) {
                // Log error if needed: \Log::error('Hadith API fetch failed: ' . $e->getMessage());
                $hadithData = null;
            }
        }
        return $hadithData;
        // return view('user.platform.hadits', ['hadith' => $hadithData]);
    }
}
