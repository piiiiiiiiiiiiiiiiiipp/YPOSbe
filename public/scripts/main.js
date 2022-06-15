//NavBar
function hideIconBar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:none;");
    navigation.classList.remove("hide");
}

function showIconBar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:block;");
    navigation.classList.add("hide");
}

//Comment
function showComment(){
    var commentArea = document.getElementById("comment-area");
    commentArea.classList.remove("hide");
}

//Reply
function showReply(){
    var replyArea = document.getElementById("reply-area");
    replyArea.classList.remove("hide");
}

//Newsletter

// import {auth, database} from "./firebase"; // when modules webpack will work
import { initializeApp }  from 'https://www.gstatic.com/firebasejs/9.6.11/firebase-app.scripts';
import {getDatabase, set, ref, child} from 'https://www.gstatic.com/firebasejs/9.6.11/firebase-database.scripts';

const firebaseConfig = {
    apiKey: "AIzaSyCpSieJLzWB-nkTFJX26vjaDZPoIvd5_lU",
    authDomain: "ypos-499a9.firebaseapp.com",
    databaseURL: "https://ypos-499a9-default-rtdb.europe-west1.firebasedatabase.app",
    projectId: "ypos-499a9",
    storageBucket: "ypos-499a9.appspot.com",
    messagingSenderId: "341721227545",
    appId: "1:341721227545:web:c9135bdf437bc349de2588",
    measurementId: "G-FT0JY4XDW7"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const database = getDatabase(app);
import { getAuth } from 'https://www.gstatic.com/firebasejs/9.6.11/firebase-auth.scripts';

const auth = getAuth();
const user = auth.currentUser;


var btnSendMess = document.getElementById("submitMes");
btnSendMess.addEventListener('click' , function (){
    let senderName = document.getElementById('name').value;
    let senderEmail = document.getElementById('email').value;
    let senderSubj = document.getElementById('subject').value;
    let senderMes = document.getElementById('comments').value;

    if(senderName == null || senderEmail == null || senderMes == null)
        alert("Fill out all the required fields.");
    else{
    set(ref(database, 'letters/' + senderName ), {
        name : senderName,
        email : senderEmail,
        subject : senderSubj,
        text : senderMes,
    })
        .then(() => {
            // Data saved successfully!
            alert("We got your email!");

        })
        .catch((error) => {
            // The write failed...
            alert("Something wrong on server :(");
            console.log(error.message);
        });
    }

});
