<?php

return [
    'user' => [
        'OnBeforeUserRegister' => [
            '&arParams' => 'array'
        ],
        'OnAfterUserRegister' => []
    ],
    'main' => [
        'OnPageStart' => [],
        'OnBeforeProlog' => [],
        'OnProlog' => [],
        'OnEpilog' => [],
        'OnAfterEpilog' => [],
        'OnEndBufferContent' => []
    ],
    'iblock' => [
        'OnBeforeIBlockAdd' => [
            '&arParams' => 'array'
        ],
        'OnAfterIBlockAdd' => [
            '&arFields' => 'array'
        ],
        'OnBeforeIBlockUpdate' => [
            '&arParams' => 'array'
        ],
        'OnAfterIBlockUpdate' => [
            '&arFields' => 'array'
        ],
        'OnBeforeIBlockDelete' => [
            'id' => 'int'
        ],
        'OnIBlockDelete' => [
            'id' => 'int'
        ],
        'OnBeforeIBlockPropertyAdd' => [
            '&arParams' => 'array'
        ],
        'OnAfterIBlockPropertyAdd' => [
            '&arFields' => 'array'
        ],
        'OnBeforeIBlockPropertyUpdate' => [
            '&arParams' => 'array'
        ],
        'OnAfterIBlockPropertyUpdate' => [
            '&arFields' => 'array'
        ],
        'OnBeforeIBlockPropertyDelete' => [
            'id' => 'int'
        ],
        'OnIBlockPropertyBuildList' => [],
        'OnBeforeIBlockSectionAdd' => [
            '&arParams' => 'array'
        ],
        'OnAfterIBlockSectionAdd' => [
            '&arFields' => 'array'
        ],
        'OnBeforeIBlockSectionUpdate' => [
            '&arParams' => 'array'
        ],
        'OnAfterIBlockSectionUpdate' => [
            '&arFields' => 'array'
        ],
        'OnBeforeIBlockSectionDelete' => [
            'id' => 'int'
        ],
        'OnBeforeIBlockElementAdd' => [
            '&arParams' => 'array'
        ],
        'OnStartIBlockElementAdd' => [
            '&arParams' => 'array'
        ],
        'OnAfterIBlockElementAdd' => [
            '&arFields' => 'array'
        ],
        'OnBeforeIBlockElementUpdate' => [
            '&arParams' => 'array'
        ],
        'OnStartIBlockElementUpdate' => [
            '&arParams' => 'array'
        ],
        'OnAfterIBlockElementUpdate' => [
            '&arFields' => 'array'
        ],
        'OnBeforeIBlockElementDelete' => [
            'id' => 'int'
        ],
        'OnAfterIBlockElementDelete' => [
            '&arFields' => 'array'
        ],
        'OnIBlockElementDelete' => [
            'id' => 'int'
        ],
        'OnAfterIBlockElementSetPropertyValues' => [
            'elementId' => 'int',
	        'iblockId' => 'int',
	        'propertyValues' => 'array',
            'propertyCode' => 'string'
        ],
        'OnAfterIBlockElementSetPropertyValuesEx' => [
            'elementId' => 'int',
            'iblockId' => 'int',
            'propertyValues' => 'array',
            'flags' => 'array'
        ],
        'OnIBlockElementAdd' => [
            'arFields' => 'array'
        ],
        'OnIBlockElementUpdate' => [
            'newFields' => 'array',
            'ar_wf_element' => 'array'
        ],
        'OnIBlockElementSetPropertyValues' => [
            'elementId' => 'int',
	        'iblockId' => 'int',
	        'propertyValues' => 'array',
            'propertyCode' => 'string',
            'ar_prop' => 'array',
            'arDBProps' => 'array'
        ],
        'OnIBlockElementSetPropertyValuesEx' => [
            'elementId' => 'int',
            'iblockId' => 'int',
            'propertyValues' => 'array',
            'propertyList' => 'array',
            'arDBProps' => 'array'
        ],
    ],
    'sale' => [
        'OnBeforePersonTypeAdd' => [
            '&arFields' => 'array'
        ],
        'OnPersonTypeAdd' => [
            'id' => 'int',
            'arFields' => 'array'
        ],
        'OnBeforePersonTypeUpdate' => [
            'id' => 'int',
            '&arFields' => 'array'
        ],
        'OnPersonTypeUpdate' => [
            'id' => 'int',
            'arFields' => 'array'
        ],
        'OnBeforePersonTypeDelete' => [
            'id' => 'int',
        ],
        'OnPersonTypeDelete' => [
            'id' => 'int',
        ],
        'OnSaleOrderBeforeSaved' => [
            'event' => '\Bitrix\Main\Event'
        ],
        'OnSaleOrderSaved' => [
            'OnSaleOrderSaved' => '\Bitrix\Main\Event'
        ]
    ]
];
