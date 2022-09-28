<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;
use App\Http\Controllers\ContactController;

class Contact extends Model
{
    use HasFactory;
  
    public $fillable = ['name', 'email', 'phone', 'message'];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "mmorah@salsangrita.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
