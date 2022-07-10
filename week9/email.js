function inputEmail(){
    var username = prompt("Please input the name");
    var emailAddress = prompt("Please input the email address");

    this.addDetails = function () {
        var row0 = {username, emailAddress};
        document.write(row0.username+'|'+row0.emailAddress);
    }
}

var details = new inputEmail();
details.addDetails();