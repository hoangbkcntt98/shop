<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIProcess extends Controller
{
    public function getAPI(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $url = $request->query('apiURL');
        $response = $client->request('GET',$url);
        $urlRedirect = $request->query('redirect');
        $response->getHeaderLine('application/json'); # 'application/json; charset=utf8'
        $data= $response->getBody();
        return redirect()->action('APIProcess@redirectToPreviousURL',['data'=>$data]);
    }
    public function redirectToPreviousURL(Request $request)
    {
        
    }
  
}
