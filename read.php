
用下边命令修改一下 到中国镜像

composer config repo.packagist composer https://packagist.phpcomposer.com

---------------------------------------------
linux 下安装 composer ,
cd /alidata/www/default/composer/

php -r "readfile('https://getcomposer.org/installer');" | php

可以用了
可以通过 ./composer.phar 来执行命令了，
也可以 mv composer.phar /usr/local/bin/composer 
这样可以在任何地方用 composer了
---------------------------
linux 要加一个用户
useradd composer 
passpwd
修改目录
usermod -d /alidata/www/default/composer composer

锁定目录
chown composer -R /alidata/www/default/composer

更改目录所有者
chown composer /alidata/www/default/composer
su composer -c "composer install"

修改用户到某个组
usermod -g root tommy

删除用户组
groupdel peter

把用户从某组删除，把composer从root组删除
gpasswd -d composer root

查看系统所有用户组
cat /etc/group 

su 切换用户
exit 退出

把某个目录赋权限给一个用户
1.更改所有者:
chown -R 用户 目录
2.更改权限:
chmod -R 755 目录
----------------------------
使用户有 sudo 
    vi  /etc/sudoers.d/comp
                        i
                        comp ALL=(ALL)ALL
                        ESC:wq
                        chmod 400 /etc/sudoers.d/comp
                        su comp
                        sudo ls –al


--------------------


-------------------

 composer install --dry-run
cd   /view/log  
  ls   -lt  

tail -n 40 /var/log/messages

tail -n 40 /var/log/syslog
tail -n 40 /var/log/auth.log

tail -n 40 /var/log/messages 
 
composer /home/comp/silk 

Cannot create cache directory /home/comp/.composer/cache/repo/https---packagist.phpcomposer.com/, or directory is not writable. Proceeding without cache
Cannot create cache directory /home/comp/.composer/cache/files/, or directory is not writable. Proceeding without cache


Jan 12 09:31:32 iZ25isatkrvZ kernel: [2249136.146279] [28392]  1005 28392    50762    13866   0       0             0 php
Jan 12 09:31:32 iZ25isatkrvZ kernel: [2249136.146281] Out of memory: Kill process 28392 (php) score 111 or sacrifice child
Jan 12 09:31:32 iZ25isatkrvZ kernel: [2249136.148078] Killed process 28392 (php) total-vm:203048kB, anon-rss:55464kB, file-rss:0kB

test222;