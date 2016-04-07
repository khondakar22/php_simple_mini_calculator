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

                <tr>
                    <td>Result</td>
                    <td> <?php
                        if (isset($_POST['btn'])) {
                            if ($_POST['btn'] == '+') {
                                echo $_POST['first_number'] + $_POST['second_number'];
                            } elseif ($_POST['btn'] == '-') {
                                echo $_POST['first_number'] - $_POST['second_number'];
                            } elseif ($_POST['btn'] == '/') {
                                if ($_POST['second_number'] == 0) {
                                    echo 'Undefine';
                                } else {
                                    echo $_POST['first_number'] / $_POST['second_number'];
                                }
                            } elseif ($_POST['btn'] == '*') {
                                echo $_POST['first_number'] * $_POST['second_number'];
                            } else {
                                if ($_POST['second_number'] == 0) {
                                    echo 'Undefine';
                                } else {
                                    echo $_POST['first_number'] % $_POST['second_number'];
                                }
                            }
                        }
                        ?> </td>
                </tr>


                
                


            </table>


        </form>

    </body>

</html>