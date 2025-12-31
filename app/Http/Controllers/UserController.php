<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $ApiController;

    public function __construct()
    {
        $this->ApiController = new ApiController();
    }
    // BEGIN - Public Access
    public function index()
    {
        $data['title'] = "Beranda - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Beranda";
        return view("user/index", $data);
    }

    public function about()
    {
        $data['title'] = "Tentang Kami - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Tentang Kami";
        return view("user/about", $data);
    }

    public function knowledge()
    {
        $data['title'] = "Wawasan - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Wawasan";
        return view("user/knowledge", $data);
    }

    public function platform()
    {
        $data['title'] = "Platform - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Platform";
        return view("user/platform", $data);
    }

    public function infoCenter()
    {
        $data['title'] = "Pusat Informasi - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Pusat Informasi";
        return view("user/infoCenter", $data);
    }

    public function quranApp()
    {
        $data['title'] = "Quran App - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Quran App";
        $data['quranData'] = $this->ApiController->quran();
        // var_dump($data['quranData']['data'][0]);
        // var_dump(env('EQURAN_API_URL'));
        $data['lang'] = 'ar';
        return view("user/platform/quran", $data);
    }

    public function quranDetail(string $id)
    {
        $getDetail = $this->ApiController->quran($id);
        $getTafsir = $this->ApiController->quran($id, 'tafsir');
        // $data['quranData'] = $getDetail['data'];
        // $data['tafsirData'] = $getTafsir['data'];
        // $data['title'] = "Quran App - Masjid Al-Amin Petukangan";
        // $data['pageNameNav'] = "Quran App";

        $data = [
            'quranData' => $getDetail['data'],
            'tafsirData' => $getTafsir['data'],
            'nomorSurat' => $getDetail['data']['nomor'],
            'title' => "Quran App - Masjid Al-Amin Petukangan",
            'pageNameNav' => "Quran App",
            'nextNomorSurat' => isset($getDetail['data']['suratSelanjutnya']['nomor']) ? (int) $getDetail['data']['suratSelanjutnya']['nomor'] : null,
            'nextNamaSurat' => isset($getDetail['data']['suratSelanjutnya']['namaLatin']) ? $getDetail['data']['suratSelanjutnya']['namaLatin'] : null,
            'prevNomorSurat' => isset($getDetail['data']['suratSebelumnya']['nomor']) ? (int) $getDetail['data']['suratSebelumnya']['nomor'] : null,
            'prevNamaSurat' => isset($getDetail['data']['suratSebelumnya']['namaLatin']) ? $getDetail['data']['suratSebelumnya']['namaLatin'] : null,
        ];

        // dd($data);
        // var_dump($data['quranData']);
        // var_dump(env('EQURAN_API_URL'));
        return view("user/platform/quranDetail", $data);
    }

    public function haditsApp()
    {
        $data['title'] = "Hadits App - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Hadits App";
        $data['haditsData'] = $this->ApiController->hadits(null, null, null);
        return view("user/platform/hadits", $data);
    }

    public function listHadits(
        string $name,
        ?string $number1 = null,
        ?string $number2 = null
    ) {
        // Default pagination
        $perPage = 20;

        $start = $number1 ? (int) $number1 : 1;
        $end   = $number2 ? (int) $number2 : null;


        // Panggil API
        $getCount = $this->ApiController->countHadits($name);
        // dd($haditsData);
        // Validasi API response
        if (!$getCount || !isset($getCount['data'])) {
            abort(404, 'Data hadits tidak ditemukan');
        }

        $available = $getCount['data']['available'];

        // Jika total data lebih kecil dari 20, kita ubah start menjadi 1 secara otomatis
        if ($available < 20) {
            return redirect()->route('platform.listHadits', [
                'id' => $name,
                'number1' => 1,
                'number2' => $available
            ]);
        }

        // Jika data cukup (>= 20), maka kita cek apakah end melebihi available
        if ($end > $available) {
            // Tapi tetap tampilkan 20 data, mulai dari start, sampai end = start + 19
            // Tapi jangan melebihi available
            $finalEnd = min($start + 19, $available);
            // dd($finalEnd);

            return redirect()->route('platform.listHadits', [
                'id' => $name,
                'number1' => $start,
                'number2' => $finalEnd
            ]);
        }

        $haditsData = $this->ApiController->hadits($name, $start, $end);

        // dd($haditsData);

        // Total hadits tersedia
        // $count = $haditsData['data']['available'] ?? 0;
        $totalPages = $available > 0 ? ceil($available / $perPage) : 1;
        $currentPage = ceil($end / $perPage);

        // Next & Prev range
        $nextStart = $start + $perPage;
        $nextEnd   = $end + $perPage;

        $prevStart = max(1, $start - $perPage);
        $prevEnd   = max($perPage, $end - $perPage);


        if ($currentPage == $totalPages && $prevEnd - $prevStart != $perPage - 1) {
            $prevEnd = $prevStart + $perPage - 1;
        }
        if ($currentPage == $totalPages - 1 && $nextEnd > $available) {
            $nextEnd = $available;
        }

        // dd($prevEnd - $prevStart);

        $data = [
            'haditsData'   => $haditsData,
            'title'        => $haditsData['data']['name'] . ' - Masjid Al-Amin Petukangan',
            'pageNameNav'  => 'Hadits App',

            // pagination data
            'currentPage' => $currentPage,
            'totalPages'  => $totalPages,
            'nextStart'  => $nextStart,
            'nextEnd'    => $nextEnd,
            'prevStart'  => $prevStart,
            'prevEnd'    => $prevEnd,
            'hasNext'     => $end < $available,
            'hasPrev'     => $start > 1,
        ];
        // dd($data);
        return view("user/platform/haditsDetail", $data);
        // return view('user.platform.listHadits', $data);
    }

    public function haditsDetail(string $name, string $number)
    {
        if ($name && $number) {
            $data['haditsData'] = $this->ApiController->hadits($name, $number, null);
        } else {
            return redirect()->route('platform.hadits');
        }
        $data['title'] = $data['haditsData']['name'] . " - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Hadits App";
        // var_dump($data['quranData']['data'][0]);
        // var_dump(env('EQURAN_API_URL'));
        return view("user/platform/haditsDetail", $data);
    }
    // END - Public Access

    // BEGIN - User Access
    // END - User Access

    // BEGIN - Admin Access
    // END - Admin Access

}
