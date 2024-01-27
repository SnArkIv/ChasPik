<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

class PageController extends Controller
{

    public function index()
    {
        $client = new Client();
        $promise = $client->getAsync('https://www.sevsu.ru/univers/shedule/download.php?file=%2BEnW%2BZEBzC0beor752H0Lw%3D%3D')->then(
            function ($response) {
               echo $response->getBody();    
            },
            function ($exception) {
                echo $exception->getMessage();
            }
        );
        $promise->wait();
       
        return view('schedule.index', [
            'data' => 1 ,
        ]);
    }

    public function store(Request $request)
    {
    }
}
