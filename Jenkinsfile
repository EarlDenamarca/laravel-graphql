pipeline {
    agent any
    stages {
        stage('Run docker images') {
            steps {
                sh 'docker start graphql-mysql'
                sh 'docker start graphql-backend'
                sh 'docker exec graphql-backend php artisan key:generate'
            }
        }
        stage('Run Tests') {
            steps {
                sh 'docker exec graphql-backend php artisan test'
            }
        }
    }
    posts() {
        always {
            sh 'docker stop graphql-mysql'
            sh 'docker stop graphql-backend'
        }
    }
}
