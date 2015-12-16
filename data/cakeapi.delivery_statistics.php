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
	    'update_time' => '2014-07-02',
	    'method' => 'b2c.delivery_statistics',
	    'name' => '配送统计API',
	    'intro' => '本API主要提供配送统计查询接口',
	    'brief' => '本API主要提供配送统计查询接口',
		
	    'request_data' => array(
	        array(
	            'name' => 'code',
	            'type' => 'varchar(50)',
	            'is_required' => '是', // 0: 否  1: 是
	            'example_val' => '123772',
	            'default_val' => '',
	            'desc' => '当前操作人员工号',
	        ),
	        array(
	            'name' => 'isdet',
	            'type' => 'bool',
	            'is_required' => '是',
	            'example_val' => '1',
	            'default_val' => '0',
	            'desc' => 'true:那么将返回详情，false:那么讲返回统计数据',
	        ),
    	),
    	/*配送统计*/
	    'return_data' => array( // 返回值
	        array(
	    				'name' => 'sum_statistics',
	    				'type' => 'array',
	    				'example_val' => '',
	    				'desc' => '本站配送大体统计',
	    		),
	    		array(
	    				'name' => 'error_info',
	    				'type' => 'array',
	    				'example_val' => 'code: 错误码  <br />message: 错误信息',
	    				'desc' => '错误信息',
	    		),
	    ),
	    /*配送统计详细*/
	    'return_data2' => array(
	    		array(
	    				'name' => 'det_statistics',
	    				'type' => 'array',
	    				'example_val' => '',
	    				'desc' => '配送详细信息',
	    		),
	    		array(
	    				'name' => 'error_info',
	    				'type' => 'array',
	    				'example_val' => 'code: 错误码  <br />message: 错误信息',
	    				'desc' => '错误信息',
	    		),
	    ),
	    
	    'retrun_xml' => "无",
	    'retrun_json' => array(
	        'sum_statistics' => array(
	    		'1' => array(
	    			'pay_type' => '支付方式',
	    			'order_num' => '订单数',
	    			'sum_amount' => '金额',
	    		),
	    		'2' => array(
	    				'pay_type' => '支付方式',
	    				'order_num' => '订单数',
	    				'sum_amount' => '金额',
	    		),
	    		'3' => array(
	    				'pay_type' => '支付方式',
	    				'order_num' => '订单数',
	    				'sum_amount' => '金额',
	    		),
	    		
	   		 ),
	   		 'error_info' => '',
	    ),
	    'retrun_json2' => array(
	    		'det_statistics' => array(
	    				'order1' => array(
	    						'order_id' => '订单号',
	    						'ship_name' => '收件人',
	    						'payment' => '付款方式',
	    						'amount' => '合计金额',
	    						'ls_number' => '支付流水',
	    						'ship_end_time_hour' => '配送完成时间',
	    				),
	    				'order2' => array(
	    						'order_id' => '订单号',
	    						'ship_name' => '收件人',
	    						'payment' => '付款方式',
	    						'amount' => '合计金额',
	    						'ls_number' => '支付流水',
	    						'ship_end_time_hour' => '配送完成时间',
	    				),
	    				'order3' => array(
	    						'order_id' => '订单号',
	    						'ship_name' => '收件人',
	    						'payment' => '付款方式',
	    						'amount' => '合计金额',
	    						'ls_number' => '支付流水',
	    						'ship_end_time_hour' => '配送完成时间',
	    				),
	    		),
	    		'error_info' => '',
	    ),
	    'error_info' => array(
	        array(
	            'code' => '错误码',
	            'message' => '错误描述',
	            'solution' => '解决方案',
	        ),
	    ),
	    'faq' => "有待整理"
	);
