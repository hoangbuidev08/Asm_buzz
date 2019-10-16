<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
    protected $table = 'bill_detail';

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'product_id');

    }

    public function bill()
    {
        return $this->belongsTo('App\Bill', 'bill_id', 'bill_id');
    }

}
