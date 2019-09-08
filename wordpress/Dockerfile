FROM wordpress:5.2.3-apache

RUN rm /etc/apt/preferences.d/no-debian-php
RUN apt update && apt upgrade -y && \
    apt-get install libxml2-dev php-soap -y && \
    apt-get install -y  --no-install-recommends ssl-cert && \
	rm -r /var/lib/apt/lists/* && \
	a2enmod ssl && \
	a2ensite default-ssl
RUN docker-php-ext-install soap
