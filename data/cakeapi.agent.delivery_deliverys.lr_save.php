<?php
return array(
    'update_time' => '14-7-8 下午6:30',
    'method' => array_search('b2c.agent.delivery_deliverys.lr_save',$method_maps),
    'name' => '批量入帐',
    'intro' => '根据配送单号进行批量入账操作',
    'brief' => '配送入帐->批量入帐',
    'request_data' => array(// 请求值
        array(
            'name' => 'delivery_ids',
            'type' => 'string',
            'is_required' => '是', // 0: 否  1: 是
            'example_val' => '20140520089530,20140519202562,20140519202563',
            'default_val' => '无',
            'desc' => '配送单号，用","逗号分割',
        ),
        array(
            'name' => 'session_id',
            'type' => 'string',
            'is_required' => '1', // 0: 否  1: 是
            'example_val' => 'dfsafe',
            'default_val' => '无',
            'desc' => 'session id',
        ),
    ),
    'return_data' => array(// 返回值
        array(
            'name' => 'status',
            'type' => 'Number',
            'is_required' => '是',
            'example_val' => '1',
            'desc' => '返回1表示成功，返回0表示失败',
        ),
        array(
            'name' => 'data',
            'type' => 'string',
            'is_required' => '是',
            'example_val' => '批量入账成功！',
            'desc' => '系统直接提示',
        )
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => '批量入账成功！',
        'error_info' => '',
    ),
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
    'faq' => "无"
);
