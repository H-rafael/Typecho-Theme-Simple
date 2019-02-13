# Typecho-Theme-Simple
Typecho Theme Simple - 由心而发，简单的


# 安装

下载压缩包解压上传至/usr/themes文件夹，注意要将文件夹重命名为Simple。
或者使用命令行安装

# 下载地址
git clone https://github.com/H-rafael/Typecho-Theme-Simple.git

# 使用
登陆Typecho后台，控制台 -> 外观 -> 可以使用的外观，选择Simple启用

# 后台设置

1.下载好文件改名为Simple：控制台->外观->开启，这样基本就显示出来了
2.站点头像设置：默认为博主后台邮箱设置的Gravatar头像，更换请写全头像地址名
3.默认文章缩略图：请填写图片的完整地址，换行为第二张随机图

4.首页背景图片：请填写图片的完整地址，换行为第二张随机背景图
5.统计代码：这个可以根据你是百度的还是360的统计代码，喜欢那个用那个咯
6.导航栏配置：默认都是一级导航，加二级导航代码，主要是sub开始是二级
{
    "text":"归档",
    "href":"http://qqexit.com/index.php/archives/23.html",
    "icon":"iconfont icon-aria-book",
    "sub" : [
        {
            "text":"图标展示",
            "href":"http://qqexit.com/index.php/icon.html",
            "icon":"el-icon-setting"
        },
    ]
}
7.打赏功能配置：主要是配置，前面是什么类型的支付，后面是支付二维码
    "Alipay":"http://bl.qqexit.com/usr/themes/Simple/assets/img/alipay.png",
    "Wechat":"http://bl.qqexit.com/usr/themes/Simple/assets/img/wechat.png"
# 友链代码
!!!
[link-box]
[link-item href="http://qqexit.com" title="Kiln" img="http://animtv.cn/anim_wo/html/user_img/img_3172.jpg" name="Kiln窑"]
[/link-box]
!!!
