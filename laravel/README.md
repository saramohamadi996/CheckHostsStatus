Host Status Checker
This application checks the online/offline status of hosts based on their ping percentage. If a host's ping percentage
is above 90, it is considered online; otherwise, it's offline.

Getting Started
To run this application, make sure you have Docker installed on your machine. Then, follow these steps:

Clone the Repository:
bash
Copy code
git clone github.com/saramohamadi996/CheckHostsStatus.git
Navigate to the Project Directory:
bash
Copy code
cd <project-directory>
Build and Start Docker Containers:
bash
Copy code
docker-compose up --build -d
This command will set up the development environment using Docker containers.
Install Dependencies:
bash
Copy code
docker-compose exec app composer install
This will install the required PHP dependencies using Composer.
Setup Laravel Octane
If you want to optimize Laravel for better performance, you can set up Laravel Octane. Follow the official documentation
for detailed instructions.
Add Redis for Caching
Since the data list might be heavy, Redis is added for caching purposes. Make sure to have Redis installed and
configured. You can install Redis using Docker or directly on your machine.
Run Migrations:
bash
Copy code
docker-compose exec app php artisan migrate
This will set up the database schema.
Start the Scheduler:
The scheduler is responsible for running the host status check every five minutes.
bash
Copy code
docker-compose exec app php artisan schedule:work
Access the Application:
Once the containers are up and running, you can access the application in your browser
at http://localhost:8082/hosts/status.
Implementation Details
Docker Setup
The application is containerized using Docker to ensure consistency across different environments. Docker Compose is
used to manage the containers.

Laravel Octane
Laravel Octane is utilized for optimizing the performance of the Laravel application. It helps in handling a large
number of concurrent requests efficiently.

Redis Cache
Redis is integrated into the application for caching data. This helps in improving the response time, especially for
heavy data operations like fetching host statuses.

Host Status Check
The CheckHostsStatus command is scheduled to run every five minutes using Laravel's Scheduler. This command fetches the
list of hosts, checks their status, and updates the database accordingly.

Host Status Display
The HostStatusController retrieves the host statuses from the cache and displays them in real-time on the UI. The
statuses are updated periodically based on the cache expiry time.

