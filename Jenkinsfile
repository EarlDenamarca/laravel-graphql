pipeline {
    agent any
    stages {
        stage('Run docker images') {
            steps {
                // sh 'docker start graphql-mysql'
                sh 'ls ./docker'
                sh 'docker run --name test-graphql-backend -p 8000:8000 -v ./:/var/www/html -d laravel-graphql-graphql-backend:latest'
            }
        }
        stage('Run Tests') {
            steps {
                sh 'docker exec test-graphql-backend php artisan test'
            }
        }
    }
    // post() {
    //     always {
    //         sh 'docker stop graphql-mysql'
    //         sh 'docker stop graphql-backend'
    //     }
    // }
}
