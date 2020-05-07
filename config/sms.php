<?php
/**
 * This file is part of the mucts.com.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 * @version 1.0
 * @author herry<yuandeng@aliyun.com>
 * @copyright © 2020 MuCTS.com All Rights Reserved.
 */

return [
    "timeout" => env('SMS_TIMEOUT', 5),// HTTP 请求的超时时间（秒）
    "default" => [
        "strategy" => MuCTS\SMS\Strategies\Order::class,// 网关调用策略，默认：顺序调用
        "gateways" => [// 默认可用的发送网关
            "ali_yun", "lang_ma"
        ]
    ],
    "gateways" => [// 可用的网关配置
        "ali_yun" => [
            "access_key_secret" => env("SMS_ALI_YUN_ACCESS_KEY_SECRET", ''),
            "access_key_id" => env('SMS_ALI_YUN_ACCESS_KEY_ID', ''),
            "sign_name" => env('SMS_ALI_YUN_SIGN_NAME', '')
        ],
        "ali_yun_rest" => [
            "app_key" => env("SMS_ALI_YUN_REST_APP_KEY", ''),
            "app_secret_key" => env("SMS_ALI_YUN_REST_APP_SECRET_KEY", ''),
            "sign_name" => env('SMS_ALI_YUN_REST_SIGN_NAME', '')
        ],
        "avatar_data" => [
            "app_key" => env('SMS_AVATAR_DATA_APP_KEY', '')
        ],
        "baidu" => [
            "domain" => env('SMS_BAIDU_DOMAIN'),
            "ak" => env('SMS_BAIDU_AK'),
            'sk' => env('SMS_BAIDU_SK'),
            'invoke_id' => env('SMS_BAIDU_INVOKE_ID')
        ],
        "chuang_lan" => [
            "channel" => env('SMS_CHUANG_LAN_CHANNEL'),
            'sign' => env('SMS_CHUANG_LAN_SIGN'),
            'unsubscribe' => env('SMS_CHUANG_LAN_UNSUBSCRIBE'),
            'account' => env('SMS_CHUANG_LAN_ACCOUNT'),
            'password' => env('SMS_CHUANG_LAN_PASSWORD'),
            'intel_account' => env('SMS_CHUANG_LAN_INTEL_ACCOUNT'),
            'intel_password' => env('SMS_CHUANG_LAN_INTEL_PASSWORD')
        ],
        "error_log" => [
            'error_log' => env('SMS_ERROR_LOG')
        ],
        'huawei' => [
            'endpoint' => env('SMS_HUAWEI_ENDPOINT'),
            'app_key' => env('SMS_HUAWEI_APP_KEY'),
            'app_secret' => env('SMS_HUAWEI_APP_SECRET'),
            'from' => env('SMS_HUAWEI_FROM'),
            'callback' => env('SMS_HUAWEI_CALLBACK')
        ],
        'hua_xin' => [
            'ip' => env('SMS_HUA_XIN_IP'),
            'user_id' => env('SMS_HUA_XIN_USER_ID'),
            'account' => env('SMS_HUA_XIN_ACCOUNT'),
            'password' => env('SMS_HUA_XIN_PASSWORD'),
            'ext_no' => env('SMS_HUA_XIN_EXT_NO')
        ],
        'i_hu_yi' => [
            'api_key' => env('SMS_I_HU_YI_API_KEY'),
            'api_id' => env('SMS_I_HU_YI_APP_ID'),
            'signature' => env('SMS_I_HU_YI_SIGNATURE')
        ],
        'ju_he' => [
            'app_key' => env('SMS_JU_HE_APP_KEY'),
        ],
        'king_t_to' => [
            'userid' => env('SMS_KING_T_TO_USER_ID'),
            'account' => env('SMS_KING_T_TO_ACCOUNT'),
            'password' => env('SMS_KING_T_TO_PASSWORD'),
        ],
        'lang_ma' => [
            'app_id' => env('SMS_LANG_MA_APP_ID'),
            'app_key' => env('SMS_LANG_MA_APP_KEY')
        ],
        'luo_si_mao' => [
            'api_key' => env('SMS_LUO_SI_MAO_API_KEY')
        ],
        'qi_niu' => [
            'access_key' => env('SMS_QI_NIU_ACCESS_KEY'),
        ],
        'rong_cloud' => [
            'app_secret' => env('SMS_RONG_CLOUD_APP_SECRET'),
        ],
        'send_cloud' => [
            'key' => env('SMS_SEND_CLOUD_KEY'),
            'sms_user' => env('SMS_SEND_CLOUD_USER'),
            'timestamp' => env('SMS_SEND_CLOUD_TIMESTAMP'),
        ],
        'sub_mail' => [
            'app_id' => env('SMS_SUB_MAIL_APP_ID'),
            'app_key' => env('SMS_SUB_MAIL_APP_KEY'),
            'project' => env('SMS_SUB_MAIL_PROJECT')
        ],
        'ten_cent' => [
            'app_key' => env('SMS_TEN_CENT_APP_KEY'),
            'sign_name' => env('SMS_TEN_CENT_SIGN_NAME'),
            'sdk_app_id' => env('SMS_TEN_CENT_APP_ID'),
        ],
        'tian_yi_wu_xian' => [
            'gwid' => env('SMS_TIAN_YI_WU_XIAN_GWID'),
            'username' => env('SMS_TIAN_YI_WU_XIAN_USERNAME'),
            'password' => env('SMS_TIAN_YI_WU_XIAN_PASSWORD')
        ],
        'twillio' => [
            'account_sid' => env('SMS_TWILLIO_ACCOUNT_SID'),
            'from' => env('SMS_TWILLIO_FROM'),
            'token' => env('SMS_TWILLIO_TOKEN')
        ],
        'u_cloud' => [
            'sig_content' => env('SMS_U_CLOUD_SIG_CONTENT'),
            'public_key' => env('SMS_U_CLOUD_PUBLIC_KEY'),
            'private_key' => env('SMS_U_CLOUD_PRIVATE_KEY'),
            'project_id' => env('SMS_U_CLOUD_PROJECT_ID')
        ],
        'u_e_35' => [
            'username' => env('SMS_U_E_35_USERNAME'),
            'userpwd' => env('SMS_U_E_35_USERPWD'),
        ],
        'yun_pian' => [
            'signature' => env('SMS_YUN_PIAN_SIGNATURE'),
            'api_key' => env('SMS_YUN_PIAN_API_KEY')
        ],
        'yun_tong_xun' => [
            'account_sid' => env('YUN_TONG_XUN_ACCOUNT_SID'),
            'account_token' => env('YUN_TONG_XUN_ACCOUNT_TOKEN'),
            'app_id' => env('YUN_TONG_XUN_APP_ID')
        ],
        'yun_xin' => [
            'app_key' => env('SMS_YUN_XIN_APP_KEY'),
            'app_secret' => env('SMS_YUN_XIN_APP_SECRET'),
            'code_length' => env('SMS_YUN_XIN_CODE_LENGTH'),
            'need_up' => env('SMS_YUN_XIN_NEED_UP')
        ],
        'yun_zhi_xun' => [
            'sid' => env('SMS_YUN_ZHI_XUN_SID'),
            'token' => env('SMS_YUN_ZHI_XUN_TOKEN'),
            'app_id' => env('SMS_YUN_ZHI_XUN_APP_ID')
        ]
    ],
    'custom_gateways' => []
];