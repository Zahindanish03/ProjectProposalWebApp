# NOMNOMBite

## Group Members
1. Muhammad Asri Arifin Bin Samsul (2227475)  
2. Ezmir Na Q Sharial Bin Suhaizi (2229669)  
3. Muhammad Zahin Danish Bin Abdul Jalil (2223145)  
4. Luqman Hakim Bin Muhamad Sukri (2225423)  
5. Iman Aqil Bin Mohamad Sazali (2221139)

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
![ERD](https://raw.githubusercontent.com/yourusername/yourrepo/main/NOMNOMBite_ERD.png)

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
![Sequence Diagram](https://raw.githubusercontent.com/yourusername/yourrepo/main/NOMNOMBite_SequenceDiagram.png)

---

## References
1. [Laravel Documentation](https://laravel.com/docs)  
2. [Bootstrap Framework](https://getbootstrap.com/docs/)  
3. [Halal Food Guidelines - JAKIM](https://www.halal.gov.my/)  
4. [Markdown Guide](https://www.markdownguide.org/basic-syntax/)
