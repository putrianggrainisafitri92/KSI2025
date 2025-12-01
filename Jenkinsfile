pipeline {
    agent any

    environment {
        PHPUNIT = 'phpunit.phar'   // nama file phpunit yang akan di-download
    }

    stages {

        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/putrianggrainisafitri92/KSI2025.git'
            }
        }

        stage('Download PHPUnit') {
            steps {
                powershell """
                if (-Not (Test-Path .\\${env.PHPUNIT})) {
                    Write-Host "Downloading PHPUnit..."
                    Invoke-WebRequest -Uri https://phar.phpunit.de/phpunit-9.phar -OutFile ${env.PHPUNIT}
                } else {
                    Write-Host "PHPUnit already exists."
                }
                """
            }
        }

        stage('Run Unit Tests') {
            steps {
                powershell """
                # Tampilkan versi PHPUnit
                php ${env.PHPUNIT} --version

                # Jalankan semua test di folder tests dengan format TestDox
                php ${env.PHPUNIT} --testdox tests
                """
            }
        }

    }

    post {
        always {
            echo 'Pipeline selesai.'
        }
        success {
            echo 'Semua test berhasil!'
        }
        failure {
            echo 'Ada test yang gagal!'
        }
    }
}
