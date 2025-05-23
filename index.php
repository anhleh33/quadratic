<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
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
        <div class="container">
            <img src="img/cat.gif" id="cat" class="cat-animation">
            <img src="img/ribbon.png" alt="" class="ribbon">
            <img src="img/ughblink.gif" alt="" class="ughblink">
            <h1>Quadratic Equation</h1>
            <form action="result.php" method="POST">
                <label>a = </label><input type="number" name="a" class="inp" placeholder="✨ Type number a! ✨" required><br>
                <label>b = </label><input type="number" name="b" class="inp" placeholder="✨ Type number b! ✨" required><br>
                <label>c = </label><input type="number" name="c" class="inp" placeholder="✨ Type number c! ✨" required><br>
                <button >Calculate</button>
            </form>
        </div>
    </div>
    <footer class="">
        <p class="footer-text">© 2025 Anh Le Hoang | Ho Chi Minh City University of Education</p>
    </footer>

    <script>
        const cat = document.getElementById("cat");
        const container = document.querySelector(".wrapper");

        function moveCatRandomly() {
            const formRect = container.getBoundingClientRect();
            const margin = 30;

            const minX = formRect.left - margin;
            const maxX = formRect.right - cat.offsetWidth + margin;
            const minY = formRect.top - margin;
            const maxY = formRect.bottom - cat.offsetHeight + margin;

            const randomX = Math.random() * (maxX - minX) + minX;
            const randomY = Math.random() * (maxY - minY) + minY;

            cat.style.left = `${randomX}px`;
            cat.style.top = `${randomY}px`;
        }

        setInterval(moveCatRandomly, 4000);
    </script>

</body>

</html>