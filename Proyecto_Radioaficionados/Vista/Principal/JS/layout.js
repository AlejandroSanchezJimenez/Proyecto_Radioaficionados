window.onload = function () {
    var login = document.getElementById('login');
    var logo = document.getElementById('logo');

    login.onclick=function(){
        window.location.href = '../Login/login.php';
    }

    logo.onclick=function(){
        window.location.reload();
    }
    
}