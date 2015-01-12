# laravel-disqus
Disqus comments for laravel 4


## Installation

Add the package in your composer.json file and run `composer update`.

```json
{
    "require": {
        "d-te/laravel-discus": "dev-master"
    }
}
```
### Registering the Package

Register the service provider within the ```providers``` array found in ```app/config/app.php```:

```php
'providers' => array(
	// ...
	
	'Dte\Disqus\DisqusServiceProvider'
)
```

Add an alias within the ```aliases``` array found in ```app/config/app.php```:


```php
'aliases' => array(
	// ...
	
	'Disqus' => 'Dte\Disqus\Facades\Disqus',
)
```

## Configuration

Create configuration file for package using artisan command

```
$ php artisan config:publish d-te/laravel-disqus
```


## Usage

### Basic usage

Add 'disqus_shortname' to ```app/config/packages/d-te/laravel-disqus/config.php```.

You can find your disqus shortname afer signing up and visiting https://disqus.com/admin/settings/

In your template add :

```php
  {{ \Disqus::comments() }}
```

### Additional disqus configuration variables

There are some [disqus configuration variables](https://help.disqus.com/customer/portal/articles/472098-javascript-configuration-variables):

 * disqus_identifier
 * disqus_title
 * disqus_url
 * disqus_category_id

 Example of usage:
 
 ```php
  {{ \Disqus::comments(
      array(
        'disqus_identifier' => '/december-2010/the-best-day-of-my-life/',
        'disqus_title' => 'Some title',
        'disqus_url' => 'http://example.com/helloworld.html',
        'disqus_category_id' => 123456
    ) ) }}
```

### Multi-lingual support

  There are two ways how to change disqus locales:

  1. To switch on auto selecting disqus language based on Laravel app locale:
  
  in ```app/config/packages/d-te/laravel-disqus/config.php``` set 
  
  ```php
    'auto_set_language' => true,
  ```
  
  2. Set locale manually in template:
  
```php
  {{ \Disqus::comments(array('language' => 'de')) }}
```
  Sometimes discus locale could not corresponde to your app locale.
	To convert your app locale to discus locale just add supported locales to config ```app/config/packages/d-te/laravel-disqus/config.php```	example:
	
```php
	  'discus_languages' => array(
	 			'ua' => 'uk',
	 			'fr' => 'fr_CA',
	 		)
```
 * [List of supported disqus locales](https://www.transifex.com/languages/)
