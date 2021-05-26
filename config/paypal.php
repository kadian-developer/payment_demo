<?php 
return [ 
    'client_id' => 'AQh4lIy00kDKjKdl559l1ZLEVOp36mCajxPKFMwGdbYOhp9N2FRWlItHLj5DbITZ9OkcakrPZC42iPFN',
	'secret' => 'EIo433WyPb_YoY6hVB4DfqBu5BwGCgeG9HYkqvxAmYjPSs37OPcDfyPi_KnVpNq5cHd6XmfzTUZAPfzk',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 3000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];