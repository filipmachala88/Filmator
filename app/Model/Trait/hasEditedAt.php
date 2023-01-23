<?php

declare(strict_types=1);

namespace App\Model\Trait;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

trait hasEditedAt
{

	#[ORM\Column(type: "datetime", nullable: false)]
	protected DateTime $editedAt;


	public function getEditedAt(): DateTime
	{
		return $this->editedAt;
	}

}