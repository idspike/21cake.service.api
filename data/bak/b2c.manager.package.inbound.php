<?php
return array(
    'update_time' => '2014-07-02 15:21',
    'method' => 'b2c.manager.package.inbound',
    'name' => '包裹入站',
    'intro' => '说明：暂无',
    'brief' => '用于扫描包裹单号入站',
    'request_data' => array(  // 请求值
        array(
            'name' => 'salearea_id',
            'type' => 'int',
            'is_required' => '必须',
            'example_val' => '1',
            'default_val' => '无',
            'desc' => '地区id',
        ),
        array(
            'name' => 'distribution_real_id',
            'type' => 'int',
            'is_required' => '必须',
            'example_val' => '21',
            'default_val' => '无',
            'desc' => '配送站点号',
        ),
        array(
            'name' => 'package_number',
            'type' => 'int',
            'is_required' => '必须',
            'example_val' => '0220140514168194',
            'default_val' => '无',
            'desc' => '包裹号',
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
            'name' => 'data',
            'type' => 'int',
            'example_val' => '0220140514168194',
            'desc' => '包裹单号',
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array('0220140514168194'),
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
