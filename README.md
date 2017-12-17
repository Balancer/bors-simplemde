# bors/simplemde

[SimpleMDE](https://simplemde.com/) is a simple, embeddable, and beautiful JS markdown editor.

This is package for use with BORS© Framework

```bash
# To use CDN-version
composer require bors/simplemde

# To use local asset version need also:
composer require bower-asset/simplemde
```

Local or CDN version detects automatically via `bower-asset/simplemde` package install.

Call `\B2\SimpleMDE::load();` in `pre_show()` method on any view or config.

```php
namespace \MyApp;

class View extends \B2\View
{
	function pre_show()
	{
		\B2\SimpleMDE::load();
		return parent::pre_show();
	}
}
```
