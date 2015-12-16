<?php
return array(
    'update_time' => '2014-07-10 15:21',
    'method' => array_search('b2c.saleman.delivery_list.get_summary',$method_maps),
    'name' => '配送查询->配送统计--配送员',
    'intro' => '说明：通过 日期，批次号，配送员工号 查询配送统计',
    'brief' => '用于配送员查询配送统计',
    'request_data' => array(  // 请求值
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
            'type' => 'string',
            'is_required' => 1,
            'example_val' => '4',
            'default_val' => '无',
            'desc' => '批次号'
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
                    'example_val' => -3,
                    'desc' => '错误代码'
                ),
                array(
                    'name' => 'message',
                    'type' => 'string',
                    'example_val' => '配送员不存在!',
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
                    'name' => 'data',
                    'type' => 'Array',
                    'example_val' => 'array()',
                    'desc' => '汇总列表',
                    'sub_data' => array(
                        array(
                            'name' => 'num',
                            'type' => 'Number',
                            'example_val' => 4,
                            'desc' => '订单数',
                        ),
                        array(
                            'name' => 'money',
                            'type' => 'float',
                            'example_val' => '1000.000',
                            'desc' => '订单合计金额',
                        ),
                        array(
                            'name' => 'pname',
                            'type' => 'string',
                            'example_val' => '支付宝',
                            'desc' => '支付方式',
                        ),
                    ),
                ),
                array(
                    'name' => 'onum',
                    'type' => 'Number',
                    'example_val' => '63',
                    'desc' => '订单数量',
                    ),
                array(
                    'name' => 'pnum',
                    'type' => 'Number',
                    'example_val' => '65',
                    'desc' => '生产单数量',
                ),
                array(
                    'name' => 'orderDeadNum',
                    'type' => 'Number',
                    'example_val' => '0',
                    'desc' => '订单取消数量',
                ),
            ),
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'data' => array(
                '0' => array(
                        'pname' => '支付宝',
                        'num' => '17',
                        'money' => '4021.5',
                    ),
                '1' => array(
                        'pname' => '快钱',
                        'num' => '5',
                        'money' => '1249',
                    ),
                '2' => array(
                        'pname' => '货到付款 POS',
                        'num' => '15',
                        'money' => '2748.5',
                    ),
                '3' => array(
                        'pname' => '预存款',
                        'num' => '5',
                        'money' => '1024',
                    ),
                '4' => array(
                        'pname' => '货到付款 现金',
                        'num' => '21',
                        'money' => '4517',
                    ),
            ),
            'onum' => '63',
            'pnum' => '65',
            'orderDeadNum' => '0',
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
