<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParameterSearchApi;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class SearchController extends Controller
{
    public static function getUrl(){
        $url = env('SEARCH_URL');
        $urlWithKey = $url .'api_key='.env('SEARCH_KEY');
        return $urlWithKey;
    }

    public static function getApiForSearchImage(){
        $url = SearchController::getUrl();
        return $url . '&search_type=images';
    }

    public static function getApiForGif(){
        return SearchController::getApiForSearchImage() . '&images_type=gif';
    }

    public static function getApiForGifWithQuery($q){
        return SearchController::getApiForGif() . '&q='.$q;
    }

    public static function getResultsSearch($url){
        $result = json_decode(file_get_contents($url));
        if ($result->request_info->success)
            return $result;
        else
            return[];
    }

    public function searchGif(ParameterSearchApi $request){

        $url = SearchController::getApiForGifWithQuery($request->q);
        if ($request->has('images_page')){
            $url .= '&images_page='.$request->images_page;
        }
        if ($request->has('images_color')){
            $url .= '&images_color='.$request->images_color;
        }
        if ($request->has('images_size')){
            $url .= '&images_size='.$request->images_size;
        }
        if ($request->has('time_period')){
            $url .= '&time_period='.$request->time_period;
        }
        return response()->json(SearchController::getResultsSearch($url));
    }
}
