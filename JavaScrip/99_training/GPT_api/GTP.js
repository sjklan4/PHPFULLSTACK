window.onload = function() {
    fetch('http://localhost/GTP.php') // PHP 파일 위치
    .then(response => response.json())
    .then(data => {
        document.getElementById('data-container').innerHTML = JSON.stringify(data);
    })
    .catch(error => console.error('Error:', error));
};