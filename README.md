# sd-blog
sd-blog 是基于 Laravel 和 Bulma 开发的个人博客应用。

博客地址：http://www.sevdot.com
## 开发日志
在业余时间开发了这个博客应用，开发过程中做了记录，以下是开发日志：
1. [从零开发个人博客-第 0 天](http://www.sevdot.com/blog/9/blog-development-from-zero)
2. [从零开发个人博客-第 1 天](http://www.sevdot.com/blog/5/blog-development-from-zero-one-day)
3. [从零开发个人博客-第 2 天](http://www.sevdot.com/blog/8/blog-development-from-zero-two-day)
3. [从零开发个人博客-第 3 天](http://www.sevdot.com/blog/7/blog-development-from-zero-three-day)
4. [从零开发个人博客-第 4 天](http://www.sevdot.com/blog/4/blog-development-from-zero-four-day)
5. [从零开发个人博客-第 5 天](http://www.sevdot.com/blog/3/blog-development-from-zero-five-day)
6. [从零开发个人博客-第 6 天](http://www.sevdot.com/blog/6/blog-development-from-zero-six-day)
7. [从零开发个人博客-第 7 天](http://www.sevdot.com/blog/64/develop-a-personal-blog-from-scratch-day-7)

## 安装
克隆源代码：
```bash
sudo git clone https://github.com/sevdot/sd-blog.git
```
进入项目目录：
```bash
cd sd-blog
```
安装扩展包依赖：
```bash
cd sd-blog

```
生成配置文件：
```bash
sudo cp .env.example .env
```

修改 `.env` 文件里的数据库连接：
```bash
DB_HOST=localhost
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
```
修改 `.env` 文件里的百度翻译：
```bash
BAIDU_TRANSLATE_APPID=
BAIDU_TRANSLATE_KEY=
```
赋予 storage 相应权限
```bash
chmod -Rf 0755 storage/
```
生成密钥：
```bash

php artisan key:generate
```
创建 storage 软连接：
```bash

sudo php artisan storage:link
```

生成数据表：
```bash
php artisan migrate 
```
生成测试数据：
```bash
php artisan db:seed
```
导入后台数据：
```bash
php artisan db:seed --class=AdminTablesSeeder
```
创建一个管理员用户:
```bash
php artisan admin:create-user
```
