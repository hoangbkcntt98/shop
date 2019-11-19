<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'credit_cards';
     /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'd/m/Y';
    protected $primaryKey = 'card_id';
    
    public $timestamps = false;
}
