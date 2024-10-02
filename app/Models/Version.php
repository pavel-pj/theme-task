<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class Version extends Model
{
    use HasFactory;

    protected $filable = [
        'version',
        'theme'
    ];

    public function pages() {

        return $this->hasMany(Page::class);

    }

}
