<?php
/**
 *
 * @package
 * @version 
 * @copyright 
 * @author Luchunming <luchunming_haoran@163.com>
 * @license 
 */
	return array(
	    'update_time' => '2014-07-10',
	    'method' => array_search('b2c.passport',$method_maps),
	    'name' => '登录API',
	    'intro' => '本API主要提供登录接口',
	    'brief' => '登录接口：21cake.user.passport.login----(需要入参登录名，登录密码，及登录类型(s表示后台，m表示前台))<br/>登出接口:21cake.user.passport.loginout-----(需要入参当前登录人的id)',
		/*request_data:传入参数*/
	    'request_data' => array(
	        array(
	            'name' => 'l_name',
	            'type' => 'string',
	            'is_required' => '1', // 0: 否  1: 是
	            'example_val' => '123772',
	            'default_val' => '',
	            'desc' => '当前操作人员登录名',
	        ),
	        array(
	            'name' => 'l_password',
	            'type' => 'string',
	            'is_required' => '1',
	            'example_val' => '',
	            'default_val' => '无',
	            'desc' => '用户密码',
	        ),
	        array(
	            'name' => 'l_type',
	            'type' => 'string',
	            'is_required' => '0',
	            'example_val' => 's',
	            'default_val' => 's',
	            'desc' => 'm表示前台登录，s表示后台登录',
	        )
    	),
    	/*return_data:返回的数据*/
	    'return_data' => array(
	        array(
	            'name' => 'status',
	            'type' => 'Number',
	            'example_val' => '1',
	            'desc' => '返回1表示成功，返回0表示失败',
	        ),
	        array(
                'name' => 'data',
                'type' => 'Array',
                'example_val' => '返回json数据',
                'desc' => '无',
                'sub_data' => array(
                    array(
                        'name' => 'id',
                        'type' => 'Number',
                        'example_val' => '123456',
                        'desc' => '会员id',
                    ),
                    array(
                        'name' => 'name',
                        'type' => 'string',
                        'example_val' => 'kevin',
                        'desc' => '登录名',
                    ),
                    array(
                        'name' => 'saleman_code',
                        'type' => 'string',
                        'example_val' => '654t321',
                        'desc' => '工号',
                    ),
                    array(
                        'name' => 'is_agent',
                        'type' => 'bool',
                        'example_val' => 'true',
                        'desc' => '是否是站长',
                    ),
                    array(
                        'name' => 'belong_id',
                        'type' => 'int',
                        'example_val' => '654321',
                        'desc' => '所属配送站',
                    ),
                    array(
                        'name' => 'salearea_id',
                        'type' => 'int',
                        'example_val' => '63',
                        'desc' => '销售区域id',
                    ),
                    array(
                        'name' => 'session_id',
                        'type' => 'string',
                        'example_val' => '654321',
                        'desc' => '返回的session用户，再次请求数据时，判断当前是否登录',
                    ),
               ),
	       ),
	    ),
	    
	    /*retrun_xml:返回的xml格式*/
	    'retrun_xml' => "无",
	    /*retrun_json:返回的json格式*/
	    'retrun_json' => array(
	    	'belong_id' => '所属配送站',
	    	
	    	'status' => '1', // 1: 为数据返回正确  0: 有错误信息
	    	'data' => array(
	    	    'id' => '119032',
	    	    'name' => 'kevin',
	    	    'saleman_code' => '54634',
	    	    'is_agent' => 'true',
	    	    'belong_id' => '22',
	    	    'salearea_id' => '63',
	    	    'session_id' => 'FASFDFGFGJIDSAF',
	    	),
	    	'error_info' => '',
	    ),
	    /*error_info:错误码解释*/
	    'error_info' => array(
            array(
                'code' => '错误码',
                'message' => '错误描述',
                'solution' => '解决方案',
            ),
            array(
                'code' => '错误码',
                'message' => '错误描述',
                'solution' => '解决方案',
            ),
        ),
	    /*faq:问起解答*/
	    'faq' => ""
	);
