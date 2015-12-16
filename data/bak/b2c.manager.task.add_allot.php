<?php
return array(
    'update_time' => '2014-07-02 15:21',
    'method' => 'b2c.manager.task.add_allot',
    'name' => '添加任务分派',
    'intro' => '说明：暂无',
    'brief' => '用于进行任务分派',
    'request_data' => array(  // 请求值
        array(
            'name' => 'ps_code',
            'type' => 'int',
            'is_required' => '必须',
            'example_val' => '150009',
            'default_val' => '无',
            'desc' => '配送工号',
        ),
        array(
            'name' => 'delivery_id',
            'type' => 'int',
            'is_required' => '必须',
            'example_val' => '1201405201996154829',
            'default_val' => '无',
            'desc' => '配送单号',
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
            'example_val' => '120140519491250354',
            'desc' => '配送单号',
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            '120140519491250354'
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
