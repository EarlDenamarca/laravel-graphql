pipeline {
    agent {
        docker {
            image 'node:20.10.0-alpine'
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
