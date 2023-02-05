<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>calculator : </title>
    <style>
        *{
            
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .flex{
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }
        .f{
            display: flex;
            justify-content: space-between;
            gap: 5px;
        }
        .wrap{
            display: grid;
            place-content: center;
            height: 100vh;
        }
        table{
            border-collapse: collapse;
            text-align: left;
        }
        th{
            padding: 20px;
        }
    </style>
</head>
<body>
   <!--      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <div class="wrap">
        <div class="flex">
            <?php
            if(isset($_POST['Add'])){
                extract($_POST);

                // $fnum = $_POST['fnum'];
                // $snum = $_POST['snum'];
                
                

                // echo "<label>Result : <input type='text' value='$res' ></label>";

                switch ($ch) {
                    case '+':
                        $res = $fnum + $snum;
                        break;
                    case '-':
                        $res = $fnum - $snum;
                        break;
                    case '*':
                        $res = $fnum * $snum;
                        break;
                    case '/':
                        $res = $fnum / $snum;
                        break;
                    default:
                        echo "<p style='color:red;font-size:50px'>error</p>";
                        break;
                }
            }
            
            
            ?>
            <label class="f">First Number  <input type="text" name="fnum" id=""></label><br>
            <label class="f">Second Number  <input type="text" name="snum" id=""></label><br>
            <input type="submit" value="Add" name="Add">
        </div>
    </div>
    </form>
    -->

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <div class="wrap">
        <table border="2" >
        <tr>
            <th>Your Result : </th>
            <th><input type="number" name="res" disabled readonly value="<?=$res?>"></th>
        </tr>
        <tr>
            <th>Enter First Number : </th>
            <th><input type="number" name="fnum"></th>
        </tr>
        <tr>
            <th>Enter Second Number : </th>
            <th><input type="number" name="snum"></th>
        </tr>
        <tr>
            <th> </th>
            <th><select name="ch" style="width:100%;">
            <option >+</option>
            <option >-</option>
            <option >*</option>
            <option >/ </option>
            </select></th>
        </tr>
        <tr>
        <th align="center" colspan="3"><input style="width: 100%; padding:10px 0;" type="submit" value="Show result" name="Add"></th>
        
        </tr>
        
        </table>
    </div>

    </form>


</body>
</html>