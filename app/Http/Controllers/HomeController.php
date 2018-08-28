<?php

namespace App\Http\Controllers;

use Goutte\Client;

class HomeController extends Controller
{
    public function index()
    {
        $client = new Client;

        $crawler = $client->request('GET', 'https://www.futebolmelhor.com.br/');

        $crawler = $crawler->filter('div.tbl-torcedometro img[src$="vasco.png"]')->parents();

        $position = $crawler->previousAll()->html();

        $badge = str_replace('/logos', 'https://www.futebolmelhor.com.br/logos', $crawler->html());

        $counter = str_replace('.', '', $crawler->nextAll()->html());

        return view('index', compact('position', 'badge', 'counter'));
    }
}
