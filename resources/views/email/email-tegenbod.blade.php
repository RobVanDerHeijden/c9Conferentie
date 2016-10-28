<style>
#hyperlink-style-button{
    background:none;
    border:0;
    color:#666;
    text-decoration:underline;
}

#hyperlink-style-button:hover{
    background:none;
    border:0;
    color:#666;
    text-decoration:none;
    cursor:pointer;
    cursor:hand;
}
</style>
Hello {{ $users->naam }},<br>
<br>
First things first.<br>
We want to thank you for singing up for our confererence!<br>
<br>
But unfortunately, we think your price of <b>{{ $aanmeldingen->kosten }}</b> is set to high.<br>
<br>
We think <b>{{ $aanmeldingen->tegenBod }}</b> would be a more fair price.<br>
<br>
If you agree with this new price, press the following link:<br>
<a href="http://conferentie-site-bunky.c9users.io/aanmelden/bevestiging?
naam={{ $users->naam }}&
aanmelding={{ $aanmeldingen->idAanmelding }}" name="home">I agree with the new prices!</a><br>
<br>
If you disagree with this new price, press the following link: (this will terminate your reservation!!)<br>
<a href="http://conferentie-site-bunky.c9users.io/aanmelden/vervolg?
naam={{ $users->naam }}&
aanmelding={{ $aanmeldingen->idAanmelding }}" name="home">I do NOT agree with the new prices!</a><br>
<br>
We will wait 3 days for your response!<br>
If no response is received withing those 3 days, your reservation will be terminated!!<br>
<br>
Yours truly,<br>
Bunky™<br>