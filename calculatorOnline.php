<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
<input type="number" id="angka1">
<select id ="operand">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
</select>
<input type="number" id ="angka2">
<input type="button" id ="samadengan" value="=">
<label id = "hasil"></label>

<script type="text/javascript">
$('#samadengan').on('click',function(){
    var angka1 = parseInt($('#angka1').val());
    var angka2 = parseInt($('#angka2').val());
    var operand = $('#operand').val();

    $.post('ajax_calculator.php',{angka1: angka1, angka2: angka2}).done(function(){
        if(operand == "+"){
            var total = angka1 + angka2;
        }
        else if(operand == "-"){
            var total = angka1 - angka2;
        }
        else if(operand == "*"){
            var total = angka1 * angka2;
        }
        else if(operand == "/"){
            var total = angka1 / angka2;
        }
        $('#hasil').html(total);
    });
})
</script>
</body>
</html>