<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- =====================QUE_1========================== -->

    <h2>QUE: What Is Object Oriented Programming?</h2>
    <h4>Ans:</h4>
    <p>Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique attributes and behavior</p>


<!-- ========================QUE_2======================== -->
<h2>QUE: What Are Properties Of Object Oriented Systems?</h2>
<h4>Ans:</h4>
<p>The characteristics of object oriented programming are classes, objects, encapsulation, inheritance, abstraction, and polymorphism</p>


<!-- ==========================QUE_3=========================== -->

<h2>QUE:What Is Difference Between Class And Interface?</h2>
<h4>Ans:</h4>
<p>A class can inherit another class. An Interface cannot inherit a class. A class can be inherited by another class using the keyword 'extends'. An Interface can be inherited by a class using the keyword 'implements' and it can be inherited by another interface using the keyword 'extends'.</p>
    

<!-- ==========================QUE_4=========================== -->

<h2>QUE:What Is Overloading?</h2>
<h4>Ans:</h4>
<p>Overloading in PHP provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.</p>
    

<!-- ==========================QUE_5=========================== -->

<h2>QUE:What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::)) with
Example</h2>
<h4>Ans:</h4>
<p>The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon, is a token that allows access to static, constant, and overridden properties or methods of a class.</p>
    

<!-- ==========================QUE_6=========================== -->

<h2>QUE:What are the differences between abstract classes and interfaces?</h2>
<h4>Ans:</h4>
<p>Interfaces cannot have properties, while abstract classes can. All interface methods must be public, while abstract class methods is public or protected. All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary.
</p>
    

<!-- ==========================QUE_7=========================== -->

<h2>QUE:Define Constructor and Destructor?</h2>
<h4>Ans:</h4>
<p>Constructor and Destructor are the special member functions of the class which are created by the C++ compiler or can be defined by the user. Constructor is used to initialize the object of the class while destructor is called by the compiler when the object is destroyed.</p>
    

<!-- ==========================QUE_8=========================== -->

<h2>QUE:How to Load Classes in PHP?</h2>
<h4>Ans:</h4>
<p>spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
}); </p>
    

<!-- ==========================QUE_9=========================== -->

<h2>QUE:How to Call Parent Constructor?</h2>
<h4>Ans:</h4>
<p>In order to run a parent constructor, a call to parent::__construct() within the child constructor is required. If the child does not define a constructor then it may be inherited from the parent class just like a normal class method (if it was not declared as private).</p>
    

<!-- ==========================QUE_10=========================== -->

<h2>QUE:Parent Constructor Called Implicitly When Create An ObjectOf Class?</h2>
<h4>Ans:</h4>
<p>Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, a call to parent::__construct() within the child constructor is required.
</p>
    

<!-- ==========================QUE_11=========================== -->

<h2>QUE:What Happen, If Constructor Is Defined As Private Or Protected?</h2>
<h4>Ans:</h4>
<p>The constructor may be made private or protected to prevent it from being called externally. If so, only a static method will be able to instantiate the class. Because they are in the same class definition they have access to private methods, even if not of the same object instance.</p>


<!-- ==========================QUE_12=========================== -->

<h2>QUE:What are PHP Magic Methods/Functions? List them Write program for Static
Keyword in PHP?</h2>
<h4>Ans:</h4>
<p><b>List of Magic Methods in PHP:</b><br>
    
__construct()<br>
__destruct()<br>
__call($fun, $arg)<br>
__callStatic($fun, $arg)<br>
__get($property)<br>
__set($property, $value)<br>
__isset($content)<br>
__unset($content)</p>

<!-- ==========================QUE_13=========================== -->

<h2>QUE:Create multiple Traits and use it in to a single class?</h2>
<h4>Ans:</h4>
<p>Multiple Traits can be inserted into a class by listing them in the use statement, separated by commas. $o = new MyHelloWorld(); $o->sayHello(); $o->sayWorld();</p>
    

<!-- ==========================QUE_14=========================== -->

<h2>QUE:Write PHP Script of Object Iteration?</h2>
<h4>Ans:</h4>
<?php
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
       echo "MyClass::iterateVisible:<br>";
       foreach ($this as $key => $value) {
           print "$key => $value<br>";
       }
    }
}

$class = new MyClass();

foreach($class as $key => $value) {
    print "$key => $value<br>";
}
echo "<br>";


$class->iterateVisible();

?>
    

<!-- ==========================QUE_15=========================== -->

<h2>QUE:Use of The $this keyword </h2>
<h4>Ans:</h4>
<p>$this is a reserved keyword in PHP that refers to the calling object. It is usually the object to which the method belongs, but possibly another object if the method is called statically from the context of a secondary object.</p>
    

<?php
class simple{

	public $k = 12345;

	public function display(){
		return $this->k;
	}
}

$obj = new simple();
echo $obj->display();

?>

    
</body>
</html>