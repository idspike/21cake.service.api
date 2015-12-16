<?php
return array(
    'update_time' => '2014-07-02 15:21',
    'method' => 'b2c.manager.package.checkinbound',
    'name' => '包裹入站检查',
    'intro' => '说明：暂无',
    'brief' => '用于检查站点入站情况',
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
            'type' => 'array',
            'example_val' => 'should_count: 应入数 <br>real_count: 实入数 <br>without_count: 未入数',
            'desc' => '应入、已入、未入站信息',
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'should_count' => 9,
            'real_count' => 2,
            'without_count' => 7,
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
