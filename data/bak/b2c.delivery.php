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
	    'method' => 'b2c.delivery',
	    'name' => '配送API',
	    'intro' => '本API主要提供配送查询接口',
	    'brief' => '本API主要提供配送查询接口',
		
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
    			'name' => 'is_complete',
    			'type' => 'bool',
    			'is_required' => '是',
    			'example_val' => '1',
    			'default_val' => '0',
    			'desc' => 'true:那么将返回配送完成的，false:那么讲返回配送未完成的',
    		),
	        array(
	            'name' => 'order_id',
	            'type' => 'varchar(50)',
	            'is_required' => '否',
	            'example_val' => '无',
	            'default_val' => '空',
	            'desc' => '订单号,此处如果填入订单号，那么讲返回该订单的详细内容',
	        ),
    	),
    	/*返回的第一种数据,----配送查询，传入参数为:工号，配送完成标志*/
	    'return_data' => array( // 返回值
	        array(
	            'name' => 'bills_count',
	            'type' => 'int',
	            'example_val' => '3',
	            'desc' => '配送单数',
	        ),
	        array(
	            'name' => 'order_count',
	            'type' => 'int',
	            'example_val' => '3',
	            'desc' => '订单数',
	        ),
	        array(
	            'name' => 'order_detail',
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
	    /*返回的第二种数据---配送查询中的详细查询:传入参数为:工号，配送完成标志,订单号*/
	    'return_data2' => array(
	    		array(
	    				'name' => 'order_detail',
	    				'type' => 'array',
	    				'example_val' => '',
	    				'desc' => '订单详细信息',
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
	        'bills_count' => '3',
	        'order_count' => '3',
	    	'order_detail' => array(
	    			'1' => array(
	    				'order_id' => '订单号',
		    			'delivery_id' => '配送单号',
		    			'ship_name' => '收件人',
		    			'ship_tel' => '电话',
		    			'ship_time_hour' => '配送时间',
		    			'ship_addr' => '地址',
	    			),
	    			'2' => array(
	    				'order_id' => '订单号',
    					'delivery_id' => '配送单号',
    					'ship_name' => '收件人',
    					'ship_tel' => '电话',
    					'ship_time_hour' => '配送时间',
    					'ship_addr' => '地址',
	    			),
	    			'3' => array(
	    				'order_id' => '订单号',
    					'delivery_id' => '配送单号',
    					'ship_name' => '收件人',
    					'ship_tel' => '电话',
    					'ship_time_hour' => '配送时间',
    					'ship_addr' => '地址',
	    			),
	    		),
	    	'error_info' => '',
	    ),
	    /*返回的第二种数据格式*/
	    'retrun_json2' => array(
	    		'order_detail' => array(
    						'order_id' => '订单号',
    						'delivery_id' => '配送单号',
    						'ship_name' => '收件人',
    						'ship_tel' => '电话',
    						'ship_end_time_hour' => '配送完成时间',
    						'ship_addr' => '地址',
    						'payment' => '付款方式',
    						'suma' => '合计金额',
    						'field' => '应付金额',
    						'tax_company' => '发票抬头',
    						'tax_content' => '发票内容',
    						'greeting_card' => '生日贺卡内容',
    						'deli_time' => '要求配送时间',
    						'memo' => '顾客备注内容',
    						'sum' => '总运费',
    						'goods' => array(
    							'product1' => array(
    								'p_id' => '商品1编号',
    								'p_name' => '商品1名称',
    								'p_type' => '商品1规格',
    								'p_price' => '商品1单价',
    								'p_num' => '商品1数量',
    								'p_cop' => '商品1优惠',
    								'p_sumprice' => '商品1总金额',
    							),
    							'product2' => array(
    								'p_id' => '商品2编号',
    								'p_name' => '商品2名称',
    								'p_type' => '商品2规格',
    								'p_price' => '商品2单价',
    								'p_num' => '商品2数量',
    								'p_cop' => '商品2优惠',
    								'p_sumprice' => '商品2总金额',
    							),
    						),
	    		),
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
