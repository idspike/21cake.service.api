<?php

return array(
    'update_time' => '14-7-15 下午3:16',
    'method' => array_search('b2c.order.hn.detail',$method_maps),
    'name' => '订单详情',
    'intro' => '公用方法， 用于传入订单号，返回订单详情',
    'brief' => '通过订单号取得订单详细信息',
    'request_data' => array(// 请求值
        array(
            'name' => 'tid',
            'type' => 'Number',
            'is_required' => '0', // 0: 否  1: 是
            'example_val' => '20140617119032',
            'default_val' => '无',
            'desc' => '订单号 (与配送单号二者选一)',
        ),
        array(
            'name' => 'delivery_id',
            'type' => 'Number',
            'is_required' => '0', // 0: 否  1: 是
            'example_val' => '1201405151284357692',
            'default_val' => '无',
            'desc' => '配送单号 (与订单号二者选一)',
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
                    'name' => 'product',
                    'type' => 'Array',
                    'example_val' => 'array(item_arr1,item_arr2...)',
                    'desc' => '商品列表',
                    'sub_data' => array(
                        array(
                            'name' => 'bn',
                            'type' => 'string',
                            'example_val' => '201410-10',
                            'desc' => '商品货号',
                        ),
                        array(
                            'name' => 'name',
                            'type' => 'string',
                            'example_val' => 'Cappuccino 卡布其諾 (磅数：1.0磅)',
                            'desc' => '品名',
                        ),
                        array(
                            'name' => 'nums',
                            'type' => 'Number',
                            'example_val' => '2',
                            'desc' => '数量',
                        ),
                        array(
                            'name' => 'sendnum',
                            'type' => 'Number',
                            'example_val' => '0',
                            'desc' => '已发数量',
                        ),
                        array(
                            'name' => 'price',
                            'type' => 'string',
                            'example_val' => '168.0',
                            'desc' => '单价',
                        ),
                        array(
                            'name' => 'total_amount',
                            'type' => 'string',
                            'example_val' => '168.0',
                            'desc' => '商品总额',
                        ),
                    )
                ),
                array(
                    'name' => 'info',
                    'type' => 'Array',
                    'example_val' => 'array()',
                    'desc' => '用户信息',
                    'sub_data' => array(
                        array(
                            'name' => 'name',
                            'type' => 'string',
                            'example_val' => '习大大',
                            'desc' => '收货人姓名',
                        ),
                        array(
                            'name' => 'mobile',
                            'type' => 'string',
                            'example_val' => '13888888888',
                            'desc' => '收货人手机',
                        ),
                        array(
                            'name' => 'telephone',
                            'type' => 'string',
                            'example_val' => '021-12345678',
                            'desc' => '联系人电话',
                        ),
                        array(
                            'name' => 'area',
                            'type' => 'string',
                            'example_val' => '上海/上海市/奉贤区',
                            'desc' => '收货人地区',
                        ),
                        array(
                            'name' => 'addr',
                            'type' => 'string',
                            'example_val' => '环城东路 288号',
                            'desc' => '收货人地址',
                        ),
                        array(
                            'name' => 'ship_time_scope',
                            'type' => 'string',
                            'example_val' => '21:30-22:00',
                            'desc' => '配送时间段',
                        ),
                        array(
                            'name' => 'ship_time',
                            'type' => 'string',
                            'example_val' => '2014-07-24 21:30:00',
                            'desc' => '配送时间',
                        ),
                        array(
                            'name' => 'order_sn',
                            'type' => 'string',
                            'example_val' => 'SH20140723179358',
                            'desc' => '订单编号',
                        ),
                        array(
                            'name' => 'order_id',
                            'type' => 'string',
                            'example_val' => '20140723179358',
                            'desc' => '订单号',
                        ),
                    )
                ),
                array(
                    'name' => 'cost',
                    'type' => 'Array',
                    'example_val' => 'array()',
                    'desc' => '金额统计',
                    'sub_data' => array(
                        array(
                            'name' => 'cost_item',
                            'type' => 'string',
                            'example_val' => '1024.000',
                            'desc' => '商品总额',
                        ),
                        array(
                            'name' => 'total_amount',
                            'type' => 'string',
                            'example_val' => '1024.000',
                            'desc' => '订单总额',
                        ),
                        array(
                            'name' => 'discount',
                            'type' => 'string',
                            'example_val' => '0',
                            'desc' => '优惠抵扣',
                        ),
                        array(
                            'name' => 'cost_shipping',
                            'type' => 'string',
                            'example_val' => '0.00',
                            'desc' => '快递费',
                        ),
                        array(
                            'name' => 'real_pay',
                            'type' => 'string',
                            'example_val' => '0.00',
                            'desc' => '应付金额',
                        ),
                        array(
                            'name' => 'payment_cn',
                            'type' => 'string',
                            'example_val' => '货到付款-现金',
                            'desc' => '支付方式',
                        ),
                    )
                ),
            ),
        )
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'product' => array(
                '20297624' => array(
                    'bn' => '201410-10',
                    'name' =>  'Cappuccino 卡布其諾 (磅数：1.0磅)',
                    'nums' => '1',
                    'sendnum' => '0',
                    'price' => '168.000',
                    'total_amount' => '168.0',
                ),
                '20297625' => array(
                    'bn' => '201410-20',
                    'name' =>  'Cappuccino 卡布其諾 (磅数：2.0磅)',
                    'nums' => '1',
                    'sendnum' => '0',
                    'price' => '260.000',
                    'total_amount' => '260.0',
                ),
                '20297626' => array(
                    'bn' => '201417-20',
                    'name' =>  'Black and White Chocolate Mousse 黑白巧克力慕斯 (磅数：2.0磅)',
                    'nums' => '1',
                    'sendnum' => '0',
                    'price' => '260.000',
                    'total_amount' => '260.0',
                ),
                '20297627' => array(
                    'bn' => '201404-10',
                    'name' => 'Almond Crumble 杏仁克魯兹(磅数：1.0磅)',
                    'nums' => '2',
                    'sendnum' => '0',
                    'price' => '168.000',
                    'total_amount' => '336.0',
                ),
            ),
            'info' => array(
                'name' => '沈梭铭',
                'mobile' => '13482616938',
                'telephone' => '',
                'area' => '上海/上海市/奉贤区',
                'addr' => '上海市奉贤区江海二村',
                'ship_time_scope' => '21:30-22:00',
                'ship_time' => '2014-07-24 21:30:00',
                'order_sn' => 'SH20140723179358',
                'order_id' => '20140723179358',
            ),
            'cost' => array(
                'cost_item' => '1024.000',
                'total_amount' => '1024.000',
                'discount' => '0',
                'cost_shipping' => '0.000',
                'real_pay' => '1024.000',
                'payment_cn' => '货到付款-现金',
            ),
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
