<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Version;
use App\Models\Page;
use App\Actions\ThemeHelper;

class MainController extends Controller
{


    public function show (int $version_id,string $path){

           $versions = Version::all();
           $page = Page::where('version_id', $version_id)->where('link_path', $path)->first();
           $links=Page::where ('version_id', $version_id)->get();

           
           return ThemeHelper::getThemeView($versions,$page,$links,$version_id);




    }

    public function changeVersion(Request $request)
    {

        $version_id=$request->input('selectv');
        $path=$request->input('path');

        if ( is_null(Page::where('version_id', $version_id)
            ->where('link_path',$path)->first() ) )
            $path=Page::where('version_id', $version_id)->first()->link_path  ;

        return redirect(route('showPage',['version_id'=>$version_id,'path'=>$path]));

    }



}
