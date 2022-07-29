<?php

namespace App\Http\Controllers\Api;

use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Tag::all();
        return response()->json(['code' => Response::HTTP_OK, 'msg' => '', 'data' => $records], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Tag::create([
            'name' => $request->name
        ]);
        return response()->json(['code' => Response::HTTP_OK, 'msg' => 'added_successfully'], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required'
        ]);
        $record = Tag::find($request->id);
        $record->update($request->all());
        return response()->json(['code' => Response::HTTP_OK, 'msg' => 'updated successfully'], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'id'=>'required',
        ]);
        $record = Tag::find($request->id);
        if($record){
            $record->delete();
            return response()->json(['code' => Response::HTTP_OK, 'msg' => 'deleted successfully'], Response::HTTP_OK);
        }else{
            return response()->json(['code' => 500, 'msg' => 'something went wrong'], 500);
        }
    }
}
