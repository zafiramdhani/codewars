<?php

function even_or_odd(int $n): string {
  return ($n % 2 === 0) ? 'Even' : 'Odd';
}

echo even_or_odd(25);
echo even_or_odd(8);