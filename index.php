<!DOCTYPE html>
<html>
<head>
    <title>Test AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <button id="btn-tinh-tong">Tính tổng</button>
    <div id="result"></div>
    <script>
        $(document).ready(function() {
            $("#btn-tinh-tong").click(function() {
                $.ajax({
                    url: "tinh_tong.php",
                    dataType: "json",
                    success: function(data) {
                        $("#result").text("Kết quả là " + data.result);
                    }
                });
            });
        });
    </script>
</body>
</html>
