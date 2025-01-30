# Public API Task

## Project Description
**Public API for Basic Information Retrieval**

This project is a simple public API built with **PHP** that returns basic information in JSON format. The API is designed to handle **GET** requests and provides the following details:

- **Email Address**: The registered email address used to register on the HNG12 Slack workspace.
- **Current Datetime**: The current datetime in ISO 8601 format (UTC).
- **GitHub URL**: The URL of the project's codebase on GitHub.

## Features
- **Cross-Origin Resource Sharing (CORS)**: The API includes headers to handle CORS, allowing it to be accessed from different origins.
- **Dynamic Datetime**: The `current_datetime` field is dynamically generated to always provide the current date and time in ISO 8601 format.
- **JSON Response**: All responses are formatted in JSON, making it easy to integrate with various applications and services.

## Technology Stack
- **Programming Language**: PHP
- **Deployment**: The API is deployed on Render

## Usage
This API is intended for educational purposes and as a demonstration of how to build and deploy a simple **PHP** application. It can be used as a starting point for more complex projects or as a reference for learning how to create RESTful APIs with PHP.

## How to Access
The API is deployed and publicly accessible at: https://hng12-stage0-task-yl0h.onrender.com

### Example Response
```json
{
  "email": "your-email@example.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/yourusername/hng-internship/tree/main/stage-0"
}
```

## Project Structure
- **index.php**: The main entry point of the application, containing the API logic.
- **.htaccess (if required)**: Used for configuring URL rewriting (optional).

## Getting Started
To get started with this project, follow the setup instructions provided below to run the API locally or deploy it to your preferred platform.

### Setup Instructions

#### Prerequisites
- A web server with PHP support (e.g., Apache, Nginx, or PHP's built-in server)
- PHP installed on your machine

#### Installation
1. **Clone the repository:**
   ```bash
   git clone https://github.com/Matthewadeniyi/Hng12-stage0.git
   cd Hng12-stage0
   ```
2. **Run the PHP development server:**
   ```bash
   php -S localhost:8000
   ```
3. **Access the API in your browser or via cURL/Postman:**
   ```bash
   curl http://localhost:8000/
   ```

## Deployment
The API is deployed at: https://hng12-stage0-task-yl0h.onrender.com

### Deploying to Render
To deploy the API on **Render**, follow these steps:

1. Go to [Render](https://render.com/).
2. Sign in and create a **new web service**.
3. Connect your GitHub repository.
4. Select your repository (**hng-internship**).
5. Choose **PHP** as the runtime environment.
6. Set the start command as:
   ```bash
   php -S 0.0.0.0:10000
   ```
7. Click **Deploy** and wait for the process to complete.

## API Documentation

### Endpoint URL
**GET /**

### Request Format
This API does not require any request body or parameters. Simply send a **GET** request to the endpoint.

### Response Format
The API responds with a JSON object containing the following fields:

- **email**: The registered email address used to register on the HNG12 Slack workspace.
- **current_datetime**: The current datetime in ISO 8601 format (UTC).
- **github_url**: The URL of the project's codebase on GitHub.

### Example Response
```json
{
  "email": "matthewadeniyi55@gmail",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/Matthewadeniyi/Hng12-stage0.git"
}
```

### Usage Example
You can test the API using a web browser, **curl**, or a tool like **Postman**.

#### Using curl
```bash
curl [https://hng12-stage0-task-yl0h.onrender.com]
```

#### Using Postman
1. Open **Postman**.
2. Create a new **GET** request.
3. Enter the URL: **[Your Render Deployment URL]**.
4. Send the request.
5. You should see a response similar to the example above.

## Error Handling
The API is designed to handle errors gracefully and will return appropriate HTTP status codes in case of errors. Here are some possible error responses:

- **500 Internal Server Error**: If there is an issue with the server, the API will respond with a 500 status code.

## Backlinks
- [Hire PHP Developers](https://hng.tech/hire/php-developers)

