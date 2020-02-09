<?php

    $rssfeed = '<?xml version="1.0" encoding="UTF-8"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';

    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820681") or die(mysqli_error($connect));

    $sql1 = "SELECT * FROM tblromance";
    $query1 = mysqli_query($connect,$sql1) or die (mysqli_error($connect));

    while($row1=mysqli_fetch_assoc($query1)) {
        extract($row1);

        $rssfeed .= '<romance>';
        $rssfeed .= '<Title>' . $Title . '</Title>';
        $rssfeed .= '<Author>' . $Author . '</Author>';
        $rssfeed .= '<Date>' . $Date . '</Date>';
        $rssfeed .= '<Description>' . $Description . '</Description>';
        $rssfeed .= '</romance>';
    }

    $sql2 = "SELECT * FROM tblactionandadventure";
    $query2 = mysqli_query($connect,$sql2) or die (mysqli_error($connect));

    while($row2=mysqli_fetch_assoc($query2)) {
        extract($row2);

        $rssfeed .= '<actionandadventure>';
        $rssfeed .= '<Title>' . $Title . '</Title>';
        $rssfeed .= '<Author>' . $Author . '</Author>';
        $rssfeed .= '<Date>' . $Date . '</Date>';
        $rssfeed .= '<Description>' . $Description . '</Description>';
        $rssfeed .= '</actionandadventure>';
    }

    $sql3 = "SELECT * FROM tblcomedy";
    $query3 = mysqli_query($connect,$sql3) or die (mysqli_error($connect));

    while($row3=mysqli_fetch_assoc($query3)) {
        extract($row3);

        $rssfeed .= '<comedy>';
        $rssfeed .= '<Title>' . $Title . '</Title>';
        $rssfeed .= '<Author>' . $Author . '</Author>';
        $rssfeed .= '<Date>' . $Date . '</Date>';
        $rssfeed .= '<Description>' . $Description . '</Description>';
        $rssfeed .= '</comedy>';
    }

    $sql4 = "SELECT * FROM tblthriller";
    $query4 = mysqli_query($connect,$sql4) or die (mysqli_error($connect));

    while($row4=mysqli_fetch_assoc($query4)) {
        extract($row4);

        $rssfeed .= '<thriller>';
        $rssfeed .= '<Title>' . $Title . '</Title>';
        $rssfeed .= '<Author>' . $Author . '</Author>';
        $rssfeed .= '<Date>' . $Date . '</Date>';
        $rssfeed .= '<Description>' . $Description . '</Description>';
        $rssfeed .= '</thriller>';
    }

    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>
