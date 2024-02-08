pipeline {
    agent {
        docker {
            label 'docker'
            image 'python:3.7'
        }
    }
    stages {
        stage('Build') {
            
            steps {
                sh 'node --version'
            }
        }
    }
}
