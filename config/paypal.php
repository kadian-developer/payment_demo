<?php 
return [ 
    'client_id' => 'AYms7aJHikVmNhksV7j55LgGiqUVnQqNQZUwGu3F4WYZx0Iqnpr1qsMyTR4m_tECRSWuyKCTe1vPeVsl',
	'secret' => 'EAsgxr5F450GoeTgVuWU43ua4CxSmFdVvi-9Dm5c9SljUkEptPCz06qyqqsTjQG4lmOFeo44E1N79NUG',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 3000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];