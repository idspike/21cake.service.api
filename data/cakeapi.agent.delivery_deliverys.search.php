<?php
return array(
    'update_time' => '2014-07-02 15:21',
    'method' => array_search('b2c.agent.delivery_deliverys.search',$method_maps),
    'name' => '配送单手工分派查询',
    'intro' => '站长手工分派,通过配送员ID或者配送单号查询配送订单信息',
    'brief' => '操作路径：站长--手工分派<BR>用于站长手动分派配送员。只有通过扫描分派后的配送单，才可以手工修改分派配送员',
    'request_data' => array(  // 请求值
        array(
            'name' => 'search_type',
            'type' => 'string',
            'is_required' => '必须',
            'example_val' => 'delivery_id 或<br> saleman_code',
            'default_val' => '无',
            'desc' => '查询条件类型<br>delivery_id：配送单号<br>saleman_code：配送员工号',
        ),
        array(
            'name' => 'num',
            'type' => 'Number',
            'is_required' => '必须',
            'example_val' => '121001',
            'default_val' => '无',
            'desc' => '员工号',
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
            'desc' => '如果Array有错误信息',
            'sub_data' => array(
                array(
                    'name' => 'code',
                    'type' => 'Number',
                    'example_val' => -4,
                    'desc' => '错误代码'
                ),
                array(
                    'name' => 'message',
                    'type' => 'string',
                    'example_val' => '没有查询到该配送员',
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
                    'name' => 'saleman',
                    'type' => 'Array',
                    'example_val' => 'array',
                    'desc' => '配送员工号，名字',
                    'sub_data' => array(
                        array(
                            'name' => 'code',
                            'type' => 'Number',
                            'example_val' => '150008',
                            'desc' => '配送员工号',
                        ),
                        array(
                            'name' => 'name',
                            'type' => 'string',
                            'example_val' => '王祖严',
                            'desc' => '配送员姓名',
                        )
                    ),
                ),
                array(
                    'name' => 'order',
                    'type' => 'Array',
                    'example_val' => 'array',
                    'desc' => '配送订单信息',
                    'sub_data' => array(
                        array(
                            'name' => 'order_id',
                            'type' => 'Number',
                            'example_val' => 20140520159513,
                            'desc' => '订单ID',
                        ),
                        array(
                            'name' => 'total_amount',
                            'type' => 'float',
                            'example_val' => "178.000",
                            'desc' => '订单金额',
                        ),
                        array(
                            'name' => 'ship_status',
                            'type' => 'string',
                            'example_val' => '运送中',
                            'desc' => '配送状态',
                        ),
                        array(
                            'name' => 'ship_name',
                            'type' => 'string',
                            'example_val' => '小明',
                            'desc' => '收件人姓名',
                        ),
                    ),
                ),
            )
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'saleman'=>array(
                'sale_id' => 84,
                'name' => '王祖严',
            ),
            'order'=>array(
                0 => array (
                    'order_id' => 20140520159513,
                    'total_amount' => 178.000,
                    'ship_status' => '运送中',
                    'ship_name' => '李文通',
                    'ship_mobile' => 15921167252
                ),
                1 => array(
                    'order_id' => 20140520140537,
                    'total_amount' => 168.000,
                    'ship_status' => '运送中',
                    'ship_name' => '郭晓睿',
                    'ship_mobile' => 18301846009,
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
    ),
    'faq' => "无"
);
