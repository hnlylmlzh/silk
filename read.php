
���±������޸�һ�� ���й�����

composer config repo.packagist composer https://packagist.phpcomposer.com

---------------------------------------------
linux �°�װ composer ,
cd /alidata/www/default/composer/

php -r "readfile('https://getcomposer.org/installer');" | php

��������
����ͨ�� ./composer.phar ��ִ�������ˣ�
Ҳ���� mv composer.phar /usr/local/bin/composer 
�����������κεط��� composer��
---------------------------
linux Ҫ��һ���û�
useradd composer 
passpwd
�޸�Ŀ¼
usermod -d /alidata/www/default/composer composer

����Ŀ¼
chown composer -R /alidata/www/default/composer

����Ŀ¼������
chown composer /alidata/www/default/composer
su composer -c "composer install"

�޸��û���ĳ����
usermod -g root tommy

ɾ���û���
groupdel peter

���û���ĳ��ɾ������composer��root��ɾ��
gpasswd -d composer root

�鿴ϵͳ�����û���
cat /etc/group 

su �л��û�
exit �˳�

��ĳ��Ŀ¼��Ȩ�޸�һ���û�
1.����������:
chown -R �û� Ŀ¼
2.����Ȩ��:
chmod -R 755 Ŀ¼
----------------------------
ʹ�û��� sudo 
    vi  /etc/sudoers.d/comp
                        i
                        comp ALL=(ALL)ALL
                        ESC:wq
                        chmod 400 /etc/sudoers.d/comp
                        su comp
                        sudo ls �Cal


--------------------


-------------------

 composer install --dry-run
cd   /view/log  
  ls   -lt  

tail -n 40 /var/log/messages

tail -n 40 /var/log/syslog
tail -n 40 /var/log/auth.log
 
composer /home/comp/silk 

Cannot create cache directory /home/comp/.composer/cache/repo/https---packagist.phpcomposer.com/, or directory is not writable. Proceeding without cache
Cannot create cache directory /home/comp/.composer/cache/files/, or directory is not writable. Proceeding without cache

