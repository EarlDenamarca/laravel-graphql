pipeline {
    agent {
      	docker {
        	image 'ubuntu:latest'
        }
    }
    stages {
        stage('Build') {
            steps {
                sh 'apt-get update && apt-get install -y'
                // sh 'cp .env.test .env'
                // sh 'docker compose up --build'
                // sh 'docker compose exec graphql-backend php artisan key:generate'
                // sh 'docker compose exec graphql-backend php artisan migrate'
            }
        }
    }
}
