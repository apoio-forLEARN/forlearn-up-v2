<?php
namespace App\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Modules\Users\app\Models\User;

class CommonModel extends Model{

    public function createdBy()
    {
        return $this->belongsTo(User::class, CommonFields::CREATED_BY);
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, CommonFields::UPDATED_BY);
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, CommonFields::DELETED_BY);
    }

}
