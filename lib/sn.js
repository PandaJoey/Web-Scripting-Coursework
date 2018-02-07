/**
 * Created by Joey on 13/11/2015.
 */




loadXHR = function (ob) {
    //start a XHR
    var xhr = new XMLHttpRequest();

    //open a XHR
    xhr.open(ob.method, "api/" + ob.url, true);

    //set request header for XHR
    xhr.setRequestHeader("Accept", "application/json");

    //checks if there is query to send to payload and checks its not sending a file
    if (ob.query && ob.data != "file") {
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    }

    //add listener for it
    xhr.addEventListener("load", function () {
        ob.load(JSON.parse(this.responseText));
    });

    //add listener for when XHR has a error
    xhr.addEventListener("error", function () {
        renderError(JSON.parse(this.responseText));
    });

    //send payload if any
    xhr.send(ob.query);
};
function createProfileSubmit(createProfile) {
    var createProfileData = {};
    var userName = document.getElementById("userName").value;
    var youtube = document.getElementById("youtube").value;
    var twitch = document.getElementById("twitch").value;
    var instagram = document.getElementById("instagram").value;
    var voiceCommsIP = document.getElementById("voiceCommsIP").value;
    var profileInfo = document.getElementById('profileInfo').value;
    console.log(createProfileData);
    // loadXMLDoc("api/users.php", "POST", createProfileData);

    loadXHR({"method": "POST", "url": "users.php", "query": "userName=" + userName + "&youtube=" + youtube + "&twitch=" + twitch + "&instagram=" + instagram + "&voiceCommsIP=" + voiceCommsIP + "&profileInfo=" + profileInfo , "load": profileCreated});
    return false;
}
function profileCreated(result){
    window.location.href = "profile.html?userId=" + result;
}
function returnProfile(result){
    //result is the returned Data from the database.
    console.log(result);
    document.getElementById("profileUserName").innerHTML = result.userName;
}
function getProfile(){
    //load a loading gif.
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)", "i"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    var userId = getParameterByName('userId');
    // var x = loadXMLDoc("api/users.php?userId=" + userId, "GET");
    loadXHR( {"method": "GET",
        "url": "users.php?userId=" + userId,
        "load": returnProfile});
}
function createGroupSubmit() {
    var createGroupData = {};
    createGroupData["groupName"] = document.getElementById("groupName").value;
    createGroupData["groupInfo"] = document.getElementById('groupInfo').value;
    //createGroupData["groupPic"] = document.getElementById("groupPicture").value;
    console.log(createGroupData);
    loadXMLDoc(createGroupData);
    return false;
}


function createGamerProfile() {
    // create a new div element
    // and give it some content


    var createDiv, profileName, p, profilePicture, twitchButton, youtubeButton, instagramButtom
        , joinGame, chatButton, a, b, c, d, p2, profiles;

    createDiv = document.createElement("div");
    createDiv.setAttribute("class", "profile");
    profiles = document.getElementById("profiles");
    profiles.appendChild(createDiv);
    a = document.createElement("a");
    b = document.createElement("a");
    c = document.createElement("a");
    d = document.createElement("a");

    createDiv.addEventListener("click", function () {
        profileClicked(createDiv)
    }, false);


    // creates profile pictures
    profilePicture = document.createElement("img");
    profilePicture.setAttribute("src", "http://www.sohobarpalma.com/images/juegos_soho/snes-logo.jpg");
    profilePicture.setAttribute("height", "50");
    profilePicture.setAttribute("width", "75");
    createDiv.appendChild(profilePicture);

    // creates profile names
    profileName = document.createElement("h2");
    profileName.appendChild(document.createTextNode("Player Name"));
    d.setAttribute("href", "profile.html");
    d.appendChild(profileName);
    createDiv.appendChild(profileName);
    createDiv.appendChild(d);

    //creates paragraphs
    p = document.createElement("p");
    p.appendChild(document.createTextNode(" "));
    p.appendChild(document.createTextNode("Hello Generic Info About gamer, I like games and stuff innt."));
    p.style.fontSize = "12px";
    createDiv.appendChild(p);

    //creates twitch button stuff
    twitchButton = document.createElement("img");
    twitchButton.setAttribute("src", "lib/twitch.png");
    twitchButton.setAttribute("height", "30");
    twitchButton.setAttribute("height", "30");
    createDiv.appendChild(twitchButton);
    a.setAttribute("href", "http://www.twitch.tv");
    a.appendChild(twitchButton);
    createDiv.appendChild(a);

    //creates youtube button stuff
    youtubeButton = document.createElement("img");
    youtubeButton.setAttribute("src", "lib/YouTube-logo-full_color.png");
    youtubeButton.setAttribute("height", "30");
    youtubeButton.setAttribute("height", "30");
    createDiv.appendChild(youtubeButton);
    b.setAttribute("href", "http://www.youtube.com");
    b.appendChild(youtubeButton);
    createDiv.appendChild(b);

    //creates instagram button stuff
    instagramButtom = document.createElement("img");
    instagramButtom.setAttribute("src", "lib/Multi-Color_Logo_thumbnail200.png");
    instagramButtom.setAttribute("height", "30");
    instagramButtom.setAttribute("height", "30");
    createDiv.appendChild(instagramButtom);
    c.setAttribute("href", "http://www.instagram.com");
    c.appendChild(instagramButtom);
    createDiv.appendChild(c);

    //creates another paragraph
    p2 = document.createElement("p");
    createDiv.appendChild(p2);

    //creates join game button stuff
    joinGame = document.createElement("BUTTON");
    joinGame.style.backgroundColor = "#51a9fa";
    joinGame.style.height = "30px";
    joinGame.style.width = "100px";
    joinGame.appendChild(document.createTextNode("Join Game"));
    createDiv.appendChild(joinGame);

    //creates chatbutton stuff
    chatButton = document.createElement("BUTTON");
    chatButton.style.backgroundColor = "#51a9fa";
    chatButton.style.height = "30px";
    chatButton.style.width = "100px";
    chatButton.appendChild(document.createTextNode("Chat"));
    createDiv.appendChild(chatButton);


    // add the newly created element and its content into the DOM

    //need to figure out how to make a work


}



function profileClicked(createDiv) {

    createDiv.style.height = "500px";
    createDiv.style.width = "750px";

}

// mioght use this for profiles think its a bad idea

// document.body.onload = getProfileInfo();
// function getProfileInfo(createDiv, profileName, p, profilePicture, twitchButton, youtubeButton, instagramButtom
//     , joinGame, chatButton, a, b, c, d, p2, profiles) {
//
//
//     createDiv = document.createElement("div");
//     createDiv.setAttribute("class", "userProfile");
//     profiles = document.getElementById("createProfile");
//     profiles.appendChild(createDiv);
//     a = document.createElement("a");
//     b = document.createElement("a");
//     c = document.createElement("a");
//     d = document.createElement("a");
//
//     // creates profile pictures
//     profilePicture = document.createElement("img");
//     profilePicture.setAttribute("src", "http://www.sohobarpalma.com/images/juegos_soho/snes-logo.jpg");
//     profilePicture.setAttribute("height", "10%");
//     profilePicture.setAttribute("width", "15%");
//     createDiv.appendChild(profilePicture);
//
//     // creates profile names
//     profileName = document.createElement("h2");
//     profileName.setAttribute("height", "10%")
//     profileName.setAttribute("width", "15%")
//     profileName.appendChild(document.createTextNode("Player Name"));
//     d.setAttribute("href", "profile.html");
//     d.appendChild(profileName);
//     createDiv.appendChild(profileName);
//     createDiv.appendChild(d);
//
//     //creates paragraphs
//     p = document.createElement("p");
//     p.appendChild(document.createTextNode(" "));
//     p.appendChild(document.createTextNode("Hello Generic Info About gamer, I like games and stuff innt."));
//     p.style.fontSize = "12px";
//     createDiv.appendChild(p);
//
//     //creates twitch button stuff
//     twitchButton = document.createElement("img");
//     twitchButton.setAttribute("src", "lib/twitch.png");
//     twitchButton.setAttribute("height", "30");
//     twitchButton.setAttribute("height", "30");
//     createDiv.appendChild(twitchButton);
//     a.setAttribute("href", "http://www.twitch.tv");
//     a.appendChild(twitchButton);
//     createDiv.appendChild(a);
//
//     //creates youtube button stuff
//     youtubeButton = document.createElement("img");
//     youtubeButton.setAttribute("src", "lib/YouTube-logo-full_color.png");
//     youtubeButton.setAttribute("height", "30");
//     youtubeButton.setAttribute("height", "30");
//     createDiv.appendChild(youtubeButton);
//     b.setAttribute("href", "http://www.youtube.com");
//     b.appendChild(youtubeButton);
//     createDiv.appendChild(b);
//
//     //creates instagram button stuff
//     instagramButtom = document.createElement("img");
//     instagramButtom.setAttribute("src", "lib/Multi-Color_Logo_thumbnail200.png");
//     instagramButtom.setAttribute("height", "30");
//     instagramButtom.setAttribute("height", "30");
//     createDiv.appendChild(instagramButtom);
//     c.setAttribute("href", "http://www.instagram.com");
//     c.appendChild(instagramButtom);
//     createDiv.appendChild(c);
//
//     //creates another paragraph
//     p2 = document.createElement("p");
//     createDiv.appendChild(p2);
//
//     //creates join game button stuff
//     joinGame = document.createElement("BUTTON");
//     joinGame.style.backgroundColor = "#51a9fa";
//     joinGame.style.height = "30px";
//     joinGame.style.width = "100px";
//     joinGame.appendChild(document.createTextNode("Join Game"));
//     createDiv.appendChild(joinGame);
//
//     //creates chatbutton stuff
//     chatButton = document.createElement("BUTTON");
//     chatButton.style.backgroundColor = "#51a9fa";
//     chatButton.style.height = "30px";
//     chatButton.style.width = "100px";
//     chatButton.appendChild(document.createTextNode("Chat"));
//     createDiv.appendChild(chatButton);
//
//
//     // add the newly created element and its content into the DOM
//
//     //need to figure out how to make a work
//
// }

//when user clicks on a profile

// on js make a loop like this
// var i;
// if (data.rows && data.rows.length > 0) {
//     for (i = 0; i < data.rows.length; i++) {
//         if (data.rows.hasOwnProperty(i)) {
//             (what ever you want to do, like make a p tag and display usernnae)
//         }
//     }
// }

