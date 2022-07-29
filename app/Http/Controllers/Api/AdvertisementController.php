<?php

namespace App\Http\Controllers\Api;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Advertisement::all();
        return response()->json(['code' => Response::HTTP_OK, 'msg' => '', 'data' => $records], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function searchAds(Request $request)
    {
        $request->validate([
            'tag_id' => 'nullable|exists:tag',
            'category_id'=>'nullable|exists:category',
            'advestiser'=>'nullable'
        ]);
        if($request->category_id){
            $cate = Advertisement::where('category_id' , $request->category_id)->get();
        }else if($request->tag_id){
            $Tag = Advertisement::where('tag_id' , $request->tag_id)->get();
        }else if ($request->advestiser){
            $ads = Advertisement::where('advestiser' , $request->advestiser)->get();
        }else{
            return response()->json(['code' => 500, 'msg' => 'no data', 'data' => null]);
        }
        $data = [
            'Tags'=> count($Tag) ? $Tag : null ,
            'Categories'=> count($cate) ? $cate : null ,
            'Advestiser'=> count($ads) ? $ads : null
        ];
        return ResponseJson(Response::HTTP_OK, '', $data);
    }

}
