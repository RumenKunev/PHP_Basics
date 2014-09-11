<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CalculateInterest</title>
    <script>
        function removeBox(){
        document.getElementById('wrapper').removeChild('inputField');
        }
    </script>
</head>
<body>
<div id="wrapper">
    <div id="inputField">
    <input type="text" name="inputBox">
    <a href="javascript: removeBox()">Remove</a>
    </div>
</div>
</form>
</body>
</html>