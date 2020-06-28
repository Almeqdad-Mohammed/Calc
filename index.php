<?php
require_once 'include-calc/Calculate.php';
    if ($_GET['operator']) {
      // fetch number info from thr form
      $num1  = $_GET['num1'];
      $num2  = $_GET['num2'];
      $operator = $_GET['operator'];

      $calculate = new Calculate();
      if ($calculate->getvalidateform($num1, $num2, $operator)) {
          // by using switch cases instead of if else
          switch ($operator) {
            case 'ADD':
              $finalResult =  $calculate->addition($num1 , $num2);
            break;
            case 'SUB':
              $finalResult =  $calculate->substruction($num1 , $num2);
            break;
            case 'MULTI':
              $finalResult =  $calculate->multibluction($num1 , $num2);
            break;
            case 'DIVI':
              $finalResult =  $calculate->divition($num1 , $num2);
            break;
            default:
            echo "You have Not enter any Number Or Not Selected Operator ";
          }//. end of switch

      }else {
        $finalResult =  "<span style='font-size:18px'>You have Not enter any Number Or Not Selected Operator</span>";
      }
  }      // check the info and do calc


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Calculate</title>
    <style media="screen">
    /* here I Use Some Costum Css Cascading For simple Style  */
      .contianer{
        width: 800px;
        margin: 100px auto;

        background: #CCC;
        padding: 10px;
      }
      h1 {
        text-align: center;
        color:
      }
      .contianer form {
        width: 500px;
        padding: 10px;
        height: 150px;

      }
      .contianer form input{
        width: 100%;
        padding: 5px;
        margin: 5px
      }
      .contianer form button {
        padding: 5px;
        width: 90px;
        text-align: center;
        font-size: 20px;
        margin-left: 10px
      }
      .contianer p {
        width: 500px;
        height: 100px;
        background: #DDD;
        color: green;
        padding: 10px;
        font-size: 30px;
        line-height: 3;
        display: inline-block;
      }
    </style>
  </head>
  <body>
    <div class="contianer">
      <h1>Simple Calculate</h1>
      <!-- start form for submit info -->
      <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="number" name="num1" placeholder="Enter A Number "> <br>
        <input type="number" name="num2" placeholder="Enter A Number Too "><br>
        <!-- Here I Used The Button Element Instead OF select Element it's more readable than select  -->
        <button type="submit" name="operator" value="ADD">ADD +</button>
        <button type="submit" name="operator" value="SUB">SUB -</button>
        <button type="submit" name="operator" value="MULTI">MULTI *</button>
        <button type="submit" name="operator" value="DIVI ">DIVI /</button>

        <!-- here i disable the select Element because i got the button more readable -->
        <!-- <select 4 class="" name="operator">
          <option value="none">None</option>
          <option value="add">+</option>
          <option value="sub">-</option>
          <option value="mul">*</option>
          <option value="divi">/</option>
        </select> -->
        <br>
      </form>
      <!-- End Form  -->
      <!-- start  Element For Result  -->

      <p >
        <?php
      //  check if set the variable of $finalResult
        if (isset($finalResult)) {
          echo $finalResult;
        }
         ?>
      </p>
      <!-- End Element For Result  -->
    </div>
  </body>
</html>
