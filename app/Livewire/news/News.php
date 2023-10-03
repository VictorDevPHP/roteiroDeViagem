<?php

namespace App\Livewire\News;

use Livewire\Component;
use jcobhams\NewsApi\NewsApi;

class News extends Component
{
    public function render()
    {
        return view('livewire.news.news')->extends('layouts.app');
    }

    public function getNews()
    {     
        $apiKey = env('KEY_NEWS');
        $url = 'https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey='.$apiKey;
        // $url = 'https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=505af54e8cee4f78b692b67e0c87ef81';
        
        $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
        curl_close($ch);

        $responseJson = $response;    
        $directory = storage_path('news/');
        $date = date('d-m-Y');
        $arquivoJson = $directory . $date . '.json';
        file_put_contents($arquivoJson, $responseJson);
    }
}