<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function companyContact() {
        return $this->hasMany(Company::class,'contact_id', 'id');
    }
}
