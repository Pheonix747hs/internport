
# Internship website

Brief description of the project.

## Prerequisites

- PHP
- Composer
- Node.js
- NPM[or]Yarn
- MySQL

## Getting Started

1. Clone the repository
   ```
   git clone <repository-url>
   ```

2. Install PHP dependencies
   ```
   composer install
   ```

3. Install NPM dependencies
   ```
   npm install
   ```

4. Set up the `.env` file
   ```
   cp .env.example .env
   php artisan key:generate
   ```
   [in the newly created .env file update the mysql ip address and credentials]

5. Create a database and update the `.env` file with database credentials

6. Migrate and seed the database
   ```
   php artisan migrate --seed
   ```

7. Start the development server
   ```
   php artisan serve
   ```
   [make sure you have your sql server up and running to access blog page]

8. Visit `http://localhost:8000` in your web browser

9. once you have created your main account delete the if-statement which links to the register page in the 
   blog.blade.php file to prevent guests from creating accounts 

## Deployment

Add instructions for deployment here if applicable.

## Built With

- Laravel
- Other relevant dependencies and technologies

## Contributing

Add contribution guidelines if multiple developers will be working on the project.

## License

This project is licensed under the [License Name] - see the [LICENSE.md](LICENSE.md) file for details.

## Acknowledgments

- Any acknowledgments or credits
```

You can customize this as per your project's needs.