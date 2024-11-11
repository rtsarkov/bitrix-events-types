<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Types;

class MainEventTypes
{
	public const ON_PAGE_START = 'OnPageStart';
	public const ON_BEFORE_PROLOG = 'OnBeforeProlog';
	public const ON_PROLOG = 'OnProlog';
	public const ON_EPILOG = 'OnEpilog';
	public const ON_AFTER_EPILOG = 'OnAfterEpilog';
	public const ON_END_BUFFER_CONTENT = 'OnEndBufferContent';
}
