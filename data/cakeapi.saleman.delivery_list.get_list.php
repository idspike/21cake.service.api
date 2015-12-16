<?php
return array(
    'update_time' => '2014-07-10 15:21',
    'method' => array_search('b2c.saleman.delivery_list.get_list',$method_maps),
    'name' => '配送查询->配送单详情--配送员',
    'intro' => '说明：通过 日期，订单号 ,订单流水,批次号，支付方式 查询配送单列表',
    'brief' => '用于配送员查询配送列表',
    'request_data' => array(  // 请求值
        array(
            'name' => 'saleman_code',
            'type' => 'Number',
            'is_required' => 1,
            'example_val' => '121001',
            'default_val' => '无',
            'desc' => '配送员工号'
        ),
        array(
            'name' => 'delivery_time',
            'type' => 'string',
            'is_required' => 0,
            'example_val' => '2014-05-18',
            'default_val' => '无',
            'desc' => '日期格式，yyyy-mm-dd',
        ),
        array(
            'name' => 'batch_num',
            'type' => 'Number',
            'is_required' => 0,
            'example_val' => '4',
            'default_val' => '无',
            'desc' => '批次号'
        ),
        array(
            'name' => 'order_id',
            'type' => 'string',
            'is_required' => 0,
            'example_val' => '20140517130827',
            'default_val' => '无',
            'desc' => '订单号'
        ),
        array(
            'name' => 'delivery_id',
            'type' => 'string',
            'is_required' => 0,
            'example_val' => '12014051713768961',
            'default_val' => '无',
            'desc' => '配送单号'
        ),
        array(
            'name' => 'ls_number',
            'type' => 'Number',
            'is_required' => 0,
            'example_val' => '4763',
            'default_val' => '无',
            'desc' => '流水号'
            ),
        array(
            'name' => 'cod_pay_type',
            'type' => 'Number',
            'is_required' => 0,
            'example_val' => '1',
            'default_val' => '无',
            'desc' => '支付方式'
            ),
        array(
            'name' => 'ship_status',
            'type' => 'Number',
            'is_required' => 0,
            'example_val' => '1',
            'default_val' => '无',
            'desc' => '配送状态<br>0:未发货;<br>1:已发货;<br>2:部分发货;<br>3:部分退货;<br>4:已退货;<br>5:暂停;<br>6:已出库;<br>7:已进站;<br>8:已取消;<br>9:已打包;<br>10:成功到达;<br>11:运送中;<br>12:已签收;<br> '
        ),
        array(
            'name' => 'session_id',
            'type' => 'string',
            'is_required' => '1', // 0: 否  1: 是
            'example_val' => 'dfsafe',
            'default_val' => '无',
            'desc' => 'session id',
        ),
        // status
    ),
    'return_data' => array( // 返回值
        array(
            'name' => 'status',
            'type' => 'Number',
            'example_val' => '1: 成功 0: 失败',
            'desc' => '返回状态',
        ),
        array(
            'name' => 'error_info',
            'type' => 'Array',
            'example_val' => 'code: 错误码  <br />message: 错误信息',
            'desc' => '错误信息数据',
            'sub_data' => array(
                array(
                    'name' => 'code',
                    'type' => 'Number',
                    'example_val' => -2,
                    'desc' => '错误代码'
                ),
                array(
                    'name' => 'message',
                    'type' => 'string',
                    'example_val' => '未查询到该员工!',
                    'desc' => '错误信息'
                )
            )
        ),
        array(
            'name' => 'data',
            'type' => 'Array',
            'example_val' => '返回json数据',
            'desc' => '无',
            'sub_data' => array(
                array(
                    'name' => 'order_id',
                    'type' => 'string',
                    'example_val' => '20140517130827',
                    'desc' => '订单号',
                ),
                array(
                    'name' => 'order_sn',
                    'type' => 'string',
                    'example_val' => 'SH20140517130827',
                    'desc' => '订单编号'
                ),
                array(
                    'name' => 'delivery_id',
                    'type' => 'string',
                    'example_val' => '12014051713768961',
                    'desc' => '配送单号',
                ),
                array(
                    'name' => 'ls_number',
                    'type' => 'Number',
                    'example_val' => '4763',
                    'desc' => '流水号',
                ),
                array(
                    'name' => 'batch_num',
                    'type' => 'Number',
                    'example_val' => '1',
                    'desc' => '批次号',
                ),
                array(
                    'name' => 'cod_pay_type',
                    'type' => 'Number',
                    'example_val' => '1',
                    'desc' => '支付类型代号',
                ),
                array(
                    'name' => 'cod_pay_type_cn',
                    'type' => 'string',
                    'example_val' => '支付宝',
                    'desc' => '支付类型代号对应的中文名称',
                ),
                array(
                    'name' => 'ship_status',
                    'type' => 'Number',
                    'example_val' => '10',
                    'desc' => '配送状态',
                ),
                array(
                    'name' => 'ship_status_cn',
                    'type' => 'string',
                    'example_val' => '成功到达',
                    'desc' => '配送状态代号对应的中文名称',
                ),
                array(
                    'name' => 'ship_time',
                    'type' => 'string',
                    'example_val' => '2014-07-10',
                    'desc' => '配送时间',
                ),
                array(
                    'name' => 'total_amount',
                    'type' => 'float',
                    'example_val' => '260.000',
                    'desc' => '订单金额'
                ),
                array(
                    'name' => 'lqh',
                    'type' => 'string',
                    'example_val' => '2301-1',
                    'desc' => '站点路区号'
                ),
                array(
                    'name' => 'status',
                    'type' => 'string',
                    'example_val' => 'active',
                    'desc' => '订单状态'
                ),
                array(
                    'name' => 'status_cn',
                    'type' => 'string',
                    'example_val' => '正常订单',
                    'desc' => '订单状态对应的中文名'
                ),
                array(
                    'name' => 'code',
                    'type' => 'Number',
                    'example_val' => '120857',
                    'desc' => '配送员工号'
                ),
                array(
                    'name' => 'ship_name',
                    'type' => 'string',
                    'example_val' => '习近平',
                    'desc' => '收件人姓名'
                ),
                array(
                    'name' => 'ship_mobile',
                    'type' => 'string',
                    'example_val' => '13888888888',
                    'desc' => '收件人手机'
                ),
                array(
                    'name' => 'ship_tel',
                    'type' => 'string',
                    'example_val' => '010-88888888',
                    'desc' => '收件人固定电话'
                ),
                array(
                    'name' => 'delivery_time',
                    'type' => 'string',
                    'example_val' => '2014-01-10',
                    'desc' => '配送时间'
                ),
                array(
                    'name' => 'trade_no',
                    'type' => 'string',
                    'example_val' => '2014051448504311',
                    'desc' => '第三方交易单号（POS流水号）'
                ),
            ),
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            array(
                'order_id' => '20140517130827',
                'order_sn' => 'SH20140517130827',
                'delivery_id' => '12014051713768961',
                'ls_number' => '4763',
                'batch_num' => '1',
                'ship_name' => '潘斐',
                'ship_mobile' => '13916973558',
                'ship_tel' => '',
                'status' => 'active',
                'distribution_id' => '255',
                'payment' => 'deposit',
                'cod_pay_type' => '0',
                'total_amount' => '260.000',
                'ship_time' => '2014-05-18 09:30:00',
                'ship_status' => '10',
                'cod_pay_type_cn' => '无',
                'ship_status_cn' => '成功到达',
                'status_cn' => '正常订单',
                'lqh' => '25-W1-1',
                'trade_no' => '2014051448504311'
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
    ),
    'faq' => "无"
);
