<?php

return array(
    'update_time' => '2014-07-05 19:21',
    'method' => array_search('21cake.delivery_detail.get',$method_maps),
    'name' => '获取单个订单详细',
    'intro' => '通过订单号或者配送单号获取订单详细',
    'brief' => '通过订单号或者配送单号获取订单详细（包括订单的配送信息）',
    'request_data' => array(// 请求值
                                array(
                                    'name' => 'delivery_id',
                                    'type' => 'Number',
                                    'is_required' => '否', // 0: 否  1: 是
                                    'example_val' => '12014070109890',
                                    'default_val' => '无',
                                    'desc' => '配送单号',
                                ),
                                array(
                                    'name' => 'tid',
                                    'type' => 'Number',
                                    'is_required' => '否', // 0: 否  1: 是
                                    'example_val' => '2014070109890',
                                    'default_val' => '无',
                                    'desc' => '订单号',
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
                                            'name' => 'lqh',
                                            'type' => 'string',
                                            'is_required' => '是',
                                            'example_val' => '2301-1',
                                            'desc' => '站点路区号',
                                        ),
                                        array(
                                            'name' => 'order_id',
                                            'type' => 'int',
                                            'is_required' => '否',
                                            'example_val' => '20140701346980',
                                            'desc' => '订单号',
                                        ),
                                        array(
                                            'name' => 'psd',
                                            'type' => 'int',
                                            'is_required' => '是',
                                            'example_val' => '120140701346980',
                                            'desc' => '配送单号',
                                        ),
                                        array(
                                            'name' => 'status',
                                            'type' => 'String',
                                            'is_required' => '否',
                                            'example_val' => 'active',
                                            'desc' => '订单状态（active:正常订单;dead:已取消;finish:已完成）',
                                        ),
                                        array(
                                            'name' => 'ship_status',
                                            'type' => 'String',
                                            'is_required' => '是',
                                            'example_val' => '0',
                                            'desc' => '订单配送状态（0:未发货;1:已发货;2:部分发货;3:部分退货;4:已退货;5:暂停;6:已出库;7:已进站;8:已取消;）',
                                        ),
                                        array(
                                            'name' => 'ship_name',
                                            'type' => 'String',
                                            'is_required' => '是',
                                            'example_val' => '张三',
                                            'desc' => '收货人姓名',
                                        ),
                                        array(
                                            'name' => 'ship_mobile',
                                            'type' => 'String',
                                            'is_required' => '是',
                                            'example_val' => '张三',
                                            'desc' => '收货人手机',
                                        ),
                                        array(
                                            'name' => 'ship_tel',
                                            'type' => 'String',
                                            'is_required' => '是',
                                            'example_val' => '张三',
                                            'desc' => '收货人固话',
                                        ),
                                        array(
                                            'name' => 'delivery_time',
                                            'type' => 'String',
                                            'is_required' => '是',
                                            'example_val' => '张三',
                                            'desc' => '要求配送时间',
                                        ),
                                        array(
                                            'name' => 'pay_number',
                                            'type' => 'String',
                                            'is_required' => '是',
                                            'example_val' => '230230913',
                                            'desc' => '支付流水号',
                                        )

                                    )
                                )
      ),
    'retrun_xml' => "无",
    'retrun_json' => array(
                            'status' => '1', // 1: 为数据返回正确  0: 有错误信息
                            'data' => array(
                                        array(
                                                'lqh'=>'2001-1',
                                                'order_id'=>'20140701346980',
                                                'order_sn'=>'SH20140701346980',
                                                'psd'=>'120140701342311',
                                                'status'=>'active',
                                                'ship_status'=>'1',
                                                'ship_name'=>'克洛泽',
                                                'ship_mobile'=>'13810098234',
                                                'ship_tel'=>'02157680900',
                                                'delivery_time'=>'2014-07-03 15:30',
                                                'pay_number'=>'230211113'
                                           ),
                                        array(
                                                'lqh'=>'2301-1',
                                                'order_id'=>'20140701312180',
                                                'order_sn'=>'SH20140701312180',
                                                'psd'=>'120140121142111',
                                                'status'=>'active',
                                                'ship_status'=>'1',
                                                'ship_name'=>'克洛泽',
                                                'ship_mobile'=>'13810098234',
                                                'ship_tel'=>'02157680900',
                                                'delivery_time'=>'2014-07-03 15:30',
                                                'pay_number'=>'230230913'
                                           )
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
