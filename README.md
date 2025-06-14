# NOMNOMBite

## Group Members
1. Iman Aqil Bin Mohamad Sazali (2221139)  
2. Ezmir Na Q Sharial Bin Suhaizi (2229669)  
3. Muhammad Zahin Danish Bin Abdul Jalil (2223145)  
4. Luqman Hakim Bin Muhamad Sukri (2225423)  
5. Muhammad Asri Arifin Bin Samsul (2227475)

---

## Title of the Project
*"NOMNOMBite" — A Web Application for Food Ordering and Restaurant Management*

---

## Introduction
NOMNOMBite is a web-based food ordering system built using Laravel’s Model-View-Controller (MVC) architecture. The platform is designed to provide a clean, responsive, and Shariah-compliant food ordering experience focused on Halal-certified restaurants. It empowers local restaurant owners to digitally manage their operations while allowing customers to browse menus, place orders, and track deliveries seamlessly.

---

## Objectives
- To provide a Shariah-compliant food ordering platform focused on Halal-certified restaurants.
- To enable customers to browse menus, place online orders, and track order statuses.
- To allow restaurant owners to manage food items, orders, and delivery statuses efficiently.
- To implement Laravel components such as routing, Blade views, Eloquent models, and CRUD operations.

---

## Features and Functionalities
- *User Authentication*: Role-based login for Admin, Restaurant Owner, and Customer.  
- *Restaurant Dashboard*: Manage food items (CRUD) with images and prices.  
- *Customer Dashboard*: Browse restaurant menus, add items to cart, place orders, and view order history.  
- *Order Management*: Real-time order status updates (Pending, Preparing, Out for Delivery, Completed).  
- *Review System*: Customers can rate and leave reviews for their completed orders.  
- *Responsive UI*: Built with Laravel Blade and Bootstrap for cross-device support.

---

## Entity-Relationship Diagram (ERD)
![image](https://github.com/user-attachments/assets/464a4904-8e24-4e1c-bf60-4e9e300222ab)


### Entity Summary

#### Users
- user_id (PK), name, email, password, role, created_at, updated_at

#### Restaurants
- restaurant_id (PK), user_id (FK), name, address, phone, description, image, created_at, updated_at

#### Menus
- menu_id (PK), restaurant_id (FK), name, description, price, image, created_at, updated_at

#### Orders
- order_id (PK), user_id (FK), restaurant_id (FK), total_price, status, created_at, updated_at

#### Order_Items
- order_item_id (PK), order_id (FK), menu_id (FK), quantity, price, created_at, updated_at

#### Reviews
- review_id (PK), order_id (FK), rating, comment, created_at, updated_at

---

## Sequence Diagram
![image](https://github.com/user-attachments/assets/d58ed895-f874-49f2-baaf-8a15d6f5eb07)

---
## Project Screen

### Mainpage
![image](https://github.com/user-attachments/assets/ee801157-624f-4695-a4f7-7baca8ecfd50)

### Menu
![image](https://github.com/user-attachments/assets/74f4e54a-efb2-4021-a163-0ed7cc9bbe2d)

### About
![image](https://github.com/user-attachments/assets/187820e6-4728-4f97-97d1-fbca7cd0fc70)

### Contact
![image](https://github.com/user-attachments/assets/77a217ca-7a33-415b-8462-2437b7db7b2d)

### Cart
![image](https://github.com/user-attachments/assets/67ec4687-cb5a-438c-bc1c-65ea4a32fb07)

---

## Challenges

### Database Seeding and Testing
- Seeding realistic test data for development and testing purposes, especially across interconnected tables, may lead to confusion if not planned properly.

### Navigation Between Roles
- Users with different roles may encounter UI/UX confusion if the navigation and dashboard access are not clearly separated or marked.

### Time Constraints
- Balancing Laravel learning curves, debugging, and feature development within academic deadlines may pressure the team and lead to incomplete features or minimal testing.

### Task Division and Code Integration
- Coordinating among team members who are each working on different parts of the MVC architecture can lead to merge conflicts or integration issues if there’s no proper Git version control or communication.

--- 

## References
1. [Laravel Documentation](https://laravel.com/docs)  
2. [Bootstrap Framework](https://getbootstrap.com/docs/)  
3. [Halal Food Guidelines - JAKIM](https://www.halal.gov.my/)  
4. [Markdown Guide](https://www.markdownguide.org/basic-syntax/)
