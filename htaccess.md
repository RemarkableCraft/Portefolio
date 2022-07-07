RewriteEngine On

##  Redirection du index.php  ##
FallbackResource public/index.php

##  Réécriture d'URL  ##
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ public/index.php?path=$1 [NC,L]
