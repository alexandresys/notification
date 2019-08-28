
# Email Notification Library using phpMailer

Email using a phpmailer library. Doing a decompilation action is essential for any system.

To do a library installation, run the following command:

```sh
composer require alexandresys/notification
```

To make use of the library, simply require the composer's autoload, invoke and call the method:

```sh
<? php

require __DIR__. '/vendor/autoload.php';

USE Notification \ Email;

$ email = new Email (2, "mail.host.com", "your@email.com", "your pass", "secure smtp (tls / ssl)", "port (587)",
"from@email.com", "From Name");

$ email-> sendEmail ("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that all email setup is being used the magic builder method! Once you invoke the builder within your application, your system will be able to perform the triggers.

### Developers
* [Gustavo Web] - Developing a library and teacher of the Composer in Practice course!
* [Emerson Alexandre] - CEO and Founder Valesistem Ti
* [Valesistem tecnologia] - Official website of your
* [phpMailer] - Lib to email

License
----

MIT

** Another UpInside Training course, make good use! **

[//]: #
[Enerson Alexandre]: <mailto: alexandresys@hotmail.com>
[Andrezza B Garcia]: <mailto: andrezza_luna@hotmail.com.com>
[Valesistem Ti]: <https://www.valesistem.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
