<!--h-->
# Romanian Addresses

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c7404086a15a4db6b2080b1d09b0688a)](https://www.codacy.com/app/laravel-liberu/addresses?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=laravel-liberu/addresses&amp;utm_campaign=Badge_Grade)
[![StyleCI](https://styleci.io/repos/114126709/shield?branch=master)](https://styleci.io/repos/114126709)
[![License](https://poser.pugx.org/laravel-liberu/permissionmanager/license)](https://packagist.org/packages/laravel-liberu/ro-addresses)
[![Total Downloads](https://poser.pugx.org/laravel-liberu/ro-addresses/downloads)](https://packagist.org/packages/laravel-liberu/ro-addresses)
[![Latest Stable Version](https://poser.pugx.org/laravel-liberu/ro-addresses/version)](https://packagist.org/packages/laravel-liberu/ro-addresses)
<!--/h-->

Romanian Addresses extension for [Addresses](https://github.com/laravel-liberu/addresses), the [Laravel Liberu](https://github.com/laravel-liberu/Liberu) package.

[![Screenshot](https://laravel-liberu.github.io/ro-addresses/screenshots/bulma_040_thumb.png)](https://laravel-liberu.github.io/ro-addresses/screenshots/bulma_040.png)

### Features

- makes changes to the addresses columns to better fit the Romanian locale
- comes with two additional tables for Counties and Localities
- comes with its own customized form for the edit and creation of addresses
- comes with a personalized configuration
- comes with its own VueJS components `ro-addresses` in order to customize the form 
and the template for the address cards
- comes with its own trait
- comes with an import that updates localities

### Usage
- add the package's `AppServiceProvider` to the `config/app.php` list of providers (package auto-discovery is not used as loading order is important)
- run the migrations, as they change the addresses table, add two other tables, and insert all the localities
- the configuration should be published, and inside you need to define the addresable types
- for the models you want to make addressable, you should use the [Addresses](https://github.com/laravel-liberu/addresses) package's `Addresable` trait. 
- publish the VueJs component.
- insert the `RoAddreses` vue component where required. It takes the same parameters as `Addresses` - `id` and `type` 
being the essential ones.

```
<ro-addresses :id="modelId" type="model_class">
</ro-addresses>
```

where
* `modelId` is the addressable model id
* `model_alias` is the respective model class

### Import
If you need to use the import, publish the included template, importer and validator, 
and add the new import to your configuration:
```php
'localitiesUpdate' => [
    'label' => 'Localities Update',
    'template' => 'app/Importing/Templates/localityUpdate.json',
    'importerClass' => 'App\Importing\Importers\LocalityUpdateImporter',
    'customValidatorClass' => \App\Importing\Validators\LocalityUpdateValidator::class,
    'sheetEntriesLimit' => 5000,
    'stopOnErrors' => true,
],
```

### Publishes
- `php artisan vendor:publish --tag=ro-addresses-seeds` - the seeders
- `php artisan vendor:publish --tag=ro-addresses-config` - configuration file
- `php artisan vendor:publish --tag=ro-addresses-form` - form used for creating/editing addresses
- `php artisan vendor:publish --tag=ro-addresses-import` - form used for updating localities
- `php artisan vendor:publish --tag=liberu-config` - a common alias for when wanting to update the config,
once a newer version is released
- `php artisan vendor:publish --tag=ro-addresses-assets` - the VueJS component,
- `php artisan vendor:publish --tag=liberu-assets` - a common alias for when wanting to update the VueJS component,
once a newer version is released
- `php artisan vendor:publish --tag=liberu-seeders` - a common alias for when wanting to update the seeders,
once a newer version is released
 
### Notes

The [Laravel Liberu Core](https://github.com/laravel-liberu/Core) package does NOT come with this package included, 
only with the generic [Addresses](https://github.com/laravel-liberu/addresses).

This package depends on the [Addresses](https://github.com/laravel-liberu/addresses) and 
it does not work standalone.

<!--h-->
### Contributions

are welcome. Pull requests are great, but issues are good too.

### License

This package is released under the MIT license.
<!--/h--> 
