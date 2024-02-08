pipeline {
    agent any
    stages {
        agent {
            docker { 
                image 'node:20.10.0-alpine' 
            }
        }
        stage('Test') {
            steps {
                sh 'node --version'
            }
        }
    }
}
