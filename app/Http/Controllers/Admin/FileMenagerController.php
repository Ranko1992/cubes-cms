<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileMenagerController extends Controller {

    public function index() {
        return view('admin.filemenager.index');
    }

    public function connector() {


// run elFinder
        $connector = new \elFinderConnector(new \elFinder([
            'roots' => [ // rooy folders for filemanager
        [
                   'driver' => 'LocalFileSystem',
                'path' => public_path('/storage/filemanager'),
                'URL' => url('/storage/filemanager'),
                
                'uploadDeny' => array('all'), // All Mimetypes not allowed to upload
                'uploadAllow' => array('image', 'text/plain', 'application/pdf'), // Mimetype `image` and `text/plain` allowed to upload
                'uploadOrder' => array('deny', 'allow'), // allowed Mimetype `image` and `text/plain` only
                
                'accessControl' =>   function($attr, $path, $data, $volume, $isDir, $relpath) {                                                                                                                                                                                                                                     
                                 $basename = basename($path);
                                 return $basename[0] === '.'                  // if file/folder begins with '.' (dot)
                                 && strlen($relpath) !== 1           // but with out volume root
                                    ? !($attr == 'read' || $attr == 'write') // set read+write to false, other (locked+hidden) set to true
                                : null;                                 // else elFinder decide it itself
        }
            ]
        ]
        ]));
        $connector->run();
    }
    
      public function popup() {
        return view('admin.filemenager.popup');
    }

}
