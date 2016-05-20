<?php
//include "TopSdk.php";
require_once(dirname(__FILE__) . DS .'TopSdk.php');
require_once(dirname(__FILE__) . DS . 'top/TopClient.php');
require_once(dirname(__FILE__) . DS . 'top/ResultSet.php');
require_once(dirname(__FILE__) . DS . 'top/HttpdnsGetRequest.php');
require_once(dirname(__FILE__) . DS . 'top/RequestCheckUtil.php');
require_once(dirname(__FILE__) . DS . 'top/TopLogger.php');
require_once(dirname(__FILE__) . DS . 'top/request/AlibabaAliqinFcSmsNumSendRequest.php');
require_once(dirname(__FILE__) . DS . 'top/ClusterTopClient.php');

date_default_timezone_set('Asia/Shanghai');

$httpdns = new HttpdnsGetRequest;
//$client = new ClusterTopClient("4272", "0ebbcccfee18d7ad1aebc5b135ffa906");

$client->gatewayUrl = "http://api.daily.taobao.net/router/rest";

function send_sms($mobile, $content,$log_type)
{

    $c = new TopClient;
    $c->appkey = urlencode(C('shopwwi_sms_key'));;
    $c->secretKey = 'd0f1ef669b6c54c0cdc61ed3570dfbd0';

    $req = new AlibabaAliqinFcSmsNumSendRequest;
    $req->setSmsType("normal");
    if($log_type==1){
        $req->setSmsFreeSignName(注册验证);
        $req->setSmsTemplateCode("SMS_8916611");
    }elseif($log_type==2){
        $req->setSmsFreeSignName(登录验证);
        $req->setSmsTemplateCode("SMS_8916613");

    }else{
        $req->setSmsFreeSignName(变更验证);
        $req->setSmsTemplateCode("SMS_8916609");
    }

    $req->setSmsParam("{\"code\":$content,\"product\":\"淘福家\"}");
    $req->setRecNum($mobile);

    $resp = $c->execute($req);
    if ($resp->err_code == 0) {
        $data['success'] = 'true';
        return ture;
    } else {
        $data['success'] = 'false';
        $data['msg'] = $resp->msg;
        return false;
    }

}

?>