<?php

namespace phpUnitDemo;

/**
* class URL
*/
class URL
{
	/**
	 * This method will turn a string into a URL-safe string: “This string will be sluggified” will turn * into “this-string-will-be-sluggified”.
	 * @param  [type]  $string    [description]
	 * @param  string  $separator [description]
	 * @param  integer $maxLength [description]
	 * @return [type]             [description]
	 */
	public function sluggify($string, $separator = '-', $maxLength = 96)
	{
		$title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
		$title = preg_replace("%[^-/+|\w ]%", '', $title);
		$title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        $title = preg_replace("/[\/_|+ -]+/", $separator, $title);

        return $title;
	}
}