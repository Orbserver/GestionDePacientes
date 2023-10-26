# SetPatientCare Web Application

SetPatientCare is a web application developed using the Laravel framework for server-side logic and Vite for the frontend. It is designed to manage patient data for medical purposes, allowing healthcare professionals to efficiently collect, store, and retrieve patient information.

## Features

- **User-Friendly Interface**: The application provides a clean and intuitive interface for managing patient data, making it easy for healthcare professionals to use.

- **Patient Registration**: You can easily register new patients, including their personal information and medical history.

- **Patient Search**: Search and retrieve patient data quickly using various search criteria.

- **Data Export**: Export patient data as CSV files for further analysis and reporting.

- **Appointment Scheduling**: Schedule appointments for patients and manage their appointment history.

- **Prescription Management**: Manage and track patient prescriptions and medications.

- **Billing and Invoicing**: Generate bills and invoices for patient services and keep track of payments.

- **Secure and Scalable**: Built on Laravel, SetPatientCare offers robust security measures and can be easily scaled to meet growing data needs.

## Technologies Used

- **Laravel**: The backend of the application is developed using Laravel, a powerful PHP framework.

- **Vite**: Vite is used for the frontend to deliver a fast and efficient user experience.

- **Bootstrap**: Bootstrap is used for responsive design and user interface components.

- **Vue.js**: SetPatientCare can be enhanced with Vue.js for interactive and dynamic frontend features if desired.

## Installation

To install and run SetPatientCare locally, follow these steps:

1. Clone this repository to your local machine.
2. Run `composer install` to install PHP dependencies.
3. Run `npm install` to install JavaScript dependencies.
4. Copy the `.env.example` file to `.env` and configure your database settings.
5. Run `php artisan key:generate` to generate an application key.
6. Run `php artisan migrate` to create the necessary database tables.
7. Start the development server with `npm run dev`.
8. Access the application in your web browser at `http://localhost:8000`.

## Usage

- Register new patients by filling out the provided forms.
- Search for existing patients and review their records.
- Export patient data for reporting purposes.
- Schedule appointments and manage prescription, billing, and invoicing information.

## Contribution

We welcome contributions to enhance SetPatientCare. Feel free to open issues, submit pull requests, or provide feedback.

## License

This project is open-source and available under the [MIT License](LICENSE). You are free to use and modify the code for your needs.

Enjoy using SetPatientCare for efficient patient data management!
