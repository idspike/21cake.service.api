<?php
return array(
    'update_time' => '2014-07-05 19:21',
    'method' => array_search('b2c.saleman.complete_delivery.sign_delivery', $method_maps),
    'name' => '修改配送状态为用户签收',
    'intro' => '修改配送状态为用户签收',
    'brief' => '操作路径：配送员->开始配送->完成配送<br>1：支付方式为POS刷卡，POS支付完成后，修改配送状态为用户签收（带上POS流水号)。<br>
    2：非POS的在客户签收后，点击“配送完成”按钮，提交修改配送状态为用户签收',
    'request_data' => array(// 请求值
        array(
            'name' => 'order_id',
            'type' => 'Number',
            'is_required' => 1, // 0: 否  1: 是
            'example_val' => '20140714106277',
            'default_val' => '0',
            'desc' => '订单号',
        ),
        array(
            'name' => 'pos_number',
            'type' => 'Number',
            'is_required' => 0, // 0: 否  1: 是
            'example_val' => '2011234501',
            'default_val' => '',
            'desc' => 'POS支付流水号',
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
            'type' => 'Array',
            'is_required' => '是',
            'example_val' => '返回json数据',
            'desc' => '无',
            'sub_data' => array(
                array(
                    'name' => 'msg',
                    'type' => 'String',
                    'is_required' => '是',
                    'example_val' => '',
                    'desc' => '成功',
                    ),
                array(
                    'name' => 'order_id',
                    'type' => 'Number',
                    'is_required' => '是',
                    'example_val' => '2014001001',
                    'desc' => '订单号',
                    )
                )
            )
        ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1',
        'data' => array(
            'msg' => '修改成功',
            'order_id' => '201402020001'
            )
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
