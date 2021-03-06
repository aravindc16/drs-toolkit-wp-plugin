<!-- language: php
php:
- 5.6

before_install:
- wget http://getcomposer.org/composer.phar
- composer install --dev
- composer require satooshi/php-coveralls:dev-master
- "export DISPLAY=:99.0"
- "sh -e /etc/init.d/xvfb start"
- "wget http://selenium.googlecode.com/files/selenium-server-standalone-2.31.0.jar"
- sleep 5

script:
- "java -jar selenium-server-standalone-2.31.0.jar -port 4441  > /dev/null &"
- "wget http://localhost:4441/wd/hub/status"
- ./vendor/bin/phpunit --verbose --coverage-clover ./tests/logs/clover.xml

after_script:
- php vendor/bin/coveralls -v -->
