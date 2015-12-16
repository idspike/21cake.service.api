<?php
return array(
    'update_time' => '2014-07-02 15:21',
    'method' => array_search('b2c.agent.delivery_deliverys.do_select_member',$method_maps),
    'name' => '手工分派->确认修改--站长',
    'intro' => '说明：站长手工分派,通过配送单号，重新分配给其他配送员',
    'brief' => '操作路径：站长--手工分派<br>用于站长手动修改配送员',
    'request_data' => array(  // 请求值
        array(
            'name' => 'delivery_ids',
            'type' => 'string',
            'is_required' => '必须',
            'example_val' => '1201405151284357692,1201405202022345464,120140520634563579',
            'default_val' => '无',
            'desc' => '配送单号，多个单号请用","逗号隔开',
        ),
        array(
            'name' => 'saleman_code',
            'type' => 'string',
            'is_required' => '必须',
            'example_val' => '101280',
            'default_val' => '无',
            'desc' => '员工号'
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
            'type' => 'string',
            'example_val' => 'success',
            'desc' => '操作成功',
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'status' => '1',
            'data' => 'success',
            'error_info' => ''
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
