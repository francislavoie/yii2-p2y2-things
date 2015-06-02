<?php
/**
 * BootstrapSweetalertAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class BootstrapSweetalertAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/bootstrap-sweetalert-0.4.3/lib',
		'pub' => [
			'css' => [
				'sweet-alert.css',
			],
			'js' => [
				'sweet-alert.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
