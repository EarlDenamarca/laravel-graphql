pipeline {
    agent any
    stages {
        stage('Run docker images') {
            steps {
                sh 'docker start graphql-mysql'
                sh 'docker start graphql-backend'
            }
        }
        stage('Run Tests') {
            sh 'docker exec graphql-backend php artisan test'
        }
    }
}
