Dcat Admin扩展 - Ueditor
======

`Ueditor`是一个[Dcat Admin](https://github.com/jqhph/dcat-admin)的扩展包，集成百度在线Editor ，支持附件上传等功能。

> 文件上传功能是参照了[laravel-ueditor](https://github.com/overtrue/laravel-ueditor)实现的。

## 安装

请先确保安装了[Dcat Admin](https://github.com/jqhph/dcat-admin)，执行
```php
composer require dcat-admin-extension/ueditor
```

然后执行以下命令导入前端静态文件：
```php
php artisan admin:import ueditor
```

最后用浏览器打开`http://localhost:8000/admin/helpers/extensions`找到`ueditor`这一行，点击`启用`按钮，即可使用。

除了通过界面启用扩展，也可以手动开启扩展：打开`config/admin-extensions.php`(如果文件不存在请手动创建)，加入以下Code：
```php
return [
    'ueditor' => [
        'enable' => true,
    ],
];
```

## Configuration
`ueditor`文件上传相关Configuration在`config/ueditor.php`。
```php
/* 前后端通信相关的Configuration,注释只允许使用多行方式 */
return [
    /* 上传图片Configuration项 */
    'imageActionName' => 'uploadimage', /* 执行上传图片的action名称 */
    'imageFieldName' => 'upfile', /* 提交的图片表单名称 */
    'imageMaxSize' => 2048000, /* 上传大小限制，单位B */
    'imageAllowFiles' => ['.png', '.jpg', '.jpeg', '.gif', '.bmp'], /* 上传图片格式显示 */
    'imageCompressEnable' => true, /* 是否压缩图片,Default是true */
    'imageCompressBorder' => 1600, /* 图片压缩最长边限制 */
    'imageInsertAlign' => 'none', /* 插入的图片浮动方式 */
    'imageUrlPrefix' => '', /* 图片访问路径前缀 */
    'imagePathFormat' => '/ueditor/image/{yyyy}{mm}{dd}/{time}{rand:6}', /* 上传保存路径,可以自定义保存路径和文件名格式 */
    /* {filename} 会替换成原文件名,Configuration这项需要注意中文乱码问题 */
    /* {rand:6} 会替换成随机数,后面的数字是随机数的位数 */
    /* {time} 会替换成时间戳 */
    /* {yyyy} 会替换成四位年份 */
    /* {yy} 会替换成两位年份 */
    /* {mm} 会替换成两位月份 */
    /* {dd} 会替换成两位日期 */
    /* {hh} 会替换成两位小时 */
    /* {ii} 会替换成两位分钟 */
    /* {ss} 会替换成两位秒 */
    /* 非法字符 \  => * ? ' < > | */
    /* 具请体看线上文档 => fex.baidu.com/ueditor/#use-format_upload_filename */

    /* 涂鸦图片上传Configuration项 */
    'scrawlActionName' => 'uploadscrawl', /* 执行上传涂鸦的action名称 */
    'scrawlFieldName' => 'upfile', /* 提交的图片表单名称 */
    'scrawlPathFormat' => '/ueditor/image/{yyyy}{mm}{dd}/{time}{rand:6}', /* 上传保存路径,可以自定义保存路径和文件名格式 */
    'scrawlMaxSize' => 2048000, /* 上传大小限制，单位B */
    'scrawlUrlPrefix' => '', /* 图片访问路径前缀 */
    'scrawlInsertAlign' => 'none',

    /* 截图工具上传 */
    'snapscreenActionName' => 'uploadimage', /* 执行上传截图的action名称 */
    'snapscreenPathFormat' => '/ueditor/php/image/{yyyy}{mm}{dd}/{time}{rand:6}', /* 上传保存路径,可以自定义保存路径和文件名格式 */
    'snapscreenUrlPrefix' => '', /* 图片访问路径前缀 */
    'snapscreenInsertAlign' => 'none', /* 插入的图片浮动方式 */

    /* 抓取远程图片Configuration */
    'catcherLocalDomain' => ['127.0.0.1', 'localhost', 'img.baidu.com'],
    'catcherActionName' => 'catchimage', /* 执行抓取远程图片的action名称 */
    'catcherFieldName' => 'source', /* 提交的图片tables 表单名称 */
    'catcherPathFormat' => '/ueditor/php/image/{yyyy}{mm}{dd}/{time}{rand:6}', /* 上传保存路径,可以自定义保存路径和文件名格式 */
    'catcherUrlPrefix' => '', /* 图片访问路径前缀 */
    'catcherMaxSize' => 2048000, /* 上传大小限制，单位B */
    'catcherAllowFiles' => ['.png', '.jpg', '.jpeg', '.gif', '.bmp'], /* 抓取图片格式显示 */

    /* 上传视频Configuration */
    'videoActionName' => 'uploadvideo', /* 执行上传视频的action名称 */
    'videoFieldName' => 'upfile', /* 提交的视频表单名称 */
    'videoPathFormat' => '/ueditor/video/{yyyy}{mm}{dd}/{time}{rand:6}', /* 上传保存路径,可以自定义保存路径和文件名格式 */
    'videoUrlPrefix' => '', /* 视频访问路径前缀 */
    'videoMaxSize' => 102400000, /* 上传大小限制，单位B，Default100MB */
    'videoAllowFiles' => [
        '.flv', '.swf', '.mkv', '.avi', '.rm', '.rmvb', '.mpeg', '.mpg',
        '.ogg', '.ogv', '.mov', '.wmv', '.mp4', '.webm', '.mp3', '.wav', '.mid'], /* 上传视频格式显示 */

    /* 上传文件Configuration */
    'fileActionName' => 'uploadfile', /* controller里,执行上传视频的action名称 */
    'fileFieldName' => 'upfile', /* 提交的文件表单名称 */
    'filePathFormat' => '/ueditor/file/{yyyy}{mm}{dd}/{time}{rand:6}', /* 上传保存路径,可以自定义保存路径和文件名格式 */
    'fileUrlPrefix' => '', /* 文件访问路径前缀 */
    'fileMaxSize' => 51200000, /* 上传大小限制，单位B，Default50MB */
    'fileAllowFiles' => [
        '.png', '.jpg', '.jpeg', '.gif', '.bmp',
        '.flv', '.swf', '.mkv', '.avi', '.rm', '.rmvb', '.mpeg', '.mpg',
        '.ogg', '.ogv', '.mov', '.wmv', '.mp4', '.webm', '.mp3', '.wav', '.mid',
        '.rar', '.zip', '.tar', '.gz', '.7z', '.bz2', '.cab', '.iso',
        '.doc', '.docx', '.xls', '.xlsx', '.ppt', '.pptx', '.pdf', '.txt', '.md', '.xml'
    ], /* 上传文件格式显示 */
    /* 列出指定目录下的图片 */
    'imageManagerActionName' => 'listimage', /* 执行图片管理的action名称 */
    'imageManagerListPath' => '/ueditor/image/', /* 指定要列出图片的目录 */
    'imageManagerListSize' => 20, /* 每次列出文件数量 */
    'imageManagerUrlPrefix' => '', /* 图片访问路径前缀 */
    'imageManagerInsertAlign' => 'none', /* 插入的图片浮动方式 */
    'imageManagerAllowFiles' => ['.png', '.jpg', '.jpeg', '.gif', '.bmp'], /* 列出的文件类型 */

    /* 列出指定目录下的文件 */
    'fileManagerActionName' => 'listfile', /* 执行文件管理的action名称 */
    'fileManagerListPath' => '/ueditor/file/', /* 指定要列出文件的目录 */
    'fileManagerUrlPrefix' => '', /* 文件访问路径前缀 */
    'fileManagerListSize' => 20, /* 每次列出文件数量 */
    'fileManagerAllowFiles' => [
        '.png', '.jpg', '.jpeg', '.gif', '.bmp',
        '.flv', '.swf', '.mkv', '.avi', '.rm', '.rmvb', '.mpeg', '.mpg',
        '.ogg', '.ogv', '.mov', '.wmv', '.mp4', '.webm', '.mp3', '.wav', '.mid',
        '.rar', '.zip', '.tar', '.gz', '.7z', '.bz2', '.cab', '.iso',
        '.doc', '.docx', '.xls', '.xlsx', '.ppt', '.pptx', '.pdf', '.txt', '.md', '.xml'
    ] /* 列出的文件类型 */
];
```

### 更改文件存储Storage

百度Editor Default是使用文件存储的，即`file`，如果需要改为其他的存储方式，可以在`config/admin.php`中加上如下Configuration：
```php
return [
    ...
    
    /*
    |--------------------------------------------------------------------------
    | Settings for extensions.
    |--------------------------------------------------------------------------
    |
    | You can find all available extensions here
    | https://github.com/dcat-admin-extensions.
    |
    */
    'extensions' => [
        'ueditor' => [
            'disk' => 'oss',
        ],
    ],
];
```


## 使用

### 基本使用
```php
$form->ueditor('content');
```

### 修改Editor 高度
```php
$form->ueditor('content')->height(500);
```

### 修改文件存储storage
```php
$form->ueditor('content')->disk('oss');
```

### 修改文件上传接口
如果你需要用到自定义的文件上传接口，可以通过这个方法覆盖掉Default的上传接口
```php
$form->ueditor('content')->server('file-upload');
```

### 修改ueditorConfiguration
```php
$form->ueditor('content')->options([
    'maximumWords' => 1000,
]);
```
