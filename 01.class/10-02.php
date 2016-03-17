<?php
abstract class AbstractClass
{
    // 抽象メソッドでは、必須の引数だけを定義しています
    abstract protected function prefixName($name);

}

class ConcreteClass extends AbstractClass
{

    // 子クラスでは、親のシグネチャにないオプション引数を定義することもあるでしょう
    public function prefixName($name, $separator = ".") {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$prefix}{$separator} {$name}";
    }
}

$class = new ConcreteClass;
echo $class->prefixName("Pacman"), "\n";
echo $class->prefixName("Pacwoman"), "\n";
?>
