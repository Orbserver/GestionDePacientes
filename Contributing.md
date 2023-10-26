## Technical Requirements

To contribute to the "SetPatientCare" project, ensure that you meet the following technical requirements in your development environment:

1. **Operating System**: The project has been primarily developed on Windows. It is recommended to use this environment for better compatibility.

2. **Web Server**: A web server supporting PHP is required. Apache or Nginx, configured for running Laravel applications, is recommended.

3. **PHP**: PHP 8.2 or higher is required. Make sure you have this version installed and enabled on your server.

4. **Database**: The project uses PostgreSQL as the database management system. Ensure you have a PostgreSQL instance configured and ready for use.

5. **Composer**: Composer is an essential tool for managing PHP dependencies. Make sure you have Composer installed on your system.

6. **Node.js and NPM**: For Vue.js development, you'll need Node.js and npm. Ensure you have these tools installed on your system.

7. **Git**: Having Git installed is recommended for version control and collaboration.

## Environment Setup

Once you've confirmed that you meet the technical requirements, follow these steps to set up your development environment:

1. **Clone the Repository**: Use Git to clone this repository to your local development environment.

   ```bash
   git clone https://github.com/YourUsername/SetPatientCare.git
   ```

2. **Configure Environment Variables**: Copy the `.env.example` file and rename it to `.env`. Then, configure the environment variables, such as the database connection and application URL.

3. **Install PHP Dependencies**: In the project's root, run Composer to install PHP dependencies.

   ```bash
   composer install
   ```

4. **Install Node.js Dependencies**: In the project's root, run npm to install Node.js dependencies.

   ```bash
   npm install
   ```

5. **Migrations and Seed Data**: Run migrations and seed data to set up the database.

   ```bash
   php artisan migrate --seed
   ```

## Contribution

Now that you've set up your development environment and are ready to contribute, follow these steps:

1. Create a branch from the `main` branch for your work:

   ```bash
   git checkout -b my-new-feature
   ```

2. Make your changes and develop your new feature or bug fix.

3. Commit your changes and ensure they follow the [commit style guidelines](https://www.conventionalcommits.org/).

4. Push your branch to your GitHub repository.

5. Open a pull request detailing your changes.

6. Project maintainers will review your pull request and, if necessary, provide feedback or suggestions before merging it.
