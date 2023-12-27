# Laravel Nova Custom Login

Create a custom Login Page.

## Setup

Project is in the `/project` directory.

Setup project as general Laravel Project. The Home Route create User and redirect to Nova.

User Mail: name@example.com  
User Password: secret

## Changes:

Step by Step: [See Commits](https://github.com/Muetze42/laravel-nova-example-projects/commits/feature/custom-login/)

* [Disabled Nova Authentication Routes](https://github.com/Muetze42/laravel-nova-example-projects/blob/feature/custom-login/project/app/Providers/NovaServiceProvider.php#L29)
* [Registered Custom Routes in Nova](https://github.com/Muetze42/laravel-nova-example-projects/blob/feature/custom-login/project/config/nova.php#L206)
* [Custom Login Controller](https://github.com/Muetze42/laravel-nova-example-projects/blob/feature/custom-login/project/app/Http/Controllers/AuthController.php)
* [Custom Routes](https://github.com/Muetze42/laravel-nova-example-projects/blob/feature/custom-login/project/routes/web.php#L24)
* [Custom Login Component](https://github.com/Muetze42/laravel-nova-example-projects/blob/feature/custom-login/project/resources/js/Pages/Login.vue)

---

More Examples:  
https://github.com/Muetze42/laravel-nova-example-projects
