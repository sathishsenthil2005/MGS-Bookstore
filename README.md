# 📚 Online Book Store (Laravel Project)

A simple Online Book Store web application built using Laravel.  
This project allows users to view books and admin to manage books with CRUD operations.

---

## 🚀 Features

### 👤 User Side
- Home Page (Public access)
- View Book Listing
- View Book Details
- API Books section (Google Books API)

### 🔐 Admin Side
- Admin Dashboard (Login required)
- Add new books
- Edit existing books
- Delete books
- Manage book availability and price

### ⚙️ Backend Features
- Laravel MVC Architecture
- Role-based access control (Admin/User)
- MySQL Database integration
- REST API integration (Google Books API)

---

## 🛠️ Tech Stack

- Laravel 12
- PHP 8.2
- MySQL
- Bootstrap 5
- Blade Templates

---

## 🗄️ Database Tables

### Users Table
- id
- name
- email
- password
- role (admin/user)

### Books Table
- id
- title
- author
- description
- price
- available
- created_at
- updated_at

---

## 🔐 Admin Access

- Admin login required for dashboard
- Only admin can perform CRUD operations
- Users can only view books

---

## 📦 Installation Guide

### 1. Clone Repository
```bash
git clone https://github.com/your-username/bookstore.git