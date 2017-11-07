<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

class w_user extends Widget
{
	public $title       = '{lang member_area}';
	public $description = '';
	public $link        = 'http://www.neofrag.com';
	public $author      = 'Michaël Bilcot <michael.bilcot@neofrag.com>';
	public $licence     = 'http://www.neofrag.com/license.html LGPLv3';
	public $version     = 'Alpha 0.1';
	public $nf_version  = 'Alpha 0.1';
	public $path        = __FILE__;
	public $types       = [
		'index'      => '{lang member_area}',
		'index_mini' => '{lang member_area_mini}'
	];
}