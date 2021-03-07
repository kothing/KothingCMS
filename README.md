# KothingCMS

## 开源的 PHP 建站 CMS 系统，

官网：[koting.com](http://kothing.com)

---

KothingCMS 是一款免费开源的 PHP 建站 CMS 系统，在同意条款下可以免授权商业使用该系统。

> 1. KothingCMS 的开发语言是 PHP，支持 PHP5.6+，发布之日起就已经兼容到 PHP7.3 版本，推荐使用 PHP7.0 版本以上。
> 2. 安装环境建议 Linux 服务器，当然 Windows 也是可以安装的，云服务器建议安装宝塔面板【[查看](http://www.bt.cn/)】
> 3. 无论是 Windows 还是 Linux 建议安装 Apache、mysql、phpMyAdmin 配件
> 4. 本系统当前仅支持 mysql 数据库

---

## 安装须知

- PHP5.6+
- 数据库目前仅支持 MySQL，版本 5.0+，数据编码 utf-8 或者 utf8-general-ci
- 部署环境需支持伪静态

## 开始安装

1. 下载源码并解压源码到空间根目录(www)
2. 浏览器访问 http://localhost/install/ (本地环境) http://绑定域名/install/ (空间服务器环境)
3. 进入安装步骤，逐步进行安装
4. 初次安装请安装备份或者测试数据
5. 安装完毕后，为了安全，请删除根目录 intall 安装文件夹

## 网站搬家

1. 进入后台--【系统扩展】--【数据库列表】，点击 <kbd>备份数据库</kbd> 将当前数据库备份
2. 将 cache 文件夹下面的缓存文件全部删除，并在根目录放置官方源码里的 install 文件夹
3. 将整个根目录打包下载到本地
4. 将打包后的压缩包上传到新空间
5. 按照【开始安装】的步骤进行安装程序
6. 安装第二步填入数据库账号密码后，选择你最新备份的数据库，点击进行安装
7. 安装完毕，为了安全，请删除根目录 intall 安装文件夹

## 伪静态

```
<IfModule mod_rewrite.c>
 RewriteEngine on
 RewriteBase /
 #RewriteCond %{REQUEST_URI} !((.*).jpg|.jpeg|.bmp|.gif|.png|.js|.css|.tts|.woff )$
 RewriteCond %{REQUEST_FILENAME} !-d
 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteCond %{DOCUMENT_ROOT}%{REQUEST_URI} !-d
 RewriteCond %{DOCUMENT_ROOT}%{REQUEST_URI} !-f
 #RewriteRule ^(.*)$ index.php?/$1 [QSA,PT,L]
 RewriteRule ^(.*)$ index.php [E=PATH_INFO:$1,QSA,PT,L]
</IfModule>
```

```
location / {
if (!-e $request_filename){
        rewrite  ^(.*)$ /index.php?s=$1 last; break;
}
}
```
