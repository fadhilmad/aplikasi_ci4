<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('vw_home1');
    }
}

// menampilkan gambar
class RenderImage extends BaseController
{
    public function index($imageName)
    {
        if (($image = file_get_contents(WRITEPATH . 'uploads/' . $imageName)) === FALSE);

        // choose the right mime type
        $mimeType = 'image/jpg/png';

        $this->response
            ->setStatusCode(200)
            ->setContentType($mimeType)
            ->send();
    }
}
