<?php

namespace B2;

class SimpleMDE
{
	static function load()
	{
		// If not installed bower-asset/jquery.cookie then using CDN
		if(empty(\bors::$bower_asset_packages['bower-asset/simplemde']))
		{
			\bors_use('https://cdnjs.cloudflare.com/ajax/libs/simplemde/1.11.2/simplemde.min.css');
			\bors_use('https://cdnjs.cloudflare.com/ajax/libs/simplemde/1.11.2/simplemde.min.js');
			return;
		}
		else
		{
			$bower_asset_path = \B2\Cfg::get('bower-asset.path', '/bower-asset') . '/simplemde/dist';
			\bors_use($bower_asset_path.'/simplemde.min.css');
			\bors_use($bower_asset_path.'/simplemde.min.js');
		}
	}

	static function appear($element, $params = [])
	{
		self::load();
		\B2\jQuery::load();

		\B2\jQuery::on_ready(
"
	var simplemde = new SimpleMDE({
		spellChecker: false,
		tabSize: 2,
		autosave: {
			enabled: true,
			uniqueId: 'SimpleMDE',
			delay: 1000,
		}
	});
");

	}
}
