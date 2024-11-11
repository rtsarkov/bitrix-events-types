<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Sale;

interface SaleOnPersonTypeUpdateHandler
{
	public static function OnPersonTypeUpdateHandle(int $id, array $arFields);
}
