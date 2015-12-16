<?php

return array(
    'update_time' => '14-7-8 下午4:59',
    'method' => array_search('b2c.agent.package.scan',$method_maps),
    'name' => '进站扫描包裹单',
    'intro' => '通过包裹单号ID，获取包裹明细，包含订单、配送、生产单信息',
    'brief' => '操作路径：站长--进站扫描--扫描包裹单。<BR>根据包裹单号，获取包裹单里的所有订单信息、生产单信息以及配送信息',
    'request_data' => array(// 请求值
        array(
            'name' => 'package_num',
            'type' => 'Number',
            'is_required' => '是', // 0: 否  1: 是
            'example_val' => '1',
            'default_val' => '无',
            'desc' => '包裹单号',
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
                    'name' => 'lqh',
                    'type' => 'String',
                    'is_required' => '是',
                    'example_val' => '23-01-1',
                    'desc' => '站点路区号',
                ),
                array(
                    'name' => 'order_id',
                    'type' => 'Number',
                    'is_required' => '否',
                    'example_val' => '20140701346980',
                    'desc' => '订单号',
                ),
                array(
                    'name' => 'psd',
                    'type' => 'Number',
                    'is_required' => '是',
                    'example_val' => '120140701346980',
                    'desc' => '配送单号',
                ),
                array(
                    'name' => 'status',
                    'type' => 'String',
                    'is_required' => '否',
                    'example_val' => 'active',
                    'desc' => '配送状态 <br>pause:暂停;<br>packaging:已打包;<br>out:已出库;<br>in:已进站;<br>progress:运送中;<br>succ:成功到达;<br>cancel:已取消;<br>ready:准备配送;<br>failed:配送失败;<br>lost:货物丢失;<br>timeout:超时; ',
                ),
                array(
                    'name' => 'ship_status',
                    'type' => 'String',
                    'is_required' => '是',
                    'example_val' => '0',
                    'desc' => '发货状态 <br>0:未发货;<br>1:已发货;<br>2:部分发货;<br>3:部分退货;<br>4:已退货;<br>5:暂停;<br>6:已出库;<br>7:已进站;<br>8:已取消;',
                ),
                array(
                    'name' => 'scd_list',
                    'type' => 'Array',
                    'is_required' => '是',
                    'example_val' => '0',
                    'desc' => '生产单明细',
                    'sub_data' => array(
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
            'psd' => '1201407171258977745',
            'status' => 'in',
            'order_id' => '20140717111853',
            'lqh' => '22-02-3',
            'scd_list' => array(
                '0' => '1001-2-1',
                '1' => '1001-2-2',
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
