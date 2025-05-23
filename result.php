<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1 - Result</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Press+Start+2P&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="wrapper">
        <div class="result-container">
            <?php
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            function ptBac2($a, $b, $c)
            {
                if (!isset($a) || $a == NULL) {
                    return "a can't be blank";
                } else {
                    if (!isset($b) || $b == NULL) {
                        return "b can't be blank";
                    } else {
                        if (!isset($c) || $c == NULL) {
                            return "c can't be blank";
                        } else {
                            if ($a == 0) {
                                if ($b == 0) {
                                    return ($c == 0) ? "The equation has infinitely many solutions" : "The equation has no solution";
                                } else {
                                    return "The equation has one solutions: x = " . (-$c / $b);
                                }
                            }

                            $delta = $b * $b - 4 * $a * $c;

                            if ($delta > 0) {
                                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                                return "The equation has two solutions: x1 = $x1, x2 = $x2";
                            } elseif ($delta == 0) {
                                $x = -$b / (2 * $a);
                                return "Equations with double solutions: x = $x";
                            } else {
                                return "The equation has no solution";
                            }
                        }
                    }
                }
            }

            function getEquation($a, $b, $c)
            {
                $equation = "";

                // Xử lý hệ số a
                if ($a == 0) {
                    $equation .= "";
                } elseif ($a == 1) {
                    $equation .= "x²";
                } elseif ($a == -1) {
                    $equation .= "-x²";
                } else {
                    $equation .= "{$a}x²";
                }

                // Xử lý hệ số b
                if ($b != 0) {
                    if ($b == 1) {
                        $equation .= ($a != 0 ? " + " : "") . "x";
                    } elseif ($b == -1) {
                        $equation .= " - x";
                    } else {
                        $equation .= ($b > 0 && $a != 0 ? " + " : ($b < 0 ? " - " : "")) . abs($b) . "x";
                    }
                }

                // Xử lý hệ số c
                if ($c != 0) {
                    $equation .= ($c > 0 && ($a != 0 || $b != 0) ? " + " : ($c < 0 ? " - " : "")) . abs($c);
                }

                // Trường hợp tất cả đều là 0
                if ($equation == "") {
                    $equation = "0";
                }
                return $equation . " = 0";
            }
            
            // Generate the equation
            $equation = getEquation($a, $b, $c);
            echo "<div class='equation'>$equation</div>";

            // Call the function to calculate results
            $result = ptBac2($a, $b, $c);
            echo "<div class='result'>$result</div>";
            ?>

        </div>
    </div>
    <footer class="footer">
        <img src="img/footer.gif" alt="">
        <p class="footer-text">© 2025 Anh Le Hoang | Ho Chi Minh City University of Education</p>
    </footer>
</body>

</html>