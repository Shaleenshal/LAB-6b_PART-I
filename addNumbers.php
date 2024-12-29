<?php
function addNumbers(int $a, int $b): int {
    return $a + $b;
}

echo addNumbers(5, 5); 
// Since strict types are NOT enabled, "5 days" will be coerced into int(5).
?>
