<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class lokers extends Model
{
    use HasFactory;
    use Sortable;
    protected $guarded = [];
    public $sortable = [ 'nama_perusahaan', 'alamat', 'bagian', 'idr','kualifikasi'];
}
