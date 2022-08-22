I assumed that this small User management system needed to have role-permission implementation.
So I've decided to create users which will have a specific role and then, we can change permissions
for that specific role.

This was maybe more complicated and harder way but I though that it will make sense if there is some
kind of a role model system behind this app. 

I did not have much time to implement some other things like permissions, middlewares, authentication etc, so I focused to do as much as I can from the task description. Also I was strugling with the search query which at first I've tried to make fully flexible, so user can search for keywords, order data, filter data etc. all at the same time. But, I figured out that it will not be possible to do that in this amount of time, so I've implemented just a simple search, order and filter functionalities.

After you install all the packages and stuff and run migrations, you can also run seeders which I've created just to populate the database with needed content.

By default when you create a user, it will have writer role. So you need to run seeder to create admin user, or just change some code :).

Of yourse, I could create crud for roles and permissions, but that would be time consuming so I did not do that.

For the login/register sistem I've used Laravel Fortify
(https://laravel.com/docs/8.x/fortify)

Also, as you can see from the link, I've used Laravel 8 for backend, and for the database I've used MySQL. 

