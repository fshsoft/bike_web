<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
   
    'template'  => [
        // 模板后缀
        'view_suffix'  => 'html',
    ],

    'view_replace_str'  =>  [
        '__RUBLIC__'=>'/public/',
        '__ROOT__' => '/',
        // '__UPLOAD__' => __DIR__.'/../../../public/uploads',
        '__FRONT__' => 'http://localhost/baibao/public/static/front',
    ],

	'session'                => [
	    'prefix'         => 'think',
	    'type'           => '',
	    'auto_start'     => true,
	],
    //分页配置
    'paginate'      => [
        'type'      => 'bootstrap',
        'var_page'  => 'page',
        'list_rows' => 15,
    ],
    
	 // 'session' => [
        // 'auto_start' => true,
        // 'name' => 'login@',
        // 'expire' => 36000,                        /*时间长度*/
    // ],
];
