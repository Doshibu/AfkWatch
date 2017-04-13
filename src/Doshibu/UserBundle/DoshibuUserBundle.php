<?php

namespace Doshibu\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DoshibuUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
