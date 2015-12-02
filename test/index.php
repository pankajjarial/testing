<VirtualHost *:80>
    ServerAdmin pankaj.jarial@netsolutionsindia.com
    DocumentRoot /var/www/html/slim
    ServerName slim.local
    ServerAlias slim.local
    #ErrorLog "logs/mysite.com-error.log"
    #CustomLog "logs/mysite.com-access.log" combined
    <Directory /var/www/html/slim>
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
