.kontakt
{
    <?php
        if(isset($_POST["submit"]))
        {
            mail("grundmandeniz@gmx.de", "Kontaktformular", 'Name: '.$_POST["name"]. 'Email: '.$_POST["email"].'Priorität: '.$_POST["priorität"].'Nachricht: '.$_POST["message"]);
        }
    ?>
}