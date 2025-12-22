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
        $data['quranData'] = $getDetail['data'];
        $data['tafsirData'] = $getTafsir['data'];
        $data['title'] = "Quran App - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Quran App";
        // var_dump($data['quranData']);
        // var_dump(env('EQURAN_API_URL'));
        return view("user/platform/quranDetail", $data);
    }

    public function haditsApp()
    {
        $data['title'] = "Hadits App - Masjid Al-Amin Petukangan";
        $data['pageNameNav'] = "Hadits App";
        $data['hadithData'] = $this->ApiController->hadits(request());
        var_dump($data['hadithData']);
        return view("user/platform/hadits", $data);
    }

    // public function haditsDetail(string $id)
    // {
    //     $data['hadithData'] = $this->ApiController->hadits($id);
    //     $data['title'] = "Quran App - Masjid Al-Amin Petukangan";
    //     $data['pageNameNav'] = "Quran App";
    //     // var_dump($data['quranData']['data'][0]);
    //     // var_dump(env('EQURAN_API_URL'));
    //     return view("user/platform/quranDetail", $data);
    // }
    // END - Public Access

    // BEGIN - User Access
    // END - User Access

    // BEGIN - Admin Access
    // END - Admin Access

}
