<?php

/**
 * AddressType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class AddressType extends BaseAddressType
{
    const TYPE_WORK		= 1;
    const TYPE_HOME 	= 2;
    const TYPE_MAIN	 	= 3;
    
	public static function findAllAsChoice() {
		$choicesArr = Doctrine_Query::create()
			->select('o.id, o.name')
		    ->from('AddressType o')
		    ->fetchArray();
		    
		$choices = array();
		foreach ($choicesArr as $value) {
			$choices[$value['id']] =  $value['name'];
		}
		
		return $choices;
	}	
}