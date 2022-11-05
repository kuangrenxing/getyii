PHP论坛
==================


## 项目搭建

### 原始安装方法（推荐）

```

composer install
php init
```

2、然后修改数据库配置文件的配置信息

```
vim common/config/db.php
```

再使用运行我写的安装程序（帮你生成数据库表和假数据）

```
php yii install 
```

或者直接执行数据库迁移工具生成数据库表

```
php yii migrate 
```



添加以下两个域名加到自己机器的 host 里面

	<your_docker_ip> <your_name>.dev.getyii.com 前台
	<your_docker_ip> <your_name>.dev.admin.getyii.com 后台

### 用户相关

1. 把 user 表中的某用户值 role 字段值改为20，即为前台管理员，目前可以给帖子加精华，不能登录后台。
1. 把 user 表中的某用户值 role 字段值改为30，即为超级管理员，可登录后台。



PS:

- 默认用户名是`admin`，密码是`123456`
