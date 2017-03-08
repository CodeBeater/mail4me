# Mail4Me: Terseing Layer for PHPMailer

![mail4me Make sending emails enjoyable again](https://pixye.net/images/github/mail4me1.png)

Tired of writing 50 lines of boilerplate every time you want to send an email via PHP? Well then you've come to the right place

Sending emails with mail4me's awesome terseing layer is as easy as:
```php
$m4m = new mail4me();
$m4m->sendMail("to@example.com", "You got mail!", "Hey bud, you got mail!");
```

Want to load an email template from a file? No fret, with mail4me that's as easy as:
```php
$strings = array("bud", "mail");

$m4m = new mail4me();
$m4m->sendMail("to@example.com", "You got mail!", "", "", array("emailTemplate.php", $strings));
```

emailTemplate.php
```php
<p>Hey <?php echo($strings[0] ?>, you got <?php echo($strings[1) ?>!</p>
<!-- Will produce: "Hey bud, you got mail! -->
```

![Trump showing executive order, paper reads "Sending emails is enjoyable again"](https://pixye.net/images/github/mail4me2.png)
