<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page2.css">
    <link rel="" href="telanDist.php">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body::before {
            content: "";
            position: absolute;
            height: 120%;
            width: 120%;
            top: 0px;
            left: 0px;
            z-index: -1;
            opacity: 1.2;
        }

        #states {
            margin-top: 100px;
        }

        #states ul {
            display: flex;
            justify-content: center;
        }

        #states ul li {
            display: flex;
            margin: 2rem;
        }

        #one {
            height: 250px;
            width: 350px;
            border: 2px solid black;
            border-radius: 20px;
            transition: all 0.5s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        #one:hover {
            cursor: pointer;
            height: 300px;
            width: 400px;

        }

        nav {
            display: flex;
            width: 100%;
            background: #0a5071;
            justify-content: space-between;
            text-align: center;
            padding: 15px 30px;
            position: fixed;
            z-index: 3;
            top: 0;
            left: 0;
            right: 0;

        }

        nav .icon {
            font-size: 35px;
            font-weight: 800;
            color: #fff;
            cursor: pointer;
        }

        nav ol {
            display: flex;
            list-style: none;
            margin: auto 0;
        }

        nav ol li {
            margin: 0 2px;
        }

        nav ol li a {
            color: #fff;
            font-size: 20px;
            text-decoration: none;
            text-transform: capitalize;
            letter-spacing: 1px;
            padding: 5px 10px;
        }

        nav ol li:hover a {
            background: #fff;
            color: #0a5071;
        }

        nav .search_box {
            display: flex;
            margin: auto 0;
            height: 35px;
            line-height: 35px;
        }

        nav .search_box input {
            border: none;
            outline: none;
            background: #fff;
            height: 100%;
            padding: 0 10px;
            font-size: 20px;
            width: 350px;

        }

        nav .search_box span {
            color: #0a5071;
            font-size: 20px;
            background: #fff;
            height: 100%;
            padding: 8px;
            position: relative;
            cursor: pointer;
            z-index: 1;
        }

        nav .search_box span:hover {
            color: #fff;
        }

        nav .search_box span::after {
            height: 100%;
            width: 0%;
            content: '';
            background: #ff003c;
            position: absolute;
            top: 0;
            right: 0;
            z-index: -1;
            transition: 0.3s;
        }

        nav .search_box span:hover::after {
            width: 100%;
        }
        #states h1{
            padding-left: 650px;
            color: #0a5071;
        }
    </style>
</head>

<body>
    <nav>
        <div class="icon">Health <b style="color: red;">C</b>are</div>
        <div class="search_box">
            <input type="search" placeholder="search here">
            <span class="fa fa-search"></span>
        </div>
        <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">about us</a></li>
            <li><a href="login.php">logout</a></li>
        </ol>
    </nav>
    <div id="states">
         <h1>Senior Citizens</h1>
        <ul>
            <li><a href="oschemes.php"><img id="one"
                        src="https://thumbs.dreamstime.com/b/schemes-complex-like-puzzle-pictured-as-word-schemes-puzzle-pieces-to-show-schemes-can-be-difficult-needs-164219495.jpg"
                        alt=""></a></li>
            <li><a href="osubsidies.php"><img id="one"
                        src="https://img.freepik.com/premium-photo/top-view-clockmagnifying-glass-banknotes-with-text-subsidy-puzzle-background_406607-1414.jpg?w=2000"
                        alt=""></a></li>
        </ul>
        <ul>
            <li><a href="oinsurance.php"><img id="one"
                        src="https://www.passionateinmarketing.com/wp-content/uploads/2021/11/insurance.jpg" alt=""></a>
            </li>
        </ul>
    </div>
</body>

</html>