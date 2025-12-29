<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // Added missing import
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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

    public function quran(?string $id = null, ?string $mode = 'surat')
    {
        // $quranUrl = env('EQURAN_API_URL');
        $quranUrl = config('services.equran_api.url');
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
    public function hadits(
        ?string $name = null,
        ?string $num1 = null,
        ?string $num2 = null
    ) {
        $baseUrl = config('services.hadith_api.url'); // lebih aman dari env langsung
        if (!$baseUrl) {
            return null;
        }

        try {
            // Default endpoint
            $endpoint = '/books';

            // if ($name && $num1 && !$num2) {
            //     // Ambil 1 hadits spesifik
            //     $endpoint .= "/{$name}/{$num1}";
            // } elseif ($name && $num1 && $num2) {
            //     // Ambil rentang hadits
            //     $range = $num1 . '-' . $num2 ?: '1-20'; // default range
            //     $endpoint .= "/{$name}?range={$range}";
            // }
            // dd($num2);
            // $getCount = Http::timeout(10)->get($baseUrl . '/books/' . $name . '/1')->json("data.available");
            // if ($num2 && $num2 > $getCount) {
            //     return 'reachLimit';
            // }
            $range = $num2 ? "{$num1}-{$num2}" : $num1;
            $endpoint .= "/{$name}" . ($num2 ? "?range={$range}" : "/{$range}");


            $combineUrl = $baseUrl . $endpoint;
            // dd($combineUrl);
            $response = Http::timeout(10)->get($combineUrl);
            // dd($response->json());
            if ($response->successful()) {
                return $response->json();
            }

            // Optional: log error response
            Log::warning('Hadith API failed', [
                'status' => $response->status(),
                'body'   => $response->body(),
            ]);

            return null;
        } catch (\Throwable $e) {
            Log::error('Hadith API exception', [
                'message' => $e->getMessage(),
            ]);

            return null;
        }
    }

    public function countHadits(string $name)
    {
        $baseUrl = config('services.hadith_api.url');
        if (!$baseUrl) {
            return null;
        }

        try {
            $response = Http::timeout(10)->get($baseUrl . '/books/' . $name . '/1');
            // dd($response->json());
            if ($response->successful()) {
                return $response->json();
            }

            Log::warning('Hadith count fetch failed', [
                'status' => $response->status(),
                'body'   => $response->body(),
            ]);

            return null;
        } catch (\Throwable $e) {
            Log::error('Hadith count exception', [
                'message' => $e->getMessage(),
            ]);

            return null;
        }
    }
}
