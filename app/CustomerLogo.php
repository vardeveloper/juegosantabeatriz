<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class CustomerLogo extends Model
{
    use Resizable;

    protected $table = 'customer_logo';
}
