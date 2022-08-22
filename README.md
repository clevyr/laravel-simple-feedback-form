# Clevyr's Simple Feedback Form

[![Latest Version on Packagist](https://img.shields.io/packagist/v/clevyr/laravel-simple-feedback-form.svg?style=flat-square)](https://packagist.org/packages/clevyr/laravel-simple-feedback-form)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/clevyr/laravel-simple-feedback-form/run-tests?label=tests)](https://github.com/clevyr/laravel-simple-feedback-form/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/clevyr/laravel-simple-feedback-form/Check%20&%20fix%20styling?label=code%20style)](https://github.com/clevyr/laravel-simple-feedback-form/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/clevyr/laravel-simple-feedback-form.svg?style=flat-square)](https://packagist.org/packages/clevyr/laravel-simple-feedback-form)

## Requirements

-   Laravel 9+
-   Vue3

## Installation

You can install the package via composer:

```bash
composer require clevyr/laravel-simple-feedback-form
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-simple-feedback-form-config"
```

You can publish the Feedback vue file with:

```bash
php artisan vendor:publish --provider="Clevyr\FeedbackForm\FeedbackFormServiceProvider"
```

This is an example of the contents of the published config file:

```php
return [
  'email' => 'test@email.com',
];
```

Your `.env` file must contain:

```
FEEDBACK_EMAIL=
```

## Example

```vue
<template>
    <feedback-form
        name="Foo Bar"
        email="foo@bar.com"
        form-title="Some Foo Title"
        button-label="Feedback?"
        success-message="Your feedback\nwas sent!"
        submit-button-label="Submit"
    />
</template>

// Options API
<script>
import FeedbackForm from '@/Components/FeedbackForm.vue';

export default {
    components: {
        FeedbackForm,
    },
};
</script>

// Composition API
<script setup>
import FeedbackForm from '@/Components/FeedbackForm.vue';
</script>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Adam Libby](https://github.com/clevyr)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
