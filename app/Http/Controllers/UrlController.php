<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urls;
use \Auth;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $urls = Urls::whereNull('deleted_at');

        if(!empty($request->id) && $request->id > 0)
            $urls->where('id', '=', $request->id);

        return $urls->get();
    }

    /**
     * Create of the resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
       $req = json_decode($request->getContent(), true);

       if(count($req) < 1)
            return ['status' => 200, 'Invalid argument'];

       $req['user_id'] = 1;

       Urls::create($req);

       return ['status' => 200];
    }

     /**
     * Update of the resource.
     *
     * @return Response
     */
    public function update(Request $request)
    {
       $req = json_decode($request->getContent(), true);

       if(count($req) < 1 && $request->id)
            return ['status' => 200, 'Invalid argument'];

       Urls::where('id', $request->id)
                    ->update($req);

       return ['status' => 200];
    }

     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function delete(Request $request)
    {
       if(empty($request->id) || $request->id < 1)
            return ['status' => 200, 'Invalid argument'];

       Urls::where('id', $request->id)
                  ->update(['deleted_at' => date("Y-m-d H:i:s")]);

       return ['status' => 200];
    }

}
