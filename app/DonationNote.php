<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationNote extends Model
{
    /**
    * Attributes
    */
    protected $table = 'donation_notes';

    protected $primaryKey = 'donation_id';

    protected $fillable = [
        'note',
    ];

    public $timestamps = false;

    public function donation() {
        return $this->belongsTo('App\Donation', 'donation_id', 'donation_id');
    }

}
