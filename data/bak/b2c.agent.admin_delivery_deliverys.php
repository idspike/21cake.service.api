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
    'update_time' => '2014-07-03 16:00',
    'method' => 'b2c.agent.admin_delivery_deliverys',
    'name' => '站长收款',
    'intro' => '说明：暂无',
    'brief' => '用于站长收款',
    'request_data' => array(  // 请求值
        array(
            'name' => 'delivery_ids',
            'type' => 'int',
            'is_required' => '必须', // 0: 否  1: 是
            'example_val' => '120140520574488337，120140520641073904',
            'default_val' => '无',
            'desc' => '配送单号码，多个用,号分开',
        ),
    	array(
    		'name' => 'op_id',
    		'type' => 'int',
    		'is_required' => '必须', // 0: 否  1: 是
    		'example_val' => '120140520574488337，120140520641073904',
    		'default_val' => '无',
    		'desc' => '配送单号码，多个用,号分开',
    	)
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
        )
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'delivery_ids' 		=> '120140520574488337，120140520641073904',
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

