pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'cp .env.test .env'
                sh 'docker compose up --build'
                sh 'docker compose exec graphql-backend php artisan key:generate'
                sh 'docker compose exec graphql-backend php artisan migrate'
            }
        }
    }
    post { 
        always { 
            sh 'docker compose down'
        }
    }
}
