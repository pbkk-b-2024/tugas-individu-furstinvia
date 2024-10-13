# 🚀 Welcome to My Final Project! 🚀

This project is part of my final assignment for PBKK B 2024.

**Created by:**  
**Furstin Aprilavia Putri**  
**NRP:** 5025221234  
**Class:** PBKK B

## 🛠️ Getting Started

Follow the steps below to clone and run this project on your local machine.

### 1. Clone the Repository

Make sure you're in the directory where you want to store the project, then run:

```bash
git clone -b tugas6 https://github.com/pbkk-b-2024/tugas-individu-furstinvia.git
```

### 2. Navigate to the Project Directory

```
cd tugas-individu-furstinvia
```

### 3. Install Dependencies
You'll need to install the required dependencies for both Laravel and the frontend (if applicable).

```
composer install
```
```
npm install
```

### 4. Set Up Environment Variables
Create a copy of the .env.example file as .env:

```
cp .env.example .env
```
Then, generate the application key:

```
php artisan key:generate
```
Make sure to configure your database connection in the .env file.

### 5. Run Database Migrations
```
php artisan migrate
```

### 6. Run the Development Server
```
php artisan serve
```
```
npm run dev
```
