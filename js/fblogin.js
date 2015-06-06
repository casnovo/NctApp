window.fbAsyncInit = function () {
    FB.init({
        appId: '813648275371754', // App ID
        channelUrl: 'localhost', // Channel File
        oauth: true,
        status: true, // check login status
        cookie: true, // enable cookies to allow the server to access the session
        xfbml: true  // parse XFBML
    });

    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') { // connected
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;

            FB.api('/me', function (response) {

                id = response.id;
                var fbname = response.name;
                $('.fbuser').html(fbname);
                $('.user-header').html("<img src='http://graph.facebook.com/" + uid + "/picture?type=large' class='img-circle' alt='User Image' />" + "<p>" + fbname + "</p>")
                $('#dropmanu').html("<img src='http://graph.facebook.com/" + uid + "/picture' class='user-image' alt='User Image' />" + "<span  class='hidden-xs'></span>")
                document.getElementById("picuser").innerHTML = "<img src='http://graph.facebook.com/" + uid + "/picture' class='img-circle' alt='User Image' />";

            });
        } else if (response.status === 'not_authorized') {    // not_authorized
            window.location = "login.html"
            fb_login();
        } else { // not_logged_in
            window.location = "login.html"
            fb_login();
        }
    });

};

function fb_logout() {
    FB.logout(function (response) {
        window.location = 'login.html';
    });
}