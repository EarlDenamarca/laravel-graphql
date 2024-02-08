pipeline {
    agent {
        docker {
            label 'Built-In Node'
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
