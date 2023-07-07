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
        <input type="checkbox" name="checkbox1" id="checkbox1" onchange="toggleCheckboxes('checkbox1', ['checkbox2', 'checkbox3'])"> Checkbox 1<br>
    </form>

    <div id="checkboxContainer"></div>

    <script>
        function toggleCheckboxes(sourceCheckboxId, targetCheckboxIds) {
            var sourceCheckbox = document.getElementById(sourceCheckboxId);
            var checkboxContainer = document.getElementById('checkboxContainer');

            checkboxContainer.innerHTML = '';

            if (sourceCheckbox.checked) {
                for (var i = 0; i < targetCheckboxIds.length; i++) {
                    var targetCheckboxId = targetCheckboxIds[i];

                    var newCheckbox = document.createElement('input');
                    newCheckbox.type = 'checkbox';
                    newCheckbox.name = targetCheckboxId;
                    newCheckbox.id = targetCheckboxId;
                    newCheckbox.value = '1';
                    newCheckbox.onchange = function() {
                        // Aqui você pode adicionar qualquer lógica adicional quando as checkboxes forem alteradas
                    };

                    var label = document.createElement('label');
                    label.innerHTML = targetCheckboxId.charAt(0).toUpperCase() + targetCheckboxId.slice(1);  // Converte a primeira letra para maiúscula

                    checkboxContainer.appendChild(newCheckbox);
                    checkboxContainer.appendChild(label);
                    checkboxContainer.appendChild(document.createElement('br'));
                }
            }
        }
    </script>
</body>
</html>
