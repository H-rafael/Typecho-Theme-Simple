# Typecho-Theme-Simple
Typecho Theme Simple - 由心而发，简单的

## 使用方法  
[Simple](http://bl.qqexit.com/index.php/archives/3/)


## 安装

下载压缩包解压上传至/usr/themes文件夹，注意要将文件夹重命名为Simple。
或者使用命令行安装

登陆Typecho后台，控制台 -> 外观 -> 可以使用的外观，选择Simple启用

## 功能与特点
* 调整优化响应式布局，移动端舒适体验
* 傻瓜式后台设置，告别使用疑惑
* 评论头像换用cn.gravatar.org的源
* 支持自定义Favicon图标，自定义头部跟随或固定，自定义标题或LOGO，自定义导航栏显示内容
* 支持自定义文章缩略图或者获取文章内任意图片作为缩略图
* 支持面包屑导航、文章目录、文章二维码打赏
* 支持“轻语”功能（类似说说）
* 自带链接功能，链接模板内显示
* 支持自定义备案号、自定义网站统计代码
* 自动百度显示是否收录
* 高考倒计时日期
* 自定义JS、底部链接组件

## 更新  

更新版本时，下载新版主题包并解压，直接把解压后的文件覆盖上传即可（对主题有修改请自行备份），无需切换至其他主题（这样就不会丢失设置）。

如发现BUG等问题，也请随时[站内反馈](http://qqexit.com/index.php/archives/23.html)


## 后台设置

* 下载好文件改名为Simple：**控制台->外观->开启**，这样基本就显示出来了
* 站点头像设置：默认为博主后台邮箱设置的Gravatar头像，更换请写全头像地址名
```$xslt
http://www.gravatar.com/avatar/0b8e4bd30bcdb7da74167bb5f5027c0a?s=220&r=X&d=mm
```
* 默认文章缩略图：请填写图片的完整地址，换行为第二张随机图
```$xslt
//ww1.sinaimg.cn/large/ac1a0c4agy1ftz78cfrj2j21hc0u0kio.jpg
//ww1.sinaimg.cn/large/ac1a0c4agy1ftz7qj6l3xj21hc0u0b29.jpg
```
* 首页背景图片：请填写图片的完整地址，换行为第二张随机背景图
* 统计代码：这个可以根据你是百度的还是360的统计代码，喜欢那个用那个咯
* .导航栏配置：默认都是一级导航，加二级导航代码，主要是sub开始是二级
```$xslt


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

```
* 高考倒计时：不写时间默认不出现，填写格式比如：2019-06-07
```$xslt
 格式  2019-06-07

```

* 打赏功能配置：主要是配置，前面是什么类型的支付，后面是支付二维码
```$xslt
 "Alipay":"http://bl.qqexit.com/usr/themes/Simple/assets/img/alipay.png",
 "Wechat":"http://bl.qqexit.com/usr/themes/Simple/assets/img/wechat.png"
```
   
## 友链代码
说明：[link-box]是代表着开始和结束，link-item 这个才是链接，各位同学们复制的时候不要复制错了
```$xslt
!!!
[link-box]

[link-item href="http://qqexit.com" title="Kiln" img="http://animtv.cn/anim_wo/html/user_img/img_3172.jpg" name="Kiln窑"]

[/link-box]
!!!

```



