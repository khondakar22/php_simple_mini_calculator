<html !DOCTYPE>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="post">

            <table>
                <tr>
                    <td> First Number </td>

                    <td><input type="text" name="first_number" value="<?php
                        if (isset($_POST['btn'])) {
                            echo $_POST['first_number'];
                        }
                        ?>"></td>

                </tr>

                <tr>
                    <td> Second Number </td>

                    <td><input type="text" name="second_number" value="<?php
                        if (isset($_POST['btn'])) {
                            echo $_POST['second_number'];
                        }
                        ?>" ></td>

                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="btn" value="+">
                        <input type="submit" name="btn" value="-">
                        <input type="submit" name="btn" value="/">
                        <input type="submit" name="btn" value="*">
                        <input type="submit" name="btn" value="%">
                    </td>

                </tr>
<?php
                        if (isset($_POST['btn'])) {
                            if ($_POST['btn'] == '+') {
                                $result=$_POST['first_number'] + $_POST['second_number'];
                            } elseif ($_POST['btn'] == '-') {
                                $result= $_POST['first_number'] - $_POST['second_number'];
                            } elseif ($_POST['btn'] == '/') {
                                if ($_POST['second_number'] == 0) {
                                    $result='Undefine';
                                } else {
                                    $result=$_POST['first_number'] / $_POST['second_number'];
                                }
                            } elseif ($_POST['btn'] == '*') {
                                $result=$_POST['first_number'] * $_POST['second_number'];
                            } else {
                                if ($_POST['second_number'] == 0) {
                                    $result='Undefine';
                                } else {
                                    $result=$_POST['first_number'] % $_POST['second_number'];
                                }
                            }
                        }
                        ?>
                <tr>
                    <td>Result</td>
                    <td><?php echo $result;?>  </td>
                </tr>


                
                


            </table>


        </form>

    </body>

</html>