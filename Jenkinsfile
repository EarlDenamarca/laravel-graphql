pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'docker compose up'
                sh 'docker compose exec graphql-backend php artisan key:generate'
                sh 'docker compose exec graphql-backend php artisan migrate'
            }
        }
    }
}
