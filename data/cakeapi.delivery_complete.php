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
	    'update_time' => '2014-07-03',
	    'method' => 'b2c.delivery_complete',
	    'name' => '配送完成操作API',
	    'intro' => '本API主要提供配送完成操作接口',
	    'brief' => '本API主要提供配送完成操作接口,当数据提交，通过验证后，需要修改资料库，修改完成后需要立即发送短信，修改状态返回到前台PAD上',
		
	    'request_data' => array(
	        array(
	            'name' => 'code',
	            'type' => 'varchar(50)',
	            'is_required' => '是', // 0: 否  1: 是
	            'example_val' => '123772',
	            'default_val' => '',
	            'desc' => '当前配送人员工号',
	        ),
	        array(
	            'name' => 'order_id',
	            'type' => 'bigint(20) unsigned',
	            'is_required' => '是',
	            'example_val' => '20140514000676',
	            'default_val' => '空',
	            'desc' => '',
	        ),
    		/* array(
    				'name' => '支付金额',
    				'type' => 'int',
    				'is_required' => '否',
    				'example_val' => '无',
    				'default_val' => '无',
    				'desc' => '分为pos支付，现金支付，代金卡支付，网站支付，其他支付等',
    		), */
    		array(
    			'name' => '支付方式',
    			'type' => 'varchar(100)',
    			'is_required' => '否',
    			'example_val' => 'alipay',
    			'default_val' => '',
    			'desc' => '分为pos支付，现金支付，代金卡支付，网站支付，其他支付等',
    		),
    		array(
    			'name' => '支付卡号',
    			'type' => 'int',
    			'is_required' => '否',
    			'example_val' => '6222021102061458845',
    			'default_val' => '无',
    			'desc' => '记录支付卡号',
    		),
	    		 
    	),
    	/*返回的第一种数据,----配送查询，传入参数为:工号，配送完成标志*/
	    'return_data' => array( // 返回值
	        array(
	            'name' => 'status',
	            'type' => 'bool',
	            'example_val' => '1',
	            'desc' => '是否完成支付',
	        ),
	        array(
        		'name' => 'error_info',
        		'type' => 'array',
        		'example_val' => 'code: 错误码  <br />message: 错误信息',
        		'desc' => '错误信息',
	        ),
	    ),
	    'retrun_xml' => "无",
	    /*返回的第一种数据格式*/
	    'retrun_json' => array(
	        'status' => '1',
	        'error_info' => '',
	    ),
	    /*错误码解释*/
	    'error_info' => array(
	        array(
	            'code' => '错误码',
	            'message' => '错误描述',
	            'solution' => '解决方案',
	        ),
	    ),
	    'faq' => "有待整理"
	);
