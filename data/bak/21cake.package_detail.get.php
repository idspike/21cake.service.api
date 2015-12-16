<?php

return array(
    'update_time' => '2014-07-05 19:21',
    'method' => '21cake.package.search',
    'name' => '获取单个包裹单明细',
    'intro' => '通过包裹单号ID，获取包裹明细，包含订单、配送、生产单信息',
    'brief' => '扫描包裹单号，获取包裹单里的所有订单信息、生产单信息以及配送信息',
    'request_data' => array(// 请求值
                                array(
                                    'name' => 'package_id',
                                    'type' => 'Number',
                                    'is_required' => '是', // 0: 否  1: 是
                                    'example_val' => '1',
                                    'default_val' => '无',
                                    'desc' => '包裹单号（包裹单ID）',
                                )
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
                                            'example_val' => '23-01-1',
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
                                            'name' => 'scd_list',
                                            'type' => 'Array',
                                            'is_required' => '是',
                                            'example_val' => '0',
                                            'desc' => '生产单明细',
                                            'sub_data'=> array(
                                                        array(
                                                            'name' => 'scd_number',
                                                            'type' => 'Number',
                                                            'is_required' => '是',
                                                            'example_val' => '1001-4-1',
                                                            'desc' => '生产单号',
                                                        )
                                            )
                                        ),
                                    )
                                )
      ),
    'retrun_xml' => "无",
    'retrun_json' => array(
                            'status' => '1', // 1: 为数据返回正确  0: 有错误信息
                            'data' => array(
                                        'psd' => '123233252345',
                                        'lqh' => 'sub_data',
                                        'scd_list' => array(
                                                          array(
                                                                'scd_number' => '10001-2-1',
                                                                 ),
                                                          array(
                                                                'scd_number' => '10001-2-2',
                                                            )
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
