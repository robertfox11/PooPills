<?php

use function PHPSTORM_META\override;

override('test', '$a,$b', 'echo "DOING TEST"; return $a * $b;');
?>