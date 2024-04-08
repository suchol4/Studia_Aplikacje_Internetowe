<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator Bankowy</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/chroniona_strona.php" class="pure-button">Chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>
    
<!--<form action=/app/bankowy_calc.php" method="post">
	<label for="id_kwota">Kwota kredytu: </label>
	<input class="input" id="id_kwota" type="text" name="kwota" /><br />
	<label for="id_lata">Lata kredytowania: </label>
	<input class="input" id="id_lata" type="text" name="lata" /><br />
	<label for="id_y">Oprocentowanie: </label>
	<input class="input" id="id_procent" type="text" name="procent" /><br />
	<input class="test" type="submit" value="Oblicz ratę kredytu" />
</form>	-->
        
        
 <form  class="pure-form pure-form-aligned" action="<?php print(_APP_URL);?>/app/bankowy_calc.php" method="post">
    <fieldset>
        <div class="pure-control-group">
            <label for="id_kwota">Kwota kredytu: </label>
            <input type="text" id="id_kwota" placeholder="kwota" name="kwota" value="<?php out($amunt) ?>" />
<!--            <span class="pure-form-message-inline">This is a required field.</span>-->
        </div>
        <div class="pure-control-group">
            <label for="id_lata">Lata kredytowania:</label>
            <input type="text" id="id_lata" placeholder="lata" name="lata" value="<?php out($years) ?>" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-email">Oprocentowanie</label>
            <input type="text" id="id_procent" placeholder="oprocentowanie" name="procent" value="<?php out($rate) ?>" />
        </div>
        <div class="pure-control-group button-container">
<!--            <button type="submit" class="pure-button pure-button-primary">Oblicz</button>-->
            <button type="submit" class="button-success pure-button">Oblicz</button>
        </div>
    </fieldset>
</form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata kredytu wyniesie: '.$result.' zł'; ?>
</div>
<?php } ?>

</body>


<style>
    .button-container {
        display: flex;
        justify-content: center; /* Wyśrodkowanie w poziomie */
    }
    
    .button-success {
            background: rgb(28, 184, 65);
        }

    body {
	width: 400px;
    }

    .test{
  	border: 5px solid;
  	padding: 10px;
	}
        
</style>

</html>