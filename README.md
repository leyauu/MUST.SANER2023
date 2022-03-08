# Docker 部署 Saner2018

### Thanks 感谢 🙏

Thanks to the following repositories:

[https://github.com/aparzi/saner2018](https://github.com/aparzi/saner2018)

[https://github.com/voocel/docker-lnmp](https://github.com/voocel/docker-lnmp)

### Directory 目录结构

```
saner2018
├── nginx
│   ├── Dockerfile
│   ├── nginx.conf
│   ├── log
│   │   └── error.log
│   └── website (网站主要文件)
├── php
│   ├── Dockerfile
│   ├── www.conf
│   ├── php-fpm.conf
│   ├── php.ini
│   └── log
│       └── php-fpm.log
```

### Run 创建镜像与安装

**运行**

```bash
git clone https://github.com/MUST-ISDA/saner2018.git
cd saner2018
docker-compose up -d
```

站点根目录为`website`

### 测试

使用 docker ps 查看容器启动状态,若全部正常启动了则通过访问

### 进入容器内部

1. 使用 docker exec

```bash
docker exec -it nginx /bin/sh
```

### PHP 扩展安装

1. 安装 PHP 官方源码包里的扩展(如：同时安装 pdo_mysql mysqli pcntl gd 四个个扩展)

_在 php 的 Dockerfile 中加入以下命令_

```bash
RUN apk add libpng-dev \
    && docker-php-ext-install pdo_mysql mysqli pcntl gd \
```

_注:因为该镜像缺少 gd 库所需的 libpng-dev 包，所以需要先下载这个包_

2. PECL 扩展安装

```bash
RUN pecl install memcached-2.2.0 \
    # 启用扩展
    && docker-php-ext-enable memcached \
```

### Composer 安装

在 Dockerfile 中加入

```bash
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer \
```

### 常用命令

-   `docker start` 容器名（容器 ID 也可以）
-   `docker stop` 容器名（容器 ID 也可以）
-   `docker run` 命令加 -d 参数，docker 会将容器放到后台运行
-   `docker ps` 正在运行的容器
-   `docker logs` --tail 10 -tf 容器名 查看容器的日志文件,加-t 是加上时间戳，f 是跟踪某个容器的最新日志而不必读整个日志
    文件
-   `docker top` 容器名 查看容器内部运行的进程
-   `docker exec -d` 容器名 touch /etc/new_config_file 通过后台命令创建一个空文件
-   `docker run --restart=always --name` 容器名 -d ubuntu /bin/sh -c "while true;do echo hello world; sleep 1; done" 无
    论退出代码是什么，docker 都会自动重启容器，可以设置 --restart=on-failure:5 自动重启的次数
-   `docker inspect` 容器名 对容器进行详细的检查，可以加 --format='{(.State.Running)}' 来获取指定的信息
-   `docker rm` 容器 ID 删除容器，注，运行中的容器无法删除
-   `docker rm $(docker ps -aq)` 删除所有容器
-   `docker rmi $(docker images -aq)` 删除所有镜像
-   `docker rmi $(docker images -f "dangling=true" -q)` 删除`<none>:<none>`空悬镜像
-   `docker images` 列出镜像
-   `docker pull` 镜像名:标签 拉镜像
-   `docker search` 查找 docker Hub 上公共的可用镜像
-   `docker build -t='AT/web_server:v1'` 命令后面可以直接加上 github 仓库的要目录下存在的 Dockerfile 文件。 命令是编写
    Dockerfile 之后使用的。-t 选项为新镜像设置了仓库和名称:标签
-   `docker login` 登陆到 Docker Hub，个人认证信息将会保存到$HOME/.dockercfg,
-   `docker commit -m="comment " --author="AT" ` 容器 ID 镜像的用户名/仓库名:标签 不推荐这种方法，推荐 dockerfile
-   `docker history` 镜像 ID 深入探求镜像是如何构建出来的
-   `docker port` 镜像 ID 端口 查看映射情况的容器的 ID 和容器的端口号，假设查询 80 端口对应的映射的端口
-   `run` 运行一个容器， -p 8080:80 将容器内的 80 端口映射到 docker 宿主机的某一特定端口，将容器的 80 端口绑定到宿主机的
    8080 端口，另 127.0.0.1:80:80 是将容器的 80 端口绑定到宿主机这个 IP 的 80 端口上，-P 是将容器内的 80 端口对本地的宿
    主机公开
-   http://docs.docker.com/reference/builder/ 查看更多的命令
-   `docker push` 镜像名 将镜像推送到 Docker Hub
-   `docker rmi` 镜像名 删除镜像
-   `docker attach` 容器 ID 进入容器
-   ############################################################
-   `docker network create --subnet=172.171.0.0/16 docker-at` 选取 172.172.0.0 网段
-   `docker build` 就可以加 -ip 指定容器 ip 172.171.0.10 了

**删除所有容器和镜像的命令**

```bash
docker rm `docker ps -a |awk '{print $1}' | grep [0-9a-z]` 删除停止的容器
docker rmi $(docker images | awk '/^<none>/ { print $3 }')
```

### Dockerfile 语法

-   `MAINTAINER` 标识镜像的作者和联系方式
-   `EXPOSE` 可以指定多个 EXPOSE 向外部公开多个端口，可以帮助多个容器链接
-   `FROM` 指令指定一个已经存在的镜像
-   `\#`号代表注释
-   `RUN` 运行命令,会在 shell 里使用命令包装器 /bin/sh -c 来执行。如果是在一个不支持 shell 的平台上运行或者不希望在
    shell 中运行，也可以 使用 exec 格式 的 RUN 指令
-   `ENV REFRESHED_AT` 环境变量 这个环境亦是用来表明镜像模板最后的更新时间
-   `VOLUME` 容器添加卷。一个卷是可以 存在于一个或多个容器内的特定的目录，对卷的修改是立刻生效的，对卷的修改不会对更新镜
    像产品影响，例:VOLUME["/opt/project","/data"]
-   `ADD` 将构建环境 下的文件 和目录复制到镜像 中。例 ADD nginx.conf /conf/nginx.conf 也可以是取 url 的地址文件，如果是
    压缩包，ADD 命令会自动解压、
-   `USER` 指定镜像用那个 USER 去运行
-   `COPY` 是复制本地文件，而不会去做文件提取（解压包不会自动解压） 例：COPY conf.d/ /etc/apache2/ 将本地 conf.d 目录中
    的文件复制到/etc/apache2/目录中

### docker-compose.yml 语法说明

-   `image` 指定为镜像名称或镜像 ID。如果镜像不存在，Compose 将尝试从互联网拉取这个镜像
-   `build` 指定 Dockerfile 所在文件夹的路径。Compose 将会利用他自动构建这个镜像，然后使用这个镜像
-   `command` 覆盖容器启动后默认执行的命令
-   `links` 链接到其他服务容器，使用服务名称(同时作为别名)或服务别名（SERVICE:ALIAS）都可以
-   `external_links` 链接到 docker-compose.yml 外部的容器，甚至并非是 Compose 管理的容器。参数格式和 links 类似
-   `ports` 暴露端口信息。宿主机器端口：容器端口（HOST:CONTAINER）格式或者仅仅指定容器的端口（宿主机器将会随机分配端口）
    都可以(注意：当使用 HOST:CONTAINER 格式来映射端口时，如果你使用的容器端口小于 60 你可能会得到错误得结果，因为 YAML
    将会解析 xx:yy 这种数字格式为 60 进制。所以建议采用字符串格式。)
-   `expose` 暴露端口，与 posts 不同的是 expose 只可以暴露端口而不能映射到主机，只供外部服务连接使用；仅可以指定内部端口
    为参数
-   `volumes` 设置卷挂载的路径。可以设置宿主机路径:容器路径（host:container）或加上访问模式（host:container:ro）ro 就是
    readonly 的意思，只读模式
-   `volunes_from` 挂载另一个服务或容器的所有数据卷
-   `environment` 设置环境变量。可以属于数组或字典两种格式。如果只给定变量的名称则会自动加载它在 Compose 主机上的值，可
    以用来防止泄露不必要的数据
-   `env_file` 从文件中获取环境变量，可以为单独的文件路径或列表。如果通过 docker-compose -f FILE 指定了模板文件，则
    env_file 中路径会基于模板文件路径。如果有变量名称与 environment 指令冲突，则以后者为准(环境变量文件中每一行都必须有
    注释，支持#开头的注释行)
-   `extends` 基于已有的服务进行服务扩展。例如我们已经有了一个 webapp 服务，模板文件为 common.yml。编写一个新的
    development.yml 文件，使用 common.yml 中的 webapp 服务进行扩展。后者会自动继承 common.yml 中的 webapp 服务及相关的环
    境变量
-   `net` 设置网络模式。使用和 docker client 的 --net 参数一样的值
-   `pid` 和宿主机系统共享进程命名空间，打开该选项的容器可以相互通过进程 id 来访问和操作
-   `dns` 配置 DNS 服务器。可以是一个值，也可以是一个列表
-   `cap_add，cap_drop` 添加或放弃容器的 Linux 能力（Capability）
-   `dns_search` 配置 DNS 搜索域。可以是一个值也可以是一个列表
-   注意：使用 compose 对 Docker 容器进行编排管理时，需要编写 docker-compose.yml 文件，初次编写时，容易遇到一些比较低级
    的问题，导致执行 docker-compose up 时先解析 yml 文件的错误。比较常见的是 yml 对缩进的严格要求。yml 文件还行后的缩进
    ，不允许使用 tab 键字符，只能使用空格，而空格的数量也有要求，一般两个空格。
