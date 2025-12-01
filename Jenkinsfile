pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                git 'https://github.com/putrianggrainisafitri92/KSI2025.git'
            }
        }

        stage('Download PHPUnit') {
            steps {
                powershell """
                Invoke-WebRequest -Uri https://phar.phpunit.de/phpunit-9.phar -OutFile phpunit.phar
                """
            }
        }

        stage('Run Unit Test') {
            steps {
                powershell 'php phpunit.phar --version'
                powershell 'php phpunit.phar tests'
            }
        }

    }
}
