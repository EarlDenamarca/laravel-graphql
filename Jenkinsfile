pipeline {
    agent any
    stages {
        stage('Build Backend') {
            agent {
                docker {
                    image 'laravel-graphql-graphql-backend:latest'
                }
            }
            steps {
                sh 'composer install'
                sh 'php artisan migrate'
            }
        }
    }
}
