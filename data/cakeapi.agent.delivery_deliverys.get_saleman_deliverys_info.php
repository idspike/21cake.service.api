<?php

return array(
    'update_time' => '14-7-8 下午5:37',
    'method' => array_search('b2c.agent.delivery_deliverys.get_saleman_deliverys_info',$method_maps),
    'name' => '配送入帐',
    'intro' => '根据配送员工号，查询对应的配送结果 信息',
    'brief' => '扫描配送员工号，取得相应的信息',
    'request_data' => array(// 请求值
        array(
            'name' => 'saleman_code',
            'type' => 'string',
            'is_required' => '1', // 0: 否  1: 是
            'example_val' => '120006',
            'default_val' => '无',
            'desc' => '配送员工号',
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
                    'name' => 'count',
                    'type' => 'int',
                    'example_val' => '1',
                    'desc' => '发货单数量',
                ),
                array(
                    'name' => 'money',
                    'type' => 'string',
                    'example_val' => '98.00',
                    'desc' => '应收金额共计',
                ),
                array(
                    'name' => 'cod_pay_type_几',
                    'type' => 'decimal',
                    'example_val' => '390',
                    'desc' => '金额',
                ),
                array(
                    'name' => 'data',
                    'type' => 'Array',
                    'example_val' => '无',
                    'desc' => '数据明细',
                    'sub_data' => array(
                        array(
                            'name' => 'order_id',
                            'type' => 'string',
                            'example_val' => '无',
                            'desc' => '订单号',
                        ),
                        array(
                            'name' => 'ship_name',
                            'type' => 'string',
                            'example_val' => 'Tom',
                            'desc' => '收件人',
                        ),
                        array(
                            'name' => 'payment',
                            'type' => 'string',
                            'example_val' => '现金',
                            'desc' => '付款方式',
                        ),
                        array(
                            'name' => 'total_amount',
                            'type' => 'string',
                            'example_val' => '288.00',
                            'desc' => '金额',
                        ),
                        array(
                            'name' => 'trade_no',
                            'type' => 'string',
                            'example_val' => '823923093',
                            'desc' => '支付流水',
                        ),
                    ),
                ),
            )
        )
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'count' => '120006',
            'money' => '726',
            'cod_pay_type_1' => '390',
            'cod_pay_type_2' => '336',
            'data' => array(
                array(
                    'delivery_id'=>'1201407211196523725',
                    'order_id' => '123123234',
                    'ship_name' => 'Jim',
                    'payment' => '现金',
                    'total_amount' => '90.00',
                    'trade_no' => '',
                    'delivery_time'=>'2014-07-21 19:00:00'
                ),
                array(
                    'delivery_id'=>'120140721395779809',
                    'order_id' => '8989234878',
                    'ship_name' => 'Jerry',
                    'payment' => 'POS',
                    'total_amount' => '90.00',
                    'trade_no' => '980980998',
                    'delivery_time'=>'2014-07-21 19:00:00'
                ),
            )
        ),
        'error_info' => ''
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
