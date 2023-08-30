<?php

use Ramsey\Uuid\Type\Decimal;

return [


'database'=>[
            'connection'=> null,
			'table'=> 'shoppingcart'	
],

'destroy_on_logout'=>'false',

'format'=>[
	'decimals'=> 2,
	'decimal_point'=>'.',
	'thaousand_separetor'=>''
],


];