<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

return [
    //安装目录检测
    'install_dir' =>[
        ['dir', '可写', 'success', 'addons'],
        ['dir', '可写', 'success', 'public/data'],
        ['dir', '可写', 'success', 'config'],
        ['dir', '可写', 'success', 'runtime'],
        ['dir', '可写', 'success', 'public/uploads'],
    ],
    //安装函数检测
    'install_func'=>[
        ['pdo', '支持', 'success', '类'],
        ['pdo_mysql', '支持', 'success', '模块'],
        ['file_get_contents', '支持', 'success', '函数'],
        ['mb_strlen', '支持', 'success', '函数'],
    ],
    //安装系统环境检测
    'install_env'=>[
        'os' => ['操作系统', '不限制', '类Unix', PHP_OS, 'success'],
        'php' => ['PHP版本', '5.6.0', '5.6+', PHP_VERSION, 'success'],
        'upload' => ['附件上传', '不限制', '2M+', '未知', 'success'],
        'gd' => ['GD库', '2.0', '2.0+', '未知', 'success'],
        'disk' => ['磁盘空间', '30M', '不限制', '未知', 'success'],
],
    //项目名称
    'subject_name'=>'rhaphp',

    //安装数据文件名
    'install_data'=>[
        'db' => 'db.tpl', //database配置文件模板
        'sql' => 'sql.sql',//安装数据库文件
    ],
];
