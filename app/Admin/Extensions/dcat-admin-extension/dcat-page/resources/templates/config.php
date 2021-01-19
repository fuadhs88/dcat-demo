<?php

return [
    'authors' => [
        [
            'name'  => 'Your name',
            'email' => 'Your email',
        ],
    ],
    'homepage'    => '',
    'description' => 'Description...',
    'website'     => [
        'title'       => 'Dcat Page',
        'keywords'    => '',
        'description' => '',
    ],
    'doc' => [
        // Default打开的文档
        'default' => 'installation',
        // 导航index 文档
        'index' => 'documentation',
        // Default打开的版本
        'version'=> 'master',
        // 忽略的文档
        'ignore' => [],
    ],
    'comment' => [
        'enable'         => true,
        'clientID'       => 'xxx',
        'clientSecret'   => 'xxx',
        'repo'           => 'xxx',
        'owner'          => 'xxx',
        'admin'          => ['xxx'],
        'language'       => 'en', // 支持 [en, zh-CN, zh-TW]。
        'perPage'        => 15,
        'pagerDirection' => 'first', // last first
    ],
];
