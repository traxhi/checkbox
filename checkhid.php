<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="checkbox" name="checkbox1" id="checkbox1" onchange="toggleTextField('checkbox1', 'text1')"> Checkbox 1<br>
        <input type="checkbox" name="checkbox2" id="checkbox2" onchange="toggleTextField('checkbox2', 'text2')"> Checkbox 2<br>
        <input type="checkbox" name="checkbox3" id="checkbox3" onchange="toggleTextField('checkbox3', 'text3')"> Checkbox 3<br>
    </form>

    <input type="checkbox" name="text1" id="text1" style="display: none;"><br>
    <input type="checkbox" name="text2" id="text2" style="display: none;"><br>
    <input type="checkbox" name="text3" id="text3" style="display: none;"><br>

    <script>
        function toggleTextField(checkboxId, textFieldId) {
            var checkbox = document.getElementById(checkboxId);
            var textField = document.getElementById(textFieldId);

            if (checkbox.checked) {
                textField.style.display = "block";
            } else {
                textField.style.display = "none";
            }
        }
    </script>
</body>
</html>
