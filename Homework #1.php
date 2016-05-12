<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8" />
	</head>
	<body>
<form method="post" action="">
	<div>
		<label>
	Nimi <em><abbr title= "kohustuslik väli">*</abbr></em><input type="text" name="nimi" required="required" size="50" maxlength="100" />
		</label>
	</div>
	<div>
		<label>
	Sisesta e-post<em><abbr title= "kohustuslik väli">*</abbr></em><input type="email" name="email" required="required"  />
		</label>
	</div>

	<legend>Vali paasme tyyp</legend>

	<div>
		<label>
		pressipaase<input type="radio" name="prod" value="1"/>
		</label>
			<label>
		VIP paase<input type="radio" name="prod" value="1"/>
		</label>
		<label>
		korraldaja paase<input type="radio" name="prod" value="1"/>
		</label>
	</div>

    	<div>
		<label>
	<input type= "submit" name="Saada tellimus" value="Saada tellimus" />
		</label>
	</div>

</form>
</body>
</html>
