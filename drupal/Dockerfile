FROM drupal:8.0.0
MAINTAINER Jason Porter <jporter@redhat.com>

LABEL version="dev"

RUN apt-get update && apt-get install git -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -LSs http://drupalconsole.com/installer | php && mv console.phar /usr/local/bin/drupal
RUN composer require drush/drush:dev-master --prefer-source

COPY run.sh /
COPY db-check.php /

CMD ["/bin/bash", "/run.sh"]
