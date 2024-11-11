<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Sale;

interface SaleOnSaleOrderBeforeSavedHandler
{
	public static function OnSaleOrderBeforeSavedHandle(\Bitrix\Main\Event $event);
}
