<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AboutController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $about = About::all();
        return response()->json($about);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return About::find($id) ?? response()->json(['status' => 'Not Found'] , Response::HTTP_NOT_FOUND);
    }

    /**
     * @param Request $request
     * @return About
     */
    public function create(Request $request)
    {
        $about = new About();
        $about-> title = $request->title;
        $about-> description = $request->description;

        $about->save();


        return $about;
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $about = About::find($id);

        if (!$about)
        {
            return response()->json(['status' => 'Not Found'] , Response::HTTP_NOT_FOUND);
        }

        $about->title = $request->get('title');
        $about->description = $request->get('description');

        $about->save();

        return $about;
    }

    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request, int $id)
    {
        $about = About::find($id);

        if (!$about)
        {
            return response()->json(['status' => 'Not Found'] , Response::HTTP_NOT_FOUND);
        }

        $about->delete();

        return response()->json(['status' => 'Deleted'] , Response::HTTP_OK);
    }
}
