<?php
namespace Src\Models;

require getcwd() . '/vendor/autoload.php';

use Illuminate\Database\Eloquent\Model;

class Image extends Model {
    protected $table = 'tb_image';
    protected $fillable = ['url', 'title', 'description'];
}