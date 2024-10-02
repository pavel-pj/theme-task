<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Version;
use Illuminate\Database\Eloquent\Builder;

class Page extends Model
{
    use HasFactory;

   // protected $primaryKey = ['version_id', 'link_path'];
    protected $filable=[

        'version_id',
        'title',
        'link_text',
        'link_path',
        'text'
    ];

    public function version()
    {
        return $this->belongsTo(Version::class);

    }





}
