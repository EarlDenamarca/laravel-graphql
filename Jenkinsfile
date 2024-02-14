pipeline {
    agent any
    stages {
        stage('Build MYSQL') {
            agent {
                docker {
                    image 'mysql'
                    args '--name test-graphql-mysql -e MYSQL_ALLOW_EMPTY_PASSWORD=yes -d mysql:latest'
                }
            }
            steps{
                sh 'mysql -u root -e "create database graphql";';
                echo 'MYSQL Server is up and running';
            }
        }
        stage('Build Backend') {
            agent {
                docker {
                    image 'php:8.1'
                }
            }
            steps {
                sh 'cp .env.test .env'
                sh 'apt-get update && apt-get install -y'
                sh 'apt-get install zlib1g-dev libzip-dev -y'
                sh 'docker-php-ext-install mysqli pdo pdo_mysql zip'
                sh 'curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer'
                sh 'composer -v'
                sh 'composer install'
                sh 'php artisan migrate'
            }
        }
    }
}
