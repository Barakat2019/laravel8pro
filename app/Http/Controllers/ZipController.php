<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;

class ZipController extends Controller
{
    public function zipFile()
    {
        $zip=new ZipArchive;
        $fileName='myzip.zip'
    }
}
