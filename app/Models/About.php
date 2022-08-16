<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table='about';

    public function setValue($res) {
        if ( $res != null ) {
            if (isset($res[ 'enrollment_number' ]))
                $this->enrollment_number  = $res[ 'enrollment_number' ];
            if (isset($res[ 'current_location' ]))
                $this->current_location = $res[ 'current_location' ];
            if (isset($res[ 'college_email' ]))
                $this->college_email = $res[ 'college_email' ];
            if (isset($res[ 'company_name' ]))
                $this->company_name = $res[ 'company_name' ];
            if (isset($res[ 'designtion' ]))
                $this->designtion = $res[ 'designtion' ];
            if (isset($res[ 'experience' ]))
                $this->experience = $res[ 'experience' ];
        }
    }
}
