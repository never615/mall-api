<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\User as Model;

class UserTransformer extends TransformerAbstract
{
    protected $token;
    public function __construct($token = '')
    {
        $this->token = $token;
    }

    public function transform(Model $model)
    {
        $avatar = $model->avatar ?: asset('/images/avatar_'.$model->sex.'.png');
        switch ($this->token) {
            case 'info':
                return [
                    'id' => $model->id,
                    'wxapp_openid' => $model->wxapp_openid,
                    'nickname' => $model->nickname,
                    'mobile' => $model->mobile,
                    'sex' => $model->sex,
                    'avatar' => $avatar,
                    'created_at' => $model->created_at->toDateTimeString(),
                ];
                break;
            case '':
                return [
                    'id' => $model->id,
                    'nickname' => $model->nickname,
                    'sex' => $model->sex,
                    'avatar' => $avatar,
                ];
                break;
            default:
                return [
                    'user' => [
                        'id' => $model->id,
                        'wxapp_openid' => $model->wxapp_openid,
                        'nickname' => $model->nickname,
                        'mobile' => $model->mobile,
                        'sex' => $model->sex,
                        'avatar' => $avatar,
                        'created_at' => $model->created_at->toDateTimeString(),
                    ],
                    'token' => $this->token,
                ];
                break;
        }
    }
}