<?php
/**
 *
 * @package
 * @version
 * @copyright
 * @author konglingmao
 * @license
 */
return array(
    'update_time' => '2014-07-03 15:21',
    'method' => 'b2c.agent.delivery_search',
    'name' => '配送单查询',
    'intro' => '说明：暂无',
    'brief' => '用于配送单信息查询',
    'request_data' => array(  // 请求值
        array(
            'name' => 'distribution_real_id',
            'type' => 'int',
            'is_required' => '必须',
            'example_val' => '无',
            'default_val' => '无',
            'desc' => '配送站编号',
        ),
    		
    	array(
    		'name' => 'delivery_id',
    		'type' => 'int',
    		'is_required' => '', // 0: 否  1: 是
    		'example_val' => '无',
    		'default_val' => '无',
    		'desc' => '配送单号码',
    	),
    		
   		array(
  			'name' => 'ps_id',
  			'type' => 'string',
  			'is_required' => '',
  			'example_val' => '无',
  			'default_val' => '无',
  			'desc' => '配送员编号',
  		),
  		array(
  			'name' => 'delivery_status',
  			'type' => 'string',
  			'is_required' => '',
  			'example_val' => '无',
  			'default_val' => '无',
  			'desc' => '配送单状态',
    		),
    ),
    'return_data' => array( // 返回值
        array(
            'name' => 'status',
            'type' => 'int',
            'example_val' => '1: 成功 0: 失败',
            'desc' => '返回状态',
        ),
        array(
            'name' => 'error_info',
            'type' => 'array',
            'example_val' => 'code: 错误码  <br />message: 错误信息',
            'desc' => '如果有错误信息',
        ),
        array(
            'name' => 'delivery_id',
            'type' => 'int',
            'example_val' => '',
            'desc' => '配送单号',
        ),
        array(
            'name' => 'delivery_status',
            'type' => 'string',
            'example_val' => '暂停,已打包,已出库,已进站,运送中,成功到达,已取消,准备配送,配送失败,货物丢失,超时',
            'desc' => '配送状态',
        ),
        array(
            'name' => 'production_status',
            'type' => 'string',
            'example_val' => '暂停,待生产,开始生产,生产完成,已取消;',
            'desc' => '生产状态',
        ),
        array(
            'name' => 'is_print ',
            'type' => 'string',
            'example_val' => '已打印，未打印;',
            'desc' => '打印状态',
        ),
        array(
            'name' => 'delivery_time ',
            'type' => 'int',
            'example_val' => '1400058000',
            'desc' => '配送时间',
        ),
        array(
            'name' => 'ship_time_scope',
            'type' => 'string',
            'example_val' => '21:30-22:00',
            'desc' => '配送时间段',
        ),
   		array(
   			'name' => 'ps_id',
   			'type' => 'string',
   			'example_val' => '1000',
   			'desc' => '配送员编号',
   		),
        array(
            'name' => 'distribution_id（distribution_name）',
            'type' => 'string',
            'example_val' => '01',
            'desc' => '路区信息',
        )
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'delivery_id' 		=> '12014051624708',
            'delivery_status'	=> '已进站',
        	'production_status' => '生产完成',
        	'is_print'			=> '已打印',
        	'delivery_time'		=> '1400058000',
        	'ship_time_scope'	=> '17:01-17:30',
        	'delivery_status'	=> '已进站',
        	'ps_id'				=> '1008',
        	'distribution_id（distribution_name）' => '01',
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
    'faq' => "无"
);
