pipeline {
    agent any
    stages {
        stage('Build Backend') {
            agent {
                docker {
                    image 'php:8.1'
                }
            }
            steps {
                sh 'apt-get update && apt-get install -y'
                sh 'apt-get install zlib1g-dev libzip-dev -y'
                sh 'docker-php-ext-install mysqli pdo pdo_mysql zip'
                sh 'curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer'
                sh 'composer -v'
                sh 'composer install'
            }
        }
    }
}
