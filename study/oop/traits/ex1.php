<?php
/**
 * Trait ra đời để các class có thể sử dụng lại mã mà ko cần kế thừa
 * Hạn chế của PHP chính là đơn kế thừa
 * Trait cho phép sử dụng lại các bộ phương thức một cách tự do. Tức là trait có thể định nghĩa
 * các phương thức của classA, classB, classC.... . Và đâu đó class D sử dụng đc cả phương thức
 * của classA, classB, classC mà ko cần phải kế thừa vì đâu cho đa kế thừa đâu.
 * Trait giống như 1 class, nhằm mục đích nhóm chức năng 1 cách chi tiết
 *
 */

trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

class ezcReflectionMethod extends ReflectionMethod {
    use ezcReflectionReturnInfo;
    /* ... */
}

class ezcReflectionFunction extends ReflectionFunction {
    use ezcReflectionReturnInfo;
    /* ... */
}