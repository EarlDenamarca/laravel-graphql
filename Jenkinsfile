pipeline {
    agent any
    stages {
        stage('Build') {
            agent {
                docker {
                    image 'php:8.1'
                }
            }
            steps {
                sh 'apt-get update && apt-get install -y'
                sh 'apt-get install zlib1g-dev libzip-dev -y'
                sh 'docker-php-ext-install mysqli pdo pdo_mysql zip'
                sh 'php -r copy("https://getcomposer.org/installer", "composer-setup.php");'
                sh 'php composer-setup.php'
                sh 'php -r "unlink(composer-setup.php);"'
                sh 'mv composer.phar /usr/local/bin/composer'
            }
        }
    }
}
