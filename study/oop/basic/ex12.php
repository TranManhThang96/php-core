<?php
/**
 * Trên PHP8, "nullsafe" operator (toán tử ?->) (giống ?. bên javascript) dùng để check is_null
 * và trả về "null" nếu phần tử null thay vì throw ra ngoại lệ
 * Toán tử "nullsafe" được sử dụng nếu coi null là một giá trị hợp lệ, có thể sử dụng. Còn không hãy ném ra ngoại lệ
 */

$repository = null;
// As of PHP 8.0.0, this line:
$result = $repository?->getUser(5)?->name;

// Is equivalent to the following code block:
if (is_null($repository)) {
    $result = null;
} else {
    $user = $repository->getUser(5);
    if (is_null($user)) {
        $result = null;
    } else {
        $result = $user->name;
    }
}
