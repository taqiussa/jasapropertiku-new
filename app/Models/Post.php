<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = [];
    public static function search($query, $category)
    {
        return empty($query) ? static::query()
            : static::where('category',$category)->where('title', 'like', '%' . $query . '%');
            
    }
    // public function scopeFilter($query, array $filters){
    //     $query->when($filters['jual'] ?? false, fn($query, $jual) => 
    //         $query->where('category', 'Jual')
    //                 ->where('title', 'like', '%'.$jual.'%')
    //                 ->orWhere('description', 'like', '%'.$jual.'%')
    //     );
    //     $query->when($filters['sewa'] ?? false, fn($query, $sewa) => 
    //         $query->where('category', 'Sewa')
    //                 ->where('title', 'like', '%'.$sewa.'%')
    //                 ->orWhere('description', 'like', '%'.$sewa.'%')
    //     );
    // }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
                ]      
            ];
    }
}
