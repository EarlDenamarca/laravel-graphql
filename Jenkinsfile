pipeline {
    agent {
        docker { image 'node:20.10.0-alpine' }
    }
    stages {
        stage('Test') {
            steps {
                sh 'node --version'
            }
        }
    }
}
