<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<?php 
        $score = 0;
		if($_POST['a1'] == 1) { 
		$score++;
		}
		if($_POST['a2'] == 1) { 
		$score++;
		}
		if($_POST['a3'] == 1) {
		$score++;
        }
        if($_POST['a4'] == 1) { 
        $score++;
        }
            $score = $score	/ 4 *100;
        
        echo'Thanks for completing the exam ';
        echo'Your score is '.$score.'%';
?>
</body>

</html>