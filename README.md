# Blog Website

This project is a blog website developed using Laravel, Alpine.js, Jetstream, Livewire, and Filament. It provides a modern, responsive, and dynamic platform for creating, managing, and sharing blog posts.

## Features

- **User Authentication:** Jetstream is used for user authentication, providing features like registration, login, and password reset.
- **Live Updates:** Livewire enables real-time updates for components without needing to write JavaScript.
- **Interactive UI:** Alpine.js enhances interactivity by providing data binding and declarative syntax.
- **Admin Dashboard:** Filament provides an intuitive admin dashboard for managing blog posts, categories, and users.
- **Responsive Design:** The website is designed to be responsive and accessible across various devices and screen sizes.

## Setup

1. **Clone the Repository:**
   ```
   git clone <repository-url>
   cd <project-folder>
   ```

2. **Install Dependencies:**
   ```
   composer install
   npm install && npm run dev
   ```

3. **Set Environment Variables:**
   - Rename `.env.example` to `.env` and configure your database connection, mail settings, and other environment variables.

4. **Generate Application Key:**
   ```
   php artisan key:generate
   ```

5. **Run Migrations:**
   ```
   php artisan migrate
   ```

6. **Seed Database (Optional):**
   If you want to populate the database with sample data:
   ```
   php artisan db:seed
   ```

7. **Start the Development Server:**
   ```
   php artisan serve
   ```

8. **Access the Website:**
   Open your web browser and navigate to `http://localhost:8000`.

## Usage

- **User Authentication:** Register or log in to access the full functionality of the website.
- **Create Blog Posts:** Authenticated users can create, edit, and delete their blog posts.
- **Manage Categories:** Administrators can create and manage blog categories through the Filament admin dashboard.
- **Admin Dashboard:** Access the admin dashboard by navigating to `/filament` and log in with admin credentials.

## Contributing

Contributions are welcome! Feel free to submit bug reports, feature requests, or pull requests.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/MyFeature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin feature/MyFeature`)
5. Create a new Pull Request

---
