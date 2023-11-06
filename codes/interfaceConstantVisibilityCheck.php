<?php

interface i {
	public const I = 1;
	public const J = 2;
}

class x implements i {
	private const I = 1;
	public const J = 2;
}

print x::J;
print x::I;
?>