<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Detection extends Model
{
    protected $fillable = [
        'id', 'user_id', 'dec_id','title', 'type', 'emergency', 'detection_level', 'tlp', 'pap', 'client_send_ids', 'tags', 'comment', 'description', 'scenery', 'tech_detail',
        'reference', 'evidence', 'ioc', 'cves', 'cvss', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dec_attachment()
    {
        return $this->hasMany('App\Models\Dec_Attachment', 'parent_id');
    }

    public  function contacts()
    {
        return $this->hasMany('App\Models\Contact', 'detection_id');
    }


}
