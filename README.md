<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://laravel.com/img/logomark.min.svg" width="40" alt="Laravel Logo"></a>
<a href="https://laravel.com" target="_blank"><img src="https://laravel.com/img/logotype.min.svg" width="150" alt="Laravel"></a> 
<a href="https://vuetifyjs.com/en/" target="_blank"><img src="https://cdn.vuetifyjs.com/docs/images/logos/vuetify-logo-dark-atom.svg" width="100" alt="Veutify Logo"></a>
<a href="https://www.npmjs.com/package/axios" target="_blank"><img src="https://camo.githubusercontent.com/2ac485b6967b7c38e2b416b2b1e3c2812a79e146eb37a74bced4305a55e282a4/68747470733a2f2f6178696f732d687474702e636f6d2f6173736574732f6c6f676f2e737667" width="150" alt="Axios Logo"></a>
</p>


<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📝 TodoList Application

Welcome to the TodoList Application repository! This project is a todolist application built with Laravel and Vuetify. The repository is organized into two main sections: `backend` and `frontend`. Additionally, there are three PHP files in the root directory for other tasks.

## 🌟 Features

- **Todo Management**: Create, update, and delete todos.
- **Vuetify Integration**: A beautiful and responsive UI.
- **Laravel Backend**: Robust and scalable backend.


## 📂 Project Structure

- `frontended-todolist/`: Contains the Vuetify-based frontend application.
- `todolist/`: Contains the Laravel application.
- `task01.php`, `task02.php`, `task04.php`: PHP files for additional tasks located in the root directory.


## 📸 Screenshot
  ![image](https://github.com/user-attachments/assets/de61ce6d-8af0-4d2c-aef8-147f418cfa0f)


## 🚀 Getting Started

### Prerequisites

- PHP 7.4 or higher
- Composer
- Node.js and npm
- Vuetify 
- Axios 


### Installation

#### Backend

1. Navigate to the `todolist` directory:
    ```sh
    cd todolist
    ```
2. Install the dependencies:
    ```sh
    composer install
    ```
3. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```sh
    cp .env.example .env
    ```
4. Generate the application key:
    ```sh
    php artisan key:generate
    ```
5. Run the migrations:
    ```sh
    php artisan migrate
    ```

#### Frontend

1. Navigate to the `frontended-todolist` directory:
    ```sh
    cd frontended-todolist
    ```
2. Install the dependencies:
    ```sh
    npm install
    ```
3. Start the development server:
    ```sh
    npm run serve
    ```

## 🎮 Usage

To start the application, run the following commands in their respective directories:

- Backend:
    ```sh
    php artisan serve
    ```
- Frontend:
    ```sh
    npm run serve
    ```
    
## 🤝 Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any improvements or bug fixes. For major changes, please open an issue first to discuss what you would like to change.

## 📜 License

This project is licensed under the MIT License. See the LICENSE file for details.

## 📧 Contact

If you have any questions or feedback, feel free to reach out!

---

Happy coding! 🎉
