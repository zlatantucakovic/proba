node {
	def app

	stage('Clone repository') {

		checkout scm

	}

	stage('Build image') {

		app=docker.build("registar/myfirstimage")

	}

	stage('Test image') {

		app.inside {
			echo "Tests passed"
		}

	}

	stage('Push image') {

		docker.withRegistry('https://registry.hub.docker.com', 'zlatantucakovic') {
			app.push("${env.BUILD_NUMBER}")
			app.push("latest")		
		}
		echo "Trying to Push Docker Build to Dockerhub"

	}

}
