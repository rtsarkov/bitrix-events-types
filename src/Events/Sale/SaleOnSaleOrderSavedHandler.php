<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Sale;

interface SaleOnSaleOrderSavedHandler
{
	public static function OnSaleOrderSavedHandle(\Bitrix\Main\Event $OnSaleOrderSaved);
}
