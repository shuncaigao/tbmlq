<?php
return [
    //帮助
    'help' => "- [转圈] 机器人使用简单帮助 [转圈] -
[勾引]发送商品给我查询奖励
[太阳]常用一般指令：
签到-说明:每天签到领取奖励
资料-说明:查询您的详细资料
余额-说明:查询您的账户余额
提现-说明:申请提现如:提现10
[月亮]常用修改指令:
修改姓名发送：姓名 XX 
修改微信发送：微信 XX 
修改支付宝发送：支付宝 XX
[疑问]常用查询指令：
发送订单：查询最近省钱订单
发送徒弟：查询当前徒弟数量
发送明细：查询收入支出明细
[拥抱]常用搜索指令
发送：搜/买/找XX搜索优惠
例如：搜女装|买男装|找音箱",


    //关注公众号的提示
    'gzgzh' => "「你购物 我奖励」我是您的省钱小管家，么么哒~!\r\n
[勾引]请发送商品链接发送到公众号，我们会第一时间为您找到优惠信息~\r\n
[拥抱]使用教程：<a href='http://www.baidu.com'>点击查看>></a>\r\n
[鼓掌]商品搜索可发送：搜/买/找+关键词(例如：买衣服)\r\n
[红包]新用户完成首次购物后可领取一份惊喜哦~\r\n
[疑问]更多命令请发送“帮助”查看！",

    //用户未知内容的回复
    'otherMessage' => "[微笑]您好，我是可以为您购物省钱的小管家
- - - - - - - - - -
[握手]发送商品链接，可为您查询优惠和奖励
- - - - - - - - - -
[鼓掌]商品搜索可发送：搜/买/找+关键词(例如：买衣服)
- - - - - - - - - -
<a href='http://www.mengqy.cn'>▶点击查看使用教程>></a>
- - - - - - - - - -
[疑问]更多命令请发送“帮助”查看",


    //支付宝修改失败
    'zfbnook' => "[难过]支付宝修改失败，支付宝账号格式只能为邮箱或者手机号！",

    //支付宝修改成功
    'zfbok' => "[握手]支付宝修改成功：",
    //微信修改成功
    'wxok' => "[握手]微信号修改成功：",
    //姓名修改成功
    'xmok' => "[握手]姓名修改成功：",

    //提现金额不合法
    'txbhf' => "[微笑]提现金额不合法",
    //提现金额不足X元
    'txzdje' => "[微笑]最低提现金额为:",
    //提现金额必须为10的倍数
    'txdbs' => "[微笑]提现金额必须是10的倍数,例如:提现10 提现20 提现30 等~",
];