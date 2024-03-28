<?php

namespace Modules\Users\app\Models;

use App\Util\CommonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public const TABLE = "tb_notification";

    public const ICON = "icon";
    public const SUBJECT = "subject";
    public const BODY_MESSENGE = "body_messenge";
    public const SENT_BY = "sent_by";
    public const SENT_TO = "sent_to";
    public const STATE_READ = "state_read";
    public const FILE = "file";
    public const DATE_SENT = "date_sent";
    public const STAR = "star";
    public const COD_NOTIFICATION = "cod_notification";

    protected $fillable = [
        CommonFields::ID, CommonFields::CREATED_BY, CommonFields::UPDATED_BY, CommonFields::DELETED_BY,

        Notification::ICON, Notification::SUBJECT, Notification::BODY_MESSENGE, Notification::SENT_BY,

        Notification::SENT_TO, Notification::STATE_READ, Notification::FILE, Notification::DATE_SENT,

        Notification::STAR, Notification::COD_NOTIFICATION
    ];

    protected $table = Notification::TABLE;

    public function user_send(){
        return relationships($this->belongsTo(User::class, CommonFields::ID, Notification::SENT_BY));
    }

    public function user_received(){
        return relationships($this->belongsTo(User::class, CommonFields::ID, Notification::SENT_TO));
    }

}
