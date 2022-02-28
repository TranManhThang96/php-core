<?php
# factory design pattern
# nhằm tạo ra một đối tượng động, để gom các đối tượng có cách xử lý giống nhau, có tham số giống nhau 
# không cần biết phương thức của các lớp con thực hiện thế nào, mà chỉ cần yêu cầu đến factory, 
# nó sẽ cung cấp chính xác điều mà chúng ta muốn.

interface Shape
{
    // Có thể định nghĩa sẵn const hoặc không :D
    const SQUARE = 1;
    const CIRCLE = 2;
    const RECTANGLE = 3;
    // general method
    function draw();
}

class Circle implements Shape
{
    public function draw()
    {
        // thực hiện code vẽ hình tròn tại đây
        echo "Draw circle";
    }
}

class Square implements Shape
{
    public function draw()
    {
        // thực hiện code vẽ hình vuông tại đây
        echo "Draw square";
    }
}

class Rectangle implements Shape
{
    public function draw()
    {
        // thực hiện code vẽ hình chữ nhật tại đây
        echo "Draw rectangle";
    }
}

class ShapeFactory
{
    public function getShape($type)
    {
        switch ($type) {
            case Shape::SQUARE:
                return new Square;
                break;
            case Shape::CIRCLE:
                return new Circle;
                break;

            case Shape::RECTANGLE:
                return new Rectangle;
                break;
            default:
                return null;
                break;
        }
        return null;
    }
}

$factory = new ShapeFactory();
// hình tròn Shape::CIRCLE
$shapeCircle = $factory->getShape(Shape::CIRCLE);
$shapeCircle->draw();
