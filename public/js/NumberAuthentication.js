window.onload=function () {
    render();
};
function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
function phoneAuth() {
    //get the number
    var number = document.getElementById('number').value;
    var countryCode = document.getElementById('country_code').value;
    var userPhoneNumber = "" + countryCode + number;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(userPhoneNumber,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        // alert("Verification Code Sent");
        var button = document.getElementById('modal').click();
    }).catch(function (error) {
        alert(error.message);
    });
}
function codeverify() {
    var code=document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function (result) {
        // alert("Successfully registered");
        var user = result.user;
        console.log(user);

        insertUserIntoDatabase();

    }).catch(function (error) {
        alert(error.message);
    });
}

function insertUserIntoDatabase() {
    const db = firebase.firestore();
    var userId = firebase.auth().currentUser.uid;
    var userNumber = firebase.auth().currentUser.phoneNumber;

    var fref = db.collection("Users").doc(userId);

    fref.get().then(function(doc) {
        if (doc.exists) {
            db.collection("Users").doc(userId).update({
                PhoneNumber: userNumber
            });
        } else {
            db.collection("Users").doc(userId).set({
                PhoneNumber: userNumber
            });
        }
        }).catch(function(error) {
            console.log("Error getting document:", error);
        });

    document.cookie="profile_viewer_uid=" + userId;
    window.location.href = 'user-profile';
}
