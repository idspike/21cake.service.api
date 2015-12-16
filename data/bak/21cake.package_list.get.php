<?php

return array(
    'update_time' => '2014-07-05 19:21',
    'method' => '21cake.package_list.get',
    'name' => '获取多个包裹单明细',
    'intro' => '通过站点、批次号，获取该站点下的包裹单列表（包含订单配送信息）',
    'brief' => '每个配送站站长查询本站某一批次的所有包裹单号',
    'request_data' => array(// 请求值
                                array(
                                    'name' => 'id',
                                    'type' => 'Number',
                                    'is_required' => '是', // 0: 否  1: 是
                                    'example_val' => '1',
                                    'default_val' => '0',
                                    'desc' => '配送站主键ID',
                                ),
                                array(
                                    'name' => 'batch_num',
                                    'type' => 'Number',
                                    'is_required' => '可选', // 0: 否  1: 是
                                    'example_val' => '4',
                                    'default_val' => '0',
                                    'desc' => '批次ID,如输入0，则返回查询站点的当天所有批次数据'
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
                                                'name' => 'total_results',
                                                'type' => 'Number',
                                                'is_required' => '是',
                                                'example_val' => '2',
                                                'desc' => '搜索到的包裹信息总数',
                                            ),
                                           array(
                                                'name' => 'package_list',
                                                'type' => 'Array',
                                                'is_required' => '是',
                                                'example_val' => '',
                                                'desc' => '包裹单列表json数据',
                                                'sub_data' => array(
                                                    array(
                                                        'name' => 'package_number',
                                                        'type' => 'string',
                                                        'is_required' => '是',
                                                        'example_val' => '2120140701346980',
                                                        'desc' => '包裹单号',
                                                    ),
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
                                                        'name' => 'order_sn',
                                                        'type' => 'int',
                                                        'is_required' => '否',
                                                        'example_val' => 'SH20140701346980',
                                                        'desc' => '订单编号（带前缀）',
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

                                                )
                                        )
                                   )
                             )
      ),
    'retrun_xml' => "无",
    'retrun_json' => array(
                            'status' => '1', // 1: 为数据返回正确  0: 有错误信息
                            'data' => array(
                                        'total_results'=>'2',
                                        'package_list'=>array(
                                            array(
                                                'lqh'=>'2001-1',
                                                'package_number'=>'2120140701346980',
                                                'order_id'=>'20140701346980',
                                                'order_sn'=>'SH20140701346980',
                                                'psd'=>'120140701342311',
                                                'status'=>'active',
                                                'ship_status'=>'1',
                                                'ship_name'=>'克洛泽',
                                                'ship_mobile'=>'13810098234',
                                                'ship_tel'=>'02157680900',
                                                'delivery_time'=>'2014-07-03 15:30'
                                                ),
                                            array(
                                                'lqh'=>'2301-1',
                                                'package_number'=>'2120140701341234',
                                                'order_id'=>'201407013567980',
                                                'order_sn'=>'SH20140701344567',
                                                'psd'=>'120140701342311',
                                                'status'=>'active',
                                                'ship_status'=>'1',
                                                'ship_name'=>'张三',
                                                'ship_mobile'=>'13810010900',
                                                'ship_tel'=>'02157680900',
                                                'delivery_time'=>'2014-07-03 11:30'
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
