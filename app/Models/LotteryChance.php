<?php

namespace App\Models;

use App\Models\Traits\HasOwnerHelper;
use Illuminate\Database\Eloquent\SoftDeletes;

class LotteryChance extends Model
{
    use SoftDeletes, HasOwnerHelper;

    protected $fillable = [
        'user_id', 'type', 'description', 'used_at'
    ];

    // 获取抽奖机会方式
    const FIRST_LOGIN_TYPE = 1;
    const INVITE_USER_REGISTER_TYPE = 2;

    // 获取方式对应可获取抽奖机会次数
    const TYPE_LIMIT_COUNTS = [
        self::FIRST_LOGIN_TYPE => 1,
        self::INVITE_USER_REGISTER_TYPE => 2,
    ];

    // 获取抽奖机会方式对应中文注释
    const DESCRIPTIONS = [
        self::FIRST_LOGIN_TYPE => '用户首次注册赠送',
        self::INVITE_USER_REGISTER_TYPE => '邀请用户注册',
    ];

    public static function generateChance($user_id, $type)
    {
        $chance = new self([
            'user_id' => $user_id,
            'type' => $type,
        ]);
        $chance->save();

        return $chance;
    }

    public static function whenInviteUserRegister($user)
    {
        if ($user instanceof User) {
            $user_id = $user->id;
        } else {
            $user_id = intval($user);
        }
        if (self::overCount($user_id, self::INVITE_USER_REGISTER_TYPE)) {
            return false;
        }

        return self::generateChance($user, self::INVITE_USER_REGISTER_TYPE);
    }

    // 用户注册赠送一次
    public static function whenUserFirstLogin($user)
    {
        if ($user instanceof User) {
            $user_id = $user->id;
        } else {
            $user_id = intval($user);
        }
        if (self::overCount($user_id, self::FIRST_LOGIN_TYPE)) {
            return false;
        }

        return self::generateChance($user, self::FIRST_LOGIN_TYPE);
    }

    // 验证指定方式的获得机会次数是否超了
    public static function overCount($user_id, $type)
    {
        if (self::getCount($user_id, $type) >= self::getLimitCount($type)) {
            return true;
        } else {
            return false;
        }
    }

    // 获取指定方式的获得机会次数
    public static function getCount($user_id, $type)
    {
        return self::where('user_id', $user_id)->where('type', $type)->count();
    }

    // 获取指定方式的获得机会的限制次数
    public static function getLimitCount($type)
    {
        return isset(self::TYPE_LIMIT_COUNTS[$type]) ? self::TYPE_LIMIT_COUNTS[$type] : 0;
    }
}
