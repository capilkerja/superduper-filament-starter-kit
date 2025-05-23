<?php

return [
    'general_settings' => [
        'title' => '一般设置',
        'heading' => '一般设置',
        'subheading' => '在此处管理一般站点设置。',
        'navigationLabel' => '一般的',
        'sections' => [
            'site' => [
                'title' => '地点',
                'description' => '管理基本设置。',
            ],
            'theme' => [
                'title' => '主题',
                'description' => '更改默认主题。',
            ],
        ],
        'fields' => [
            'brand_name' => '品牌名称',
            'site_active' => '站点状态',
            'brand_logoHeight' => '品牌徽标高度',
            'brand_logo' => '品牌徽标',
            'site_favicon' => '网站Favicon',
            'primary' => '基本的',
            'secondary' => '次要',
            'gray' => '灰色的',
            'success' => '成功',
            'danger' => '危险',
            'info' => '信息',
            'warning' => '警告',
        ],
    ],
    'mail_settings' => [
        'title' => '邮件设置',
        'heading' => '邮件设置',
        'subheading' => '管理邮件配置。',
        'navigationLabel' => '邮件',
        'sections' => [
            'config' => [
                'title' => '配置',
                'description' => '描述',
            ],
            'sender' => [
                'title' => '来自（发件人）',
                'description' => '描述',
            ],
            'mail_to' => [
                'title' => '邮寄到',
                'description' => '描述',
            ],
        ],
        'fields' => [
            'placeholder' => [
                'receiver_email' => '接收器电子邮件..',
            ],
            'driver' => '司机',
            'host' => '主持人',
            'port' => '港口',
            'encryption' => '加密',
            'timeout' => '暂停',
            'username' => '用户名',
            'password' => '密码',
            'email' => '电子邮件',
            'name' => '姓名',
            'mail_to' => '邮寄到',
        ],
        'actions' => [
            'send_test_mail' => '发送测试邮件',
        ],
    ]
    ];
