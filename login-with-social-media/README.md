# Question

Imagine you have a login in your website and you want to support multiple social media integrations. How would you
write it?
In here we are interested in seeing how you'd structure the code. if you would use any design patterns.
There's no need to code the integrations themselves (you can add something like / integration code goes here) and that`s enough.

# Answer
This project can be executed using two paths.  

- Without composer, using an PHP autoloader.
    - The entry file in [index.php](index.php)
    - And the src files are loaded using an autoloader.
    - This eliminates the need to manually include or require each class file.
- With composer
  - The entry file in this case is [src/index.php](src%2Findex.php) 
  - We can create a composer file by `composer init`
  - And with PSR-4 autoloading standards we can set the namespaces.
  - In the composer.json file we set
  ```
    "autoload": {
        "psr-4": {
            "LoginWithSocialMedia\\": "src/"
        }
    },
  ```
  - And in the [src/index.php](src%2Findex.php) file we need to tell php to load the autoloader from the vendor directory like so `require '../vendor/autoload.php';`
  - And it is very important to auto generate this file using `composer dumpautoload` command as it may not generate with `composer install` command.


