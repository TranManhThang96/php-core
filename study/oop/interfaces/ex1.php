<?php

/*
 * định nghĩa các phương thức mà các lớp implement phải triển khai
 * tất cả các phương thức được khai báo trong interface phải là public
 * và chúng được coi là abstract method (mặc dù ko có định nghĩa abstract method)
 * nghĩa là cứ phương thức được định nghĩa trong interface được coi là abstract method
 * https://viblo.asia/p/huong-doi-tuong-va-the-hien-trong-lap-trinh-php-chapter-1-bJzKmg6Xl9N#_3-phan-biet-abstract-class-va-interface-6
 */


// Declare the interface 'iTemplate'
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implement the interface
// This will work: bởi vì class Template đã định nghĩa đầy đủ các phương thức setVariable và getHtml
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

// This will not work
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (iTemplate::getHtml)
class BadTemplate implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}