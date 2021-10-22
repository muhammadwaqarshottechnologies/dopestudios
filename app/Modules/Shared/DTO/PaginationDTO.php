<?php

namespace App\Modules\Shared\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class PaginationDTO extends DataTransferObject
{
	public int $page = 1;
	public int $items = 10;
	public ?int $search;
}