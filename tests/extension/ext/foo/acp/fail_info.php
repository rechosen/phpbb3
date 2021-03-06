<?php

namespace foo\acp;

/*
* Due to the mismatch between the class name and the file name, this module
* file shouldn't be found by the extension finder
*/
class foo_info
{
	public function module()
	{
		return array(
			'filename'	=> 'foo\acp\fail_module',
			'title'		=> 'Foobar',
			'version'	=> '3.1.0-dev',
			'modes'		=> array(
				'config'		=> array('title' => 'Config',	'auth' => '', 'cat' => array('ACP_MODS')),
			),
		);
	}
}
