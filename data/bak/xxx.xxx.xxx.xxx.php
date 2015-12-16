<?php
return array(
    'update_time' => '2014-06-30 19:21',
    'method' => 'xxx.xxx.xxx.xxx',
    'name' => '注册用户',
    'intro' => '说明',
    'brief' => '应用场景',
    'request_data' => array(  // 请求值
        array(
            'name' => 'member_id',
            'type' => 'int',
            'is_required' => '必须', // 0: 否  1: 是
            'example_val' => '123',
            'default_val' => '无',
            'desc' => '会员ID',
        ),
        array(
            'name' => '名称',
            'type' => '类型',
            'is_required' => '是否必须',
            'example_val' => '示例值',
            'default_val' => '默认值',
            'desc' => '描述',
        ),
        array(
            'name' => '名称',
            'type' => '类型',
            'is_required' => '是否必须',
            'example_val' => '示例值',
            'default_val' => '默认值',
            'desc' => '描述',
        )
    ),
    'return_data' => array( // 返回值
        array(
            'name' => 'brand_id',
            'type' => 'int',
            'example_val' => '示例值',
            'desc' => '描述',
        ),
        array(
            'name' => '名称',
            'type' => '类型',
            'example_val' => '示例值',
            'desc' => '描述',
        )
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'order_id' => '123233252345',
            'user_name' => '张三',
            'order_detail' => array(
                'product_name' => '产品名称'
            )
        ),
        'error_info' => array(
            'code' => '1101',
            'message' => '这是错误信息',
        ),
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
