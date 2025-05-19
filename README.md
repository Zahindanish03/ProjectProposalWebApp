# ProjectProposalWebAppGroup_A
GROUP A
Group Members: 1. Muhammad Asri Arifin Bin Samsul 2227475
               2. Ezmir Na Q Sharial Bin Suhaizi 2229669
               3. Muhammad Zahin Danish Bin Abdul Jalil 2223145
               4. Luqman Hakim Bin Muhamad Sukri 2225423
               5. Iman Aqil Bin Mohamad Sazali 2221139

Title of The Project: "NOMNOMBite" -- A web application for food ordering and restaurant management.

Introduction of the Proposed Web Application: NOMNOMBite is a web-based food ordering system developed using Laravel’s Model-View-Controller (MVC) architecture. 
                                              The application focuses on providing a clean, user-friendly, and Shariah-compliant platform for ordering Halal-certified meals from registered local restaurants. 
                                              It empowers both restaurant owners and customers to manage menus, place orders, and track deliveries with ease.

Objective: - To provide a Shariah-compliant food ordering platform that focuses on Halal-certified restaurants.
           - To enable customers to browse menus, place online orders, and track order statuses.
           - To allow restaurants to manage food items, orders, and delivery statuses efficiently.
           - To implement Laravel components such as routing, Blade views, Eloquent models, and CRUD operations.

Features and Functionalities: - **User Authentication:** Role-based login for Admin, Restaurant Owner, and Customer.
                              - **Restaurant Dashboard:** Add, update, and delete food items with images and prices.
                              - **Customer Dashboard:** Browse menus, add items to cart, place orders, and view order history.
                              - **Order Management:** Real-time updates of order status (Pending, Preparing, Out for Delivery, Completed).
                              - **Responsive UI:** Built with Laravel Blade and Bootstrap for mobile and desktop support.
                             


Entities and Relationships

1. Users (Admin, Restaurant Owner, Customer)

- user_id (PK)

- name

- email (Unique)

- password

- role (Admin, Owner, Customer)

- created_at

- updated_at

2. Restaurants

- restaurant_id (PK)

- user_id (FK, references Users.user_id)

- name

- address

- phone

- description

- image (Logo or Cover Image)

- created_at

- updated_at

3. Menus

- menu_id (PK)

- restaurant_id (FK, references Restaurants.restaurant_id)

- name

- description

- price

- image

- created_at

- updated_at

4. Orders

- order_id (PK)

- user_id (FK, references Users.user_id)

- restaurant_id (FK, references Restaurants.restaurant_id)

- total_price

- status (Pending, Preparing, Out for Delivery, Completed)

- created_at

- updated_at

5. Order_Items

- order_item_id (PK)

- order_id (FK, references Orders.order_id)

- menu_id (FK, references Menus.menu_id)

- quantity

- price (Price at the time of order)

- created_at

- updated_at

6. Reviews

- review_id (PK)

- order_id (FK, references Orders.order_id)

- rating

- comment

- created_at

- updated_at




Relationships:

1. Users to Restaurants = One-to-Many (A restaurant owner can have multiple restaurants)

2. Restaurants to Menus = One-to-Many (Each restaurant has multiple menu items)

3. Users to Orders = One-to-Many (A customer can place multiple orders)

4. Orders to Order_Items = One-to-Many (Each order has multiple items)

5. Menus to Order_Items = One-to-Many (Each menu item can appear in multiple orders)

6. sureOrders to Reviews = One-to-One (Each order can have one review)

![image](https://github.com/user-attachments/assets/b60791fa-f578-463a-afbd-f20f18a10344)




References

- Laravel Official Documentation. Laravel Framework. Retrieved from https://laravel.com/docs

- GrabFood. Food Delivery Service. Retrieved from https://www.grab.com/food/

- FoodPanda. Online Food Ordering Platform. Retrieved from https://www.foodpanda.com.my/

- ShopeeFood. Food Delivery Service. Retrieved from https://shopeefood.com.my/

- Lau, T.-C. (2019). Online food delivery services: Making food delivery the new normal. Retrieved from https://www.researchgate.net/profile/Teck-Chai-Lau-2/publication/334050513_Online_Food_Delivery_Services_Making_Food_Delivery_the_New_Normal/links/5d148043458515c11cfb6d5e/Online-Food-Delivery-Services-Making-Food-Delivery-the-New-Normal.pdf

- Mattila, A. S., & Enz, C. A. (2020). The impact of COVID-19 on the restaurant industry. International Journal of Contemporary Hospitality Management, 32(10), 3037–3042. https://doi.org/10.1108/ijchm-06-2019-0595











