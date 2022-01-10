FROM webdevops/php-apache-dev:7.4
MAINTAINER Zabara Alexander "zabara.industry@gmail.com"
WORKDIR /tmp/
RUN wget -O phpunit https://phar.phpunit.de/phpunit-7.4.1.phar

RUN chmod +x phpunit
RUN mv phpunit /usr/local/bin/
RUN phpunit --version

COPY ./run_script  /tmp/
RUN chmod +x run_script
CMD /tmp/run_script
WORKDIR /var/www/html