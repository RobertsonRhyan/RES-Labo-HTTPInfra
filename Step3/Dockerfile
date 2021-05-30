# Pull php image
FROM php:5.6-apache

# Copy 000-defalut.conf and 001-reverse-proxy.conf to apache server
COPY conf/ /etc/apache2	

# A script that enables proxy modules
RUN a2enmod proxy proxy_http 

# A script that enables the specified site (which contains a <VirtualHost> block) within
# the apache2  configuration
RUN a2ensite 000-* 001-*