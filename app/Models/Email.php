<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'client_name',
        'client_email',
        'cc_email',
        'reply_email',
        'email_subject',
        'document',
        'email_body',
        'created_by',
    ];
}
