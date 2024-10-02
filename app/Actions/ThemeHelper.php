<?php

namespace App\Actions;

use App\Models\Page;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;


trait ThemeHelper  {




    public static function getThemeView(
        Collection $versions, Page $page, Collection $links, int $version_id ) : View {


        switch ($version_id) {
            case 1 :

                return view('themes.classic.content.main',
                    [
                        'versions'=>$versions,
                        'page'=>$page,
                        'links' => $links,
                        'cur_version'=>$version_id
                    ]
                );
            case 2 :

                return view('themes.cuba.content.main',
                    [
                        'versions'=>$versions,
                        'page'=>$page,
                        'links' => $links,
                        'cur_version'=>$version_id
                    ]
                );

        }



    }


}