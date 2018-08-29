require 'CalculateSum.php';
 
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function test1()
    {
        $result = $this->calculator->calculate(1, 2);
        $this->assertEquals(3, $result);
    }
    public function test2()
    {
        $result = $this->calculator->calculate(0, 0);
        $this->assertEquals(0, $result);
    }
 public function test3()
    {
        $result = $this->calculator->calculate(-5, 5);
        $this->assertEquals(0, $result);
    }
 public function test4()
    {
        $result = $this->calculator->calculate(-5, -5);
        $this->assertEquals(-10, $result);
    }
  public function test5()
    {
        $result = $this->calculator->calculate("dsfsd","asdad");
        $this->assertEquals(0, $result);
    }

}