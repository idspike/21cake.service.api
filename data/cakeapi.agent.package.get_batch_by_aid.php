<?php

return array(
    'update_time' => '14-7-10 下午4:60',
    'method' => array_search('b2c.agent.package.get_batch_by_aid', $method_maps),
    'name' => '获取配送站批次列表',
    'intro' => '根据当前会员id，获取销售区域，配送站及配送批次列表',
    'brief' => '根据当前会员id，获取销售区域，配送站及配送批次列表',
    'request_data' => array(// 请求值
        array(
            'name' => 'salearea_id',
            'type' => 'Number',
            'is_required' => '1', // 0: 否  1: 是
            'example_val' => '1',
            'default_val' => '无',
            'desc' => '当前区域id',
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
            'is_required' => '1',
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
                    'name' => 'batch_num',
                    'type' => 'Number',
                    'example_val' => '1',
                    'desc' => '批次ID',
                ),
                array(
                    'name' => 'ck_time',
                    'type' => 'Number',
                    'example_val' => '0530',
                    'desc' => '批次出库时间',
                ),
                array(
                    'name' => 'start_delivery_time',
                    'type' => 'String',
                    'example_val' => '0930',
                    'desc' => '批次发货开始时间',
                ),
                array(
                    'name' => 'end_delivery_time',
                    'type' => 'String',
                    'example_val' => '1130',
                    'desc' => '批次发货结束时间',
                ),
            )
        )
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1',
        'data' => array(
            '0' => array(
                '0' => array(
                    'id' => 20,
                    'batch_num' => 1,
                ),
                '1' => array(
                    'id' => 10,
                    'batch_num' => 2,
                ),
                '2' => array(
                    'id' => 11,
                    'batch_num' => 3,
                ),
                '3' => array(
                    'id' => 12,
                    'batch_num' => 4,
                ),
            ),
            '1' => array(
                '0' => array(
                    'id' => 5,
                    'batch_num' => 1,
                ),
                '1' => array(
                    'id' => 6,
                    'batch_num' => 2,
                ),
                '2' => array(
                    'id' => 7,
                    'batch_num' => 3,
                ),
                '3' => array(
                    'id' => 8,
                    'batch_num' => 4,
                ),
            )
        ),
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
