<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteLogo extends Model
{
    use HasFactory;

    public function getLogo()
    {
        if (!empty($this->logo) && file_exists('upload/logo/' . $this->logo)) {
            return url('upload/logo/' . $this->logo);
        }
    }
}