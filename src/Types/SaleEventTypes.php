<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Types;

class SaleEventTypes
{
	public const ON_BEFORE_PERSON_TYPE_ADD = 'OnBeforePersonTypeAdd';
	public const ON_PERSON_TYPE_ADD = 'OnPersonTypeAdd';
	public const ON_BEFORE_PERSON_TYPE_UPDATE = 'OnBeforePersonTypeUpdate';
	public const ON_PERSON_TYPE_UPDATE = 'OnPersonTypeUpdate';
	public const ON_BEFORE_PERSON_TYPE_DELETE = 'OnBeforePersonTypeDelete';
	public const ON_PERSON_TYPE_DELETE = 'OnPersonTypeDelete';
	public const ON_SALE_ORDER_BEFORE_SAVED = 'OnSaleOrderBeforeSaved';
	public const ON_SALE_ORDER_SAVED = 'OnSaleOrderSaved';
}
