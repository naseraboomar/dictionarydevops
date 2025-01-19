pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git credentialsId: 'github-ssh-credentials-id', url: 'git@github.com:naseraboomar/dictionarydevops.git'
            }
        }

        stage('Build') {
            steps {
                script {
                    sh 'docker build -t dictionary-app .'
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    sh 'docker run -d dictionary-app'
                }
            }
        }
    }
}
