<!DOCTYPE html>
<html>
<head>
<title>My calendar</title>
</head>
<body>
    <h3>Welcome to the calendar</h3>
    <img width="200px" src="https://blog.drupa.com/wp-content/uploads/2015/11/Calendar-1000x605.jpg">
    <p>
        <a href="/practice_9/month">Month</a>
        <a href="/practice_9/day">Day</a>
    </p>
    <br>
    <?php
    if (isset($_SERVER['PATH_INFO'])) {
        
        switch ($_SERVER['PATH_INFO']) {
            case '/month':
                require_once('month.php');
                break;
            case '/day':
                require_once('day.php');
                break;
        }
    }




?>
</body>
</html>

















