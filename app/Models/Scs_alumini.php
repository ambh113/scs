<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Scs_alumini extends Model {
    use HasFactory;

    public function setValue($res) {
        if ( $res != null ) {
            $this->firstName  = $res[ 'firstName' ];
            $this->middleName = $res[ 'middleName' ];
            $this->lastName = $res[ 'lastName' ];
            $this->email = $res[ 'email' ];
            $this->password = $res[ 'password' ];
        }
    }
}
