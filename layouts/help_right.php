<!--正文区 begin-->
<div class="col-main bg_line">
    <div class="main-wrap">
        <div class="title-wrap">
            <h1 class="incre-bg title"> 调用规范 <span style="float:right;">更新时间: 14-7-10 上午11:31</span></h1>
            <ul class="api-sub-title layout clearfix">
                <li class="sub-title"><a class="link" href="#sys-param">调用规范</a></li>
            </ul>
        </div>
        <div style="word-wrap: break-word;margin-top: 20px;">
           <pre>
一、调用介绍
作为数据出口，用户只需要按照21CAKEAPI的规范拼装一个正确的URL，通过HTTP请求到21CAKEAPI，即能获取到所需的数据。

二、调用环境入口
环境入口释义：调用API时，需要传入如下地址，获取相应环境下的数据。
测试环境入口地址：211.136.100.30:8081  //此为内网测试地址，上线后请改为正式地址

三、调用参数
调用API时，请求方式 POST; 必须传入系统级参数和对应的应用级参数。各个API的输入参数和返回结果详见API文档。
 ①系统级参数
 <table>
 <tr>
 <td>名称</td>
 <td>类型</td>
 <td>是否必须</td>
 <td>描述</td>
 </tr>
 <tr>
 <td>method</td>
 <td>String</td>
 <td>是</td>
 <td>API接口名称</td>
 </tr>
 <tr>
 <td>app_key</td>
 <td>String</td>
 <td>是</td>
 <td>应用的app_key</td>
 </tr>
 <tr>
 <td>sign</td>
 <td>String</td>
 <td>是</td>
 <td>签名</td>
 </tr>
 <tr>
 <td>timestamp</td>
 <td>String</td>
 <td>是</td>
 <td>时间戳，格式为yyyy-MM-ddHH:mm:ss，例如：2011-06-16 13:23:30。</td>
 </tr>
 <tr>
 <td>format</td>
 <td>String</td>
 <td>是</td>
 <td>可选值：json</td>
 </tr>
 <td>v</td>
 <td>String</td>
 <td>是</td>
 <td>API协议版本，可选值:1.0.</td>
 </tr>
 </table>


②应用级参数（更多API应用级参数参见接口帮助文档）
如下为21CAKEAPI应用级参数,参考各接口

四、API签名

调用API时需要对请求参数进行签名，21CAKEAPI服务器端会验证请求参数是否合法。
加密规则
① 所有请求参数按照字母先后顺序排列
例如：将app_key,method,fromat,timestamp,v 排序为app_key,fromat,method,timestamp,v
② 把所有参数名和参数值进行拼装
例如：app_keyxxxformatxxxmethodxxxxxxtimestampxxxxxxvx
③ 把appSecret夹在字符串的两端
例如：appSecret+XXXX+appSecret

④ 使用MD5进行加密，再转化成大写
示例（以下示例只体现逻辑）
调用21cake.order_detail.get，假设app_key=yourappkey、appSecret=yourappSecret、

1)输入参数
    app_key=yourappkey
    format=json
    method=21cake.order.detail.get
    timestamp=2014-07-10 11:10:00
    v=1.0
    tid=201499088090097

2) sign 生成
    a) 连接参数名与参数值，并在首尾加上appSecret
    yourappSecretapp_keyyourappkeymethodorder.gettid201499088090097timestamp2014-06-13 11:10:04v2.0yourappSecret
    以上字符串不允许有跨行，粘贴时请特别注意，除日期和时间中间的空格之外，不允许在其它位置出现空格。
    b) 连接参数名与参数值时，注意去除中间的空参数，比如，a_field='', 组合后，这个值是去除的
    c) MD5加密后转成大写：EDBE87FB9640EDD681FEBC79D858AAC0

五、拼装HTTP请求
调用API时，将所有的参数转换成UTF-8编码，然后进行拼装，通过浏览器访问该地址即可成功调取一次接口。

调用URL示例（仅为示例）：
http://api.21cake.com:8081/shop/server/index.php?app_key=180000001&format=JSON&v=1.0&timestamp=2014-07-14%2001:58:35&method=b2c.order.detail&tid=20140705084268&sign=EE0BA093814E3316AE8F374F05B876F1


六、API调用注意事项
	所有的API请求和响应数据编码皆为UTF-8格式，URL里的所有参数值请做urlencode编码
	json格式应为标准的json
	目前只支持返回结果是json格式
	所有API请求和响应内的日期格式都为yyyy-MM-dd HH:mm:ss，注意小时格式是24小时制，例如：2011-07-21 20:23:30
	API接口的错误信息在http response body内
	签名方式为 md5(appsecret + key+ value .... key + value+appsecret)然后转大写字母，其中key、value对是除签名所有请求参数按key做的升序排列，value无需编码。
           </pre>
    </div>
    </div>
</div>