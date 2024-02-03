pipeline {
    agent any
    stages {
        
        stage("build") {
            steps {
                sh 'composer install'
            }
        }
            
        stage("testing") {
            steps {
                sh 'php artisan test'
            }
        }
            
    }
}
