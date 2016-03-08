P2Y2Things v1.1.3
=================

A kitchen-sink full of CSS & JS resources wrapped as Yii 2 AssetBundles.

This package replaces my yii2-asset-collection, including in all my other projects which had yii2-asset-collection as a dependancy.

Assets
------

Resource | Asset Class
-------- | -----------
[Animate.css](http://daneden.github.io/animate.css/) | `p2made\assets\AnimateAsset`
[Bootstrap](http://getbootstrap.com) | `p2made\assets\BootstrapAsset` & `p2made\assets\BootstrapPluginAsset`
[Bootswatch Themes](http://bootswatch.com) | As over-ride settings on `p2made\assets\BootstrapAsset`
[Bootstrap Social](https://lipis.github.io/bootstrap-social/) | `p2made\assets\BootstrapSocialAsset`
[Bootstrap Sweetalert](http://lipis.github.io/bootstrap-sweetalert/) | `p2made\assets\BootstrapSweetalertAsset`
[Bootstrap Switch](http://www.bootstrap-switch.org) | `p2made\assets\BootstrapSwitchAsset`
[dataTables](http://datatables.net) | `p2made\assets\DataTablesAsset`
[flag-icon-css](https://lipis.github.io/flag-icon-css/) | `p2made\assets\FlagIconCssAsset`
[FitVids.js](http://fitvidsjs.com) | `p2made\assets\FitvidsAsset`
[Flot Charts](http://www.flotcharts.org) | `p2made\assets\FlotChartsAsset`
[Flot tooltip](https://github.com/krzysu/flot.tooltip) | `p2made\assets\FlotTooltipAsset` |
[FontAwesome](http://fortawesome.github.io/Font-Awesome/) | `p2made\assets\FontAwesomeAsset`
[FullCalendar](http://fullcalendar.io) | `p2made\assets\FullCalendarAsset` & `p2made\assets\FullCalendarPrintAsset`
[GMaps.js](https://hpneo.github.io/gmaps/) | `p2made\assets\GMapsAsset`
[Holder.js](http://imsky.github.io/holder/) | `p2made\assets\HolderAsset`
[Isotope](http://isotope.metafizzy.co) | `p2made\assets\IsotopeAsset`
[jQuery](http://jquery.com) | `p2made\assets\JqueryAsset`
[jquery-countTo](https://github.com/mhuggins/jquery-countTo) | `p2made\assets\JqueryCountToAsset`
[jQuery Migrate](http://jquery.com) | `p2made\assets\JqueryMigrateAsset`
[jQuery-ui](http://jqueryui.com) | `p2made\assets\JuiAsset`
[Masonry](http://masonry.desandro.com) | `p2made\assets\MasonryAsset`
[metisMenu](https://github.com/onokumus/metisMenu) | `p2made\assets\MetisMenuAsset`
[Moment.js](http://momentjs.com/) | `p2made\assets\MomentAsset`
[MomentTimezone](http://momentjs.com/timezone/) | `p2made\assets\MomentTimezoneAsset`
[Morris.JS](http://morrisjs.github.io/morris.js/) | `p2made\assets\MorrisAsset`
[prettyPhoto](http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/) | `p2made\assets\PrettyPhotoAsset`
[Raphaël](http://raphaeljs.com) | `p2made\assets\RaphaelAsset`
[SweetAlert](http://t4t5.github.io/sweetalert/) | `p2made\assets\SweetAlertAsset`
timeline | `p2made\assets\TimelineAsset`
[Timeline.css](https://github.com/christian-fei/Timeline.css) | `p2made\assets\TimelineCssAsset`
[WOW.js](http://mynameismatthieu.com/WOW/) | `p2made\assets\WowAsset`

The asset collection gives the option of using either published assets or assets from CDNs.

Deprecated
----------

These assets support IE. I will not be maintaining them any further, & will eventually remove them.

Resource | Asset Class
-------- | -----------
[html5shiv](https://github.com/afarkas/html5shiv) | `p2made\assets\Html5shivAsset`
[printshiv](https://github.com/afarkas/html5shiv) | `p2made\assets\PrintShivAsset`
[Respond.JS](https://github.com/scottjehl/Respond) | `p2made\assets\RespondAsset`


Installation
------------

The preferred way to install p2y2-things is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require p2made/yii2-p2y2-things ">=1.1.3"
```

or

```
php composer.phar require p2made/yii2-p2y2-things ">=1.1.3"
```

Alternatively add:

```
	"p2made/yii2-p2y2-things": ">=1.1.3"
```

to the requires section of your `composer.json` file & p2y2-things will be installed next time you run `composer update`.

Usage
-----

First add these lines to the `params` section of your config file.

```
	'p2assets' => [
		'useCdn' => true, // false or not set to use published assets
	],
```

You can substitute any of the themes from [Bootswatch](http://bootswatch.com) by setting:

```
	'p2assets' => [
		...
		'bwTheme' = 'cerulean',

	],
```

Using one of: `'cerulean'`, `'cosmo'`, `'cyborg'`, `'darkly'`, `'flatly'`, `'journal'`, `'lumen'`, `'paper'`, `'readable'`, `'sandstone'`, `'simplex'`, `'slate'`, `'spacelab'`, `'superhero'`, `'united'`, `'yeti'`.


Register assets in views with:

```
p2made\assets\AssetNameAsset::register($this);
```

& as a dependancy in assets with:

```
	public $depends = [
		// ...
	'p2made\assets\AssetNameAsset',
		// ...
	];
```

The `register` lines for all assets...

```
	p2made\assets\AnimateAsset::register($this);
	p2made\assets\BootstrapAsset::register($this);
	p2made\assets\BootstrapPluginAsset::register($this);
	p2made\assets\BootstrapSocialAsset::register($this);
	p2made\assets\BootstrapSweetalertAsset::register($this);
	p2made\assets\BootstrapSwitchAsset::register($this);
	p2made\assets\DataTablesAsset::register($this);
	p2made\assets\ExcanvasAsset::register($this);
	p2made\assets\FlagIconCssAsset::register($this);
	p2made\assets\FitvidsAsset::register($this);
	p2made\assets\FlotChartsAsset::register($this);
	p2made\assets\FontAwesomeAsset::register($this);
	p2made\assets\FullCalendarAsset::register($this);
	p2made\assets\GMapsAsset::register($this);
	p2made\assets\HolderAsset::register($this);
	p2made\assets\IsotopeAsset::register($this);
	p2made\assets\JqueryAsset::register($this);
	p2made\assets\JqueryCountToAsset::register($this);
	p2made\assets\JqueryMigrateAsset::register($this);
	p2made\assets\JuiAsset::register($this);
	p2made\assets\MasonryAsset::register($this);
	p2made\assets\MetisMenuAsset::register($this);
	p2made\assets\MomentAsset::register($this);
	p2made\assets\MomentTimezoneAsset::register($this);
	p2made\assets\MorrisAsset::register($this);
	p2made\assets\PrettyPhotoAsset::register($this);
	p2made\assets\RaphaelAsset::register($this);
	p2made\assets\SweetAlertAsset::register($this);
	p2made\assets\TimelineAsset::register($this);
	p2made\assets\TimelineCssAsset::register($this);
	p2made\assets\WowAsset::register($this);

	p2made\assets\Html5shivAsset::register($this);
	p2made\assets\PrintShivAsset::register($this);
	p2made\assets\RespondAsset::register($this);
```

& the dependency lines for all assets...

```
	'p2made\assets\AnimateAsset',
	'p2made\assets\BootstrapAsset',
	'p2made\assets\BootstrapPluginAsset',
	'p2made\assets\BootstrapSocialAsset',
	'p2made\assets\BootstrapSweetalertAsset',
	'p2made\assets\BootstrapSwitchAsset',
	'p2made\assets\DataTablesAsset',
	'p2made\assets\ExcanvasAsset',
	'p2made\assets\FlagIconCssAsset',
	'p2made\assets\FitvidsAsset',
	'p2made\assets\FlotChartsAsset',
	'p2made\assets\FontAwesomeAsset',
	'p2made\assets\FullCalendarAsset',
	'p2made\assets\GMapsAsset',
	'p2made\assets\HolderAsset',
	'p2made\assets\IsotopeAsset',
	'p2made\assets\JqueryAsset',
	'p2made\assets\JqueryCountToAsset',
	'p2made\assets\JqueryMigrateAsset',
	'p2made\assets\JuiAsset',
	'p2made\assets\MasonryAsset',
	'p2made\assets\MetisMenuAsset',
	'p2made\assets\MomentAsset',
	'p2made\assets\MomentTimezoneAsset',
	'p2made\assets\MorrisAsset',
	'p2made\assets\PrettyPhotoAsset',
	'p2made\assets\RaphaelAsset',
	'p2made\assets\SweetAlertAsset',
	'p2made\assets\TimelineAsset',
	'p2made\assets\TimelineCssAsset',
	'p2made\assets\WowAsset',

	'p2made\assets\Html5shivAsset',
	'p2made\assets\PrintShivAsset',
	'p2made\assets\RespondAsset',
```

For usage of the asset resources see their web pages.

Sources
-------

The following sources are used for published assets...

- for PHP packages, a trusted `composer` package as a dependancy
- for CSS &/or JS packages, a trusted `bower` package as a dependancy

- downloaded files included in this package if a suitable package is not available.

In order of preference, the CDNs used are...

- vendor CDN
- [cdnjs](https://cdnjs.com/)
- [jsDelivr](http://www.jsdelivr.com/)

Very occasionally the CDN version of a resource may be a little behind the published version.
