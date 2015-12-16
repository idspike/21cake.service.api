    <!--正文区 begin-->
    <div class="col-main bg_line">
        <div class="main-wrap">
            <div class="title-wrap">
                <h1 class="incre-bg title"><?php echo $method_info['method'] . '  ' . $method_info['name']?> <span style="float:right;">更新时间: <?php echo $method_info['update_time'];?></span></h1>  
                <ul class="api-sub-title layout clearfix">
                    <li class="sub-title"><a class="link" href="#sys-param">系统级输入参数</a></li>
                    <li class="sub-title"><a class="link" href="#api-param">应用级输入参数</a></li>
                    <li class="sub-title"><a class="link" href="#result">返回结果说明</a></li>
                    <li class="sub-title"><a class="link" href="#example">返回示例</a></li>
                    <li class="sub-title"><a class="link" href="#error-code">错误码</a></li> 
                    <li class="sub-title last"><a class="link" href="#FAQ">FAQ</a></li>
                </ul>
            </div>

            <div class="api-detail-bd" id="bd">
                <div>                        
                    <p class="title-intro">
                        <?php echo $method_info['intro'];?>
                    </p>
                    <div>
                        <h2 class="head-title" id="tag-rela">
                            <img src="assets/tri_down.png" style="cursor:pointer;margin-right:5px;">                                
                            应用场景    
                        </h2>
                        <div id="content-tag-rela">
                            <p class="introduction">
                                <?php echo $method_info['brief'];?>
                            </p>
                        </div>
                    </div>
                    <div>
                        <h2 class="head-title" id="sys-param">
                            <img src="assets/tri_down.png" style="cursor:pointer;margin-right:5px;" >
                            系统级别输入参数
                        </h2>
                        <div id="content-sys-param">
                            <div class="sub-column-title1"><a href="#">HTTP签名调用模式:</a></div>
                            <table class="api-table" cellspacing="0">
                                <thead>
                                    <tr>    
                                        <th class="middle" width="15%">名称</th>    
                                        <th class="middle" width="15%">类型</th>    
                                        <th class="middle" width="15%">是否必须</th>    
                                        <th class="left" width="55%">描述</th>    
                                    </tr>
                                </thead>
                                <tbody>

                                <tr class="odd">
                                    <td class="middle">method</td>
                                    <td class="middle">String</td>
                                    <td class="middle">是</td>
                                    <td class="left">API接口名称</td>
                                </tr>

                                <tr class="even">
                                    <td class="middle">app_key</td>
                                    <td class="middle">String</td>
                                    <td class="middle">是</td>
                                    <td class="left">应用的app_key</td>
                                </tr>
                                <tr class="odd">
                                    <td class="middle">app_secret</td>
                                    <td class="middle">String</td>
                                    <td class="middle">不可传入</td>
                                    <td class="left">21cake 分配给应用的app_secret</td>
                                </tr>
                                <tr class="even">
                                    <td class="middle">format</td>
                                    <td class="middle">String</td>
                                    <td class="middle">否</td>
                                    <td class="left">默认: json</td>
                                </tr>
                                <tr class="odd">
                                    <td class="middle">timestamp</td>
                                    <td class="middle">String</td>
                                    <td class="middle">是</td>
                                    <td class="left">时间戳，格式为yyyy-MM-ddHH:mm:ss，例如：2011-06-16 13:23:30。21cake API服务端允许客户端请求时间误差为6分钟</td>
                                </tr>
                                <tr class="even">
                                    <td class="middle">v</td>
                                    <td class="middle">String</td>
                                    <td class="middle">是</td>
                                    <td class="left">API协议版本，可选值:1.0。</td>
                                </tr>
                                <tr class="odd">
                                    <td class="middle">sign</td>
                                    <td class="middle">String</td>
                                    <td class="middle">是</td>
                                    <td class="left">API输入参数签名结果</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div>
                        <h2 class="head-title" id="api-param">
                            <img src="assets/tri_down.png" style="cursor:pointer;margin-right:5px;" >
                            应用级输入参数
                        </h2>
                        <div id="content-api-param">
                            <table class="api-table" cellspacing="0">
                                <thead>
                                    <tr>    
                                        <th width="15%" class="middle">名称</th>
                                        <th width="10%" class="middle">类型</th>
                                        <th width="10%" class="middle">是否必须</th>
                                        <th width="15%" class="left">示例值</th>
                                        <th width="10%" class="left">默认值</th>
                                        <th width="40%" class="left">描述</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php                               
                                foreach($method_info['request_data'] as $k=>$v) {
                                    $row_info = $k % 2;
                                ?>
                                     <tr <?php if ($row_info == 0) { echo 'class="odd"';} else {echo 'class="even"';}?>>
                                        <td class="middle"><?php echo $v['name'];?></td>
                                        <td class="middle">
                                            <?php echo $v['type'];?>  
                                        </td>
                                        <td class="middle">
                                            <?php echo $v['is_required']?'是':'否';?>   
                                        </td>
                                        <td class="left">
                                            <?php echo $v['example_val'];?> 
                                        </td>
                                        <td class="left">
                                            <?php echo $v['default_val'];?> 
                                        </td>
                                        <td class="left">
                                            <?php echo $v['desc'];?> 
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <h2 class="head-title" id="result">
                            <img src="assets/tri_down.png" style="cursor:pointer;margin-right:5px;" >
                            返回结果说明                       
                        </h2>
                        <div id="content-result">
                            <table class="api-table" cellspacing="0">
                                <thead>
                                    <tr>    
                                        <th width="20%" class="left">名称</th>
                                        <th width="15%" class="middle">类型</th>
                                        <th width="20%" class="left">示例值</th>
                                        <th width="30%" class="left">描述</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php                               
                                foreach($method_info['return_data'] as $k=>$v) {
                                    $row_info = $k % 2;
                                ?>
                                     <tr <?php if ($row_info == 0) { echo 'class="odd"';} else {echo 'class="even"';}?>>
                                        <td class="middle"><?php echo $v['name'];?></td>
                                        <td class="middle">
                                            <?php 
                                            if (strtoupper($v['type']) == 'ARRAY') {
                                                ?>
                                            <a href="#" style="color: red;" class="J_array_fileds" data-id="<?php echo $v['name']. '_' . $k;?>"><?php echo $v['type'];?>[]</a>
                                           <?php
                                            } else {
                                                echo $v['type'];
                                            }
                                            ?>  
                                        </td>
                                        <td class="left">
                                            <?php echo $v['example_val'];?> 
                                        </td>
                                        <td class="left">
                                            <?php echo $v['desc'];?> 
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php
                    foreach ($method_info['return_data'] as $k => $v) {
                        if (strtoupper($v['type']) == 'ARRAY' && !empty($v['sub_data'])) {
                            get_subdata_div($k, $v);
                            foreach ($v['sub_data'] as $key => $value) {
                                if (strtoupper($value['type']) == 'ARRAY' && !empty($value['sub_data'])) {
                                    get_subdata_div($key, $value);
                                }
                            }
                            
                        }
                    }
                    ?>

                    <!-- kevin::第二种返回数据格式::begin -->
                    <?php if(!empty($method_info['return_data2'])) {?>
                    <div>
                        <h2 class="head-title" id="result">
                            <img src="assets/tri_down.png" style="cursor:pointer;margin-right:5px;" >
                            返回结果说明 (第二种返回方式)                      
                        </h2>
                        <div id="content-result">
                            <table class="api-table" cellspacing="0">
                                <thead>
                                    <tr>    
                                        <th width="20%" class="left">名称</th>
                                        <th width="15%" class="middle">类型</th>
                                        <th width="20%" class="left">示例值</th>
                                        <th width="30%" class="left">描述</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php                               
                                foreach($method_info['return_data2'] as $k=>$v) {
                                    $row_info = $k % 2;
                                ?>
                                     <tr <?php if ($row_info == 0) { echo 'class="odd"';} else {echo 'class="even"';}?>>
                                        <td class="left"><?php echo $v['name'];?></td>
                                        <td class="middle">
                                            <?php echo $v['type'];?>  
                                        </td>
                                        <td class="left">
                                            <?php echo $v['example_val'];?> 
                                        </td>
                                        <td class="left">
                                            <?php echo $v['desc'];?> 
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php }?>
                    <!-- kevin::第二种返回数据格式::end -->
                    <div>
                        <h2 class="head-title " id="example">
                            <img src="assets/tri_down.png" style="cursor:pointer;margin-right:5px;"     >
                            返回示例
                        </h2>
                        <div id="content-example">
                            <p class="data-format">公用说明:</p>
                            <div class="img-wrap" style="font-size: 15px;">
                                <br />
                                   status： 1 -> 返回正确;  0 -> 返回错误 <br />
                                   data：请求返回的相关数据 <br />
                                   error_info：如返回错误，这里显示错误详情 <br />
                            </div>
                            <br /><br />
                            <p class="data-format">XML数据格式:</p>
                            <div class="img-wrap">
                                <pre><?php echo $method_info['retrun_xml'];?></pre>
                            </div>

                            <p class="data-format">JSON数据格式:</p>
                            <div class="img-wrap" style="text-align:left;font-size:16px;word-wrap: break-word;">
                                <br />
                                <pre><?php echo json_encode($method_info['retrun_json']);?></pre>
                                <br /><br />
                            </div>
                            <p class="data-format">JSON对应PHP数组格式:</p>
                            <div class="img-wrap" style="text-align:left;font-size:16px;word-wrap: break-word;">
                                <pre><?php print_r($method_info['retrun_json']);?></pre>
                            </div>
                            <!-- kevin::第二种返回数据格式::begin -->
                    		<?php if(!empty($method_info['retrun_json2'])) {?>
                            <p class="data-format">JSON2数据格式:</p>
                            <div class="img-wrap" style="text-align:left;font-size:16px;word-wrap: break-word;">
                                <br />
                                <?php echo json_encode($method_info['retrun_json2']);?>
                                <br /><br />
                            </div>
                            <p class="data-format">JSON2对应PHP数组格式:</p>
                            <div class="img-wrap" style="text-align:left;font-size:16px;word-wrap: break-word;">
                                <pre><?php echo var_export($method_info['retrun_json2'], 1);?></pre>
                            </div>
                            <?php }?>
                    		<!-- kevin::第二种返回数据格式::end -->
                        </div>
                    </div>
                    <div>
                        <h2 class="head-title" id="error-code">
                            <img src="assets/tri_down.png" style="cursor:pointer;margin-right:5px;" >
                            错误码
                        </h2>
                        <div id="content-error-code">
                            <table class="api-table" cellspacing="0">
                                <thead>
                                    <tr>    
                                        <th class="left" width="30%">错误码</th>    
                                        <th class="left" width="30%">错误描述</th>
                                        <th class="left" width="40%">解决方案</th>    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php                               
                                foreach($method_info['error_info'] as $k=>$v) {
                                    $row_info = $k % 2;
                                ?>
                                     <tr <?php if ($row_info == 0) { echo 'class="odd"';} else {echo 'class="even"';}?>>
                                        <td class="left"><?php echo $v['code'];?></td>
                                        <td class="left">
                                            <?php echo $v['message'];?> 
                                        </td>
                                        <td class="left">
                                            <?php echo $v['solution'];?> 
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div>
                        <h2 class="head-title" id="FAQ">
                            <img src="assets/tri_down.png" style="cursor:pointer;margin-right:5px;">
                            FAQ
                        </h2>
                        <div id="content-FAQ">
                            <?php echo $method_info['faq'];?>
                        </div>

                    </div>    
                </div>
                <!-- ued div end-->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.J_array_fileds').click(function(){
                var _this_id = $(this).attr('data-id');
                var show_class = '.J_data_' + _this_id;
                $(show_class).toggle('fast');
                return false;
            });  
        });
    </script>
  
  <?php
    function get_subdata_div($k, $v) {
    ?>
      <div class="J_data_<?php echo $v['name'];?>_<?php echo $k;?>" style="display:none;">
            <h2 class="head-title" id="result">
                <img src="assets/tri_down.png" style="cursor:pointer;margin-right:5px;" >
                返回结果说明  [<?php echo $v['name']; ?>]                
            </h2>
            <div id="content-result">
                <table class="api-table" cellspacing="0">
                    <thead>
                        <tr>    
                            <th width="20%" class="left">名称</th>
                            <th width="15%" class="middle">类型</th>
                            <th width="20%" class="left">示例值</th>
                            <th width="30%" class="left">描述</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($v['sub_data'] as $k_sub => $v_sub) {
                            $row_info = $k_sub % 2;
                            ?>
                            <tr <?php if ($row_info == 0) { echo 'class="odd"'; } else {echo 'class="even"';} ?>>
                                <td class="middle"><?php echo $v_sub['name']; ?></td>
                                <td class="middle">
                                    <?php 
                                    if (strtoupper($v_sub['type']) == 'ARRAY') {
                                        ?>
                                        <a href="#" style="color: red;" class="J_array_fileds" data-id="<?php echo $v_sub['name']. '_' . $k_sub;?>"><?php echo $v_sub['type'];?>[]</a>
                                   <?php
                                    } else {
                                        echo $v_sub['type'];
                                    }
                                    ?>                                                 
                                </td>
                                <td class="left"><?php echo $v_sub['example_val']; ?></td>
                                <td class="left"><?php echo $v_sub['desc']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
    }
  
  ?>