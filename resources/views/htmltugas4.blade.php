<!DOCTYPE html>
<html lang="en">

<head>
    <title>Javascript Chamdana Taqie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function facto(n) {
            if (n == 1)
                return 1;

            else
                return n * facto(n - 1);

        }
    </script>

</head>

<body>
    <div class="container-fluid-sm">
        <div class="text-center mb-4">
            <h3>Factorial Calculator</h3>
        </div>
        <form method="GET" action="">
            <div id="outer" class="form-group">
                <label for="inputNumber">Enter a number: </label>
                <input type="number" class="form-control" id="inputNumber" name="inputNumber"><br>
                <div class="text-center mb-4">
                    <input type="button" class="btn btn-primary" id="resultButton" value="Result" onclick="facto();">
                </div>
                <div id="calculate">
                    <script>
                        $(document).ready(
                            function () {
                                $("#resultButton").click(
                                    function () {
                                        let n = $("#inputNumber").val();
                                        $("#calculate").html(facto(n));
                                    }
                                );
                            }
                        );
                    </script>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
