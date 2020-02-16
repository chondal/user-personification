# User Personification

This package allows you to take the identity of another user without entering the password.
Keep in mind that you have to be very careful who we give access to this option, as it is ideal for admin users.

## 🚀 Quick start

Install the package:

```bash
composer require chondal/user-personification
```

## Install Dependencies

Config/app.php -> providers:

```php
Chondal\UserPersonification\UserPersonificationServiceProvider::class,
```
Aliases
```php
'UserPersonification' => Chondal\UserPersonification\Facades\UserPersonification::class,
```
## Usage
Show on screen the link to take user identity, this method waits for the User ID to log in.
```php
{{ UserPersonification::loginForm($user->id) }}
```

Once on the user screen, you can put this link to log out and return to the administrator user.
```php
{{ UserPersonification::logoutForm() }}
```

By publishing the configuration files you can modify the path you will take after login and logout.
You can also publish the views to change the aesthetics if you think it is necessary


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
