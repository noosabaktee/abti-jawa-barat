<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class YouTubeController extends Controller
{
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = env('YOUTUBE_API_KEY');
    }

    // Ambil liveChatId untuk sebuah video live
    public function getLiveChatId($videoId)
    {
        $url = "https://www.googleapis.com/youtube/v3/videos";

        $response = Http::get($url, [
            'part' => 'liveStreamingDetails',
            'id' => $videoId,
            'key'  => $this->apiKey
        ]);

        $data = $response->json();

        return response()->json([
            'liveChatId' => $data['items'][0]['liveStreamingDetails']['activeLiveChatId'] ?? null
        ]);
    }

    // Ambil pesan live chat
    public function getChatMessages(Request $request)
    {
        $url = "https://www.googleapis.com/youtube/v3/liveChat/messages";

        $response = Http::get($url, [
            'liveChatId' => $request->liveChatId,
            'part' => 'snippet,authorDetails',
            'pageToken' => $request->pageToken ?? null,
            'key'  => $this->apiKey
        ]);

        return $response->json();
    }
}