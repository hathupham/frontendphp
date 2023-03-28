<button id="generate-btn">Generate Password</button>

<script>
    document.getElementById('generate-btn').addEventListener('click', function() {
        // Gọi API từ backend
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Phân tích kết quả trả về
                    var data = JSON.parse(xhr.responseText);
                    var password = data['password'];
                    var message = data['message'];
                    
                    // Hiển thị kết quả
                    document.getElementById('result').innerHTML = 'Password: ' + password + '<br>' +
                                                                    'Message: ' + message;
                } else {
                    console.log('Error: ' + xhr.status);
                }
            }
        };
        xhr.open('GET', 'http://localhost/api/generate_password.php');
        xhr.send();
    });
</script>
