<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'description'];

    // protected $hidden = ['updated_at'];

    // protected $visible = ['name', 'founded', 'description'];


    // Defining relationship method for car model
    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    public function headquarter()
    {
        return $this->hasOne(Headquarter::class);
    }

    //Define a has many relationship
    public function engines()
    {
        return $this->hasManyThrough(Engine::class,
                CarModel::class,
                'car_id', //Foreign key on CarModel table
                'model_id' //Foreign key on engine table
            );
    }

    //DEfine a hasOneThrough Relationship
    public function productionDate()
    {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

