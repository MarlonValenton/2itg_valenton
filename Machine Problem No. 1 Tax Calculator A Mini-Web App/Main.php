<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <title>Tax Calculator - PHP</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>

    <?php
        // Check if the "Calculate" button was pressed, then get the data from inputs
		error_reporting(E_ERROR | E_PARSE);
		$biAnnual=(float) ($_POST['monetaryAmmount'] * 24);
		$biSalary = (float) $_POST['monetaryAmmount'];
		$biAnnualPay = (float) ($_POST['monetaryAmmount'] * 24);
		$annualPay = $annualTax = (float) ($_POST['monetaryAmmount'] * 12);
		$annualTax = (float) ($_POST['monetaryAmmount'] - 250000) * 0.2;;
		$operator = $_POST['operator'];
		$salary = (float) $_POST['monetaryAmmount'];
		$annualTax =(float) $_POST['monetaryAmmount'];;
        $monthlyTax = 0;
        $finalAmount = 0;
		$monetaryAmmount = (float) $_POST['monetaryAmmount'];
		$biAnnualTax = 0;
		?>
		
		 <?php
		 //switch cases for computing either monthly or bi-monthly
		switch ($operator) {
        case "Monthly":
		$monetaryAmmount = (float) $_POST['monetaryAmmount'] * 12;
		if ($monetaryAmmount<250000) {
			$annualTax = (float) ($monetaryAmmount * 0);
			$salary = (float) $_POST['monetaryAmmount'];
			$monthlyTax = (float) round(($annualTax / 12),2);
			$biAnnualPay=0;
			$biSalary=0;
			break;
		}
		else if ($monetaryAmmount>250000 && $monetaryAmmount<400000) {
			$biAnnualPay=0;
			$biSalary=0;
            $annualTax = (float) ($monetaryAmmount - 250000) * 0.2;
			$monthlyTax = (float) round(($annualTax / 12),2);
			$salary = (float) $_POST['monetaryAmmount'];
			break;
        }
		
		else if ($monetaryAmmount>400000 && $monetaryAmmount<800000) {
			$biAnnualPay=0;
			$biSalary=0;			
            $annualTax = (float) round((($monetaryAmmount - 400000) * 0.25) + 30000,2);
			$salary = (float) $_POST['monetaryAmmount'];
			$monthlyTax = (float) round(($annualTax / 12),2);

break;
            
        }
		else if ($monetaryAmmount>800000 && $monetaryAmmount<2000000) {
			$biAnnualPay=0;
			$biSalary=0;			
           $annualTax = (float) round((($monetaryAmmount - 800000) * 0.30) + 130000,2);
			$salary = (float) $_POST['monetaryAmmount'];
			$monthlyTax = (float) round(($annualTax / 12),2);

break;
            
        }
		else if ($monetaryAmmount>2000000 && $monetaryAmmount<8000000) {
			$biAnnualPay=0;
			$biSalary=0;			
            $annualTax = (float) round((($monetaryAmmount - 2000000) * 0.32) + 490000,2);
			$salary = (float) $_POST['monetaryAmmount'];
			$monthlyTax = (float) round(($annualTax / 12),2);

break;
        }

		//2nd case
 
		$monetaryAmmount = (float) $_POST['monetaryAmmount'] * 24;
        case "Bi-Monthly":
		    if ($biAnnual<250000){
			$biAnnualPay = (float) round(($_POST['monetaryAmmount'] * 24),2);
			$biAnnualTax = (float) ($biAnnual * 0);
			$bisalary = (float) $_POST['monetaryAmmount'];
			$finalAmount = (float) round(($biAnnualTax / 12),2);
			$salary=0;
			$annualPay =0;
			$annualTax=0;
			break;
			}				
		else if ($biAnnual>250000 && $biAnnual<400000) {
			$biAnnualPay = (float) round(($_POST['monetaryAmmount'] * 24),2);
			$biAnnualTax = (float) round((($biAnnual - 250000) * 0.2),2);
			$bisalary = (float) $_POST['monetaryAmmount'];
			$finalAmount = (float) round(($biAnnualTax / 12),2);
			$salary=0;
			$annualPay =0;
			$annualTax=0;
			break;
        } 
		else if ($biAnnual>400000 && $biAnnual<800000) {
			$biAnnualPay = (float) round(($_POST['monetaryAmmount'] * 24),2);
            $biAnnualPay = (float) round((($biAnnual - 400000) * 0.25) + 30000,2);
			$bisalary = (float) $_POST['monetaryAmmount'];
			$finalAmount = (float) round(($biAnnualTax / 12),2);
			$salary=0;
			$annualPay =0;
			$annualTax=0;
            break;
        }
		else if ($biAnnual>800000 && $biAnnual<2000000) {
			$biAnnualPay = (float) round(($_POST['monetaryAmmount'] * 24),2);
           $biAnnualPay = (float) round((($biAnnual - 800000) * 0.30) + 130000,2);
			$bisalary = (float) $_POST['monetaryAmmount'];
			$finalAmount = (float) round(($biAnnualTax / 12),2);
			$salary=0;
			$annualPay =0;
			$annualTax=0;
break;
            
        }
		else if ($biAnnual>2000000 && $biAnnual<8000000) {
            $biAnnualPay = (float) round(($_POST['monetaryAmmount'] * 24),2);
			$biAnnualTax = (float) round((($biAnnual - 2000000) * 0.32) + 490000,2);
			$bisalary = (float) $_POST['monetaryAmmount'];
			$finalAmount = (float) round(($biAnnualTax / 12),2);
			$salary=0;
			$annualPay =0;
			$annualTax=0;
break;
            
        }
		else if ($biAnnual>8000000) {
            $biAnnualPay = (float) round(($_POST['monetaryAmmount'] * 24),2);
			$biAnnualTax = (float) round((($biAnnual - 8000000) * 0.35) + 2410000,2);
			$bisalary = (float) $_POST['monetaryAmmount'];
			$finalAmount = (float) round(($biAnnualTax / 12),2);
			$salary=0;
			$annualPay =0;
			$annualTax=0;
            break;
        }

    }
		
        ?>
		
    
<!-----FORMS SECTION-------->
    <div class="content">
        <h1>Tax Calculator </h1>
        <form action="" method="POST" id="myForm">
            <label for="monetary">Monthly Salary</label>
            <br>
            <input type="number" id="monetaryAmmount" name="monetaryAmmount" 
            value="<?=0?>" required pattern="[0-9]" step="0.01" min="0">
            <br>
			<label><b>Payment Type:</b></label><br>
            <input type="radio" name="operator" value="Monthly" id="monthBtn">
			 <label for="monthBtn">Monthly</label>
			<input type="radio" name="operator" value="Bi-Monthly" id="biMonthBtn">
			 <label for="biMonthBtn">Bi-Monthly</label>
			<input type="Submit" value="Calculate" id="calculateBtn">
			 <input type="reset" id="calculateBtn">
        </form>
		
        <div id="summary">
		     <p>Monthly Salary: ₱
             <span id="taxAmmount">
               <?=$salary?>
               </span>
            </p>
            <p>Annual Salary: ₱
                <span id="taxAmmount">
                    <?=$annualPay?>
                </span>
            </p>
						<p>Est. Annual Tax: ₱
                <span id="taxAmmount">
                    <?=$annualTax ?>
                </span>
            </p>
						<p>Est. Monthly Tax: ₱
                <span id="taxAmmount">
                    <?=$monthlyTax ?>
                </span>
            </p>
			<br>
			<p> Bi-Monthly Salary: ₱
             <span id="taxAmmount">
               <?=$biSalary?>
               </span>
            </p>
            <p>Annual Salary: ₱
                <span id="taxAmmount">
                    <?=$biAnnualPay?>
                </span>
            </p>
			<p>Est. Bi-Monthly Annual Tax: ₱
                <span id="taxAmmount">
                    <?=$biAnnualTax ?>
                </span>
            </p>
			
            <p>Est. Bi-Monthly Tax: ₱
                <span id="finalAmmount">
                    <?=$finalAmount ?> 
                </span>
            </p>

        </div>
    </div>
</body>
</html>