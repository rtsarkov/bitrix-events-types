<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Sale;

interface SaleOnPersonTypeAddHandler
{
	public static function OnPersonTypeAddHandle(int $id, array $arFields);
}
