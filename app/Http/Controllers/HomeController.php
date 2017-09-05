<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 9/4/2017
 * Time: 11:53 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dropzone()
    {
        return view('dropzone-view');
    }
    
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function dropzoneStore(Request $request)
    {
        $file = $request->file('file');
        $fileName = time() . $file->getClientOriginalName();
        $file->move(public_path('excel'), $fileName);
        return response()->json(['success' => $fileName]);
    }
}