<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ro', array (
  'validators' => 
  array (
    'This value should be false.' => 'Această valoare ar trebui să fie falsă (false).',
    'This value should be true.' => 'Această valoare ar trebui să fie adevărată (true).',
    'This value should be of type {{ type }}.' => 'Această valoare ar trebui să fie de tipul {{ type }}.',
    'This value should be blank.' => 'Această valoare ar trebui sa fie goală.',
    'The value you selected is not a valid choice.' => 'Valoarea selectată nu este o opțiune validă.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Trebuie să selectați cel puțin {{ limit }} opțiune.|Trebuie să selectați cel puțin {{ limit }} opțiuni.|Trebuie să selectați cel puțin {{ limit }} de opțiuni',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Trebuie să selectați cel mult {{ limit }} opțiune.|Trebuie să selectați cel mult {{ limit }} opțiuni.|Trebuie să selectați cel mult {{ limit }} de opțiuni.',
    'One or more of the given values is invalid.' => 'Una sau mai multe dintre valorile furnizate sunt invalide.',
    'This field was not expected.' => 'Acest câmp nu era de aşteptat.',
    'This field is missing.' => 'Acest câmp este lipsă.',
    'This value is not a valid date.' => 'Această valoare nu reprezintă o dată validă.',
    'This value is not a valid datetime.' => 'Această valoare nu reprezintă o dată și oră validă.',
    'This value is not a valid email address.' => 'Această valoare nu reprezintă o adresă de e-mail validă.',
    'The file could not be found.' => 'Fișierul nu a putut fi găsit.',
    'The file is not readable.' => 'Fișierul nu poate fi citit.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fișierul este prea mare ({{ size }} {{ suffix }}). Dimensiunea maximă permisă este {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Tipul fișierului este invalid ({{ type }}). Tipurile permise de fișiere sunt ({{ types }}).',
    'This value should be {{ limit }} or less.' => 'Această valoare ar trebui să fie cel mult {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caracter.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caractere.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} de caractere.',
    'This value should be {{ limit }} or more.' => 'Această valoare ar trebui să fie cel puțin {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caracter.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caractere.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} de caractere.',
    'This value should not be blank.' => 'Această valoare nu ar trebui să fie goală.',
    'This value should not be null.' => 'Această valoare nu ar trebui să fie nulă (null).',
    'This value should be null.' => 'Această valoare ar trebui să fie nulă (null).',
    'This value is not valid.' => 'Această valoare nu este validă.',
    'This value is not a valid time.' => 'Această valoare nu reprezintă o oră validă.',
    'This value is not a valid URL.' => 'Această valoare nu reprezintă un URL (link) valid.',
    'The two values should be equal.' => 'Cele două valori ar trebui să fie egale.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fișierul este prea mare. Mărimea maximă permisă este {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fișierul este prea mare.',
    'The file could not be uploaded.' => 'Fișierul nu a putut fi încărcat.',
    'This value should be a valid number.' => 'Această valoare nu reprezintă un număr valid.',
    'This file is not a valid image.' => 'Acest fișier nu este o imagine validă.',
    'This is not a valid IP address.' => 'Această valoare nu este o adresă IP validă.',
    'This value is not a valid language.' => 'Această valoare nu reprezintă o limbă corectă.',
    'This value is not a valid locale.' => 'Această valoare nu reprezintă un dialect (o limbă) corect.',
    'This value is not a valid country.' => 'Această valoare nu este o țară validă.',
    'This value is already used.' => 'Această valoare este folosită deja.',
    'The size of the image could not be detected.' => 'Mărimea imaginii nu a putut fi detectată.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Lățimea imaginii este prea mare ({{ width }}px). Lățimea maximă permisă este de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Lățimea imaginii este prea mică ({{ width }}px). Lățimea minimă permisă este de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Înălțimea imaginii este prea mare ({{ height }}px). Înălțimea maximă permisă este de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Înălțimea imaginii este prea mică ({{ height }}px). Înălțimea minimă permisă este de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Această valoare trebuie să fie parola curentă a utilizatorului.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Această valoare trebuie să conțină exact {{ limit }} caracter.|Această valoare trebuie să conțină exact {{ limit }} caractere.|Această valoare trebuie să conțină exact {{ limit }} de caractere.',
    'The file was only partially uploaded.' => 'Fișierul a fost încărcat parțial.',
    'No file was uploaded.' => 'Nu a fost încărcat nici un fișier.',
    'No temporary folder was configured in php.ini.' => 'Nu este configurat nici un director temporar in php.ini.',
    'Cannot write temporary file to disk.' => 'Nu a fost posibilă scrierea fișierului temporar pe disk.',
    'A PHP extension caused the upload to fail.' => 'O extensie PHP a prevenit încărcarea cu succes a fișierului.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Această colecție trebuie să conțină cel puțin {{ limit }} element.|Această colecție trebuie să conțină cel puțin {{ limit }} elemente.|Această colecție trebuie să conțină cel puțin {{ limit }} de elemente.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Această colecție trebuie să conțină cel mult {{ limit }} element.|Această colecție trebuie să conțină cel mult {{ limit }} elemente.|Această colecție trebuie să conțină cel mult {{ limit }} de elemente.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Această colecție trebuie să conțină {{ limit }} element.|Această colecție trebuie să conțină {{ limit }} elemente.|Această colecție trebuie să conțină {{ limit }} de elemente.',
    'Invalid card number.' => 'Numărul card invalid.',
    'Unsupported card type or invalid card number.' => 'Tipul sau numărul cardului nu sunt valide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Acesta nu este un cod IBAN (International Bank Account Number) valid.',
    'This value is not a valid ISBN-10.' => 'Această valoare nu este un cod ISBN-10 valid.',
    'This value is not a valid ISBN-13.' => 'Această valoare nu este un cod ISBN-13 valid.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Această valoare nu este un cod ISBN-10 sau ISBN-13 valid.',
    'This value is not a valid ISSN.' => 'Această valoare nu este un cod ISSN valid.',
    'This value is not a valid currency.' => 'Această valoare nu este o monedă validă.',
    'This value should be equal to {{ compared_value }}.' => 'Această valoare trebuie să fie egală cu {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Această valoare trebuie să fie mai mare de {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Această valoare trebuie să fie mai mare sau egală cu {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Această valoare trebuie identică cu {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Această valoare trebuie să fie mai mică de {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Această valoare trebuie să fie mai mică sau egală cu {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Această valoare nu trebuie să fie egală cu {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Această valoare nu trebuie să fie identică cu {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Aceast formular nu ar trebui să conțină câmpuri suplimentare.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Fișierul încărcat a fost prea mare. Vă rugăm sa încărcați un fișier mai mic.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token-ul CSRF este invalid. Vă rugăm să trimiteți formularul incă o dată.',
    'fos_user.username.already_used' => 'Numele de utilizator este deja folosit',
    'fos_user.username.blank' => 'Introduceți un nume de utilizator',
    'fos_user.username.short' => '[-Inf,Inf]Numele de utilizator este prea scurt',
    'fos_user.username.long' => '[-Inf,Inf]Numele de utilizator este prea lung',
    'fos_user.email.already_used' => 'E-mailul este deja folosit',
    'fos_user.email.blank' => 'Introduceți e-mailul',
    'fos_user.email.short' => '[-Inf,Inf]E-mailul este prea scurt',
    'fos_user.email.long' => '[-Inf,Inf]E-mailul este prea lung',
    'fos_user.email.invalid' => 'E-mailul nu este corect',
    'fos_user.password.blank' => 'Introduceți parola',
    'fos_user.password.short' => '[-Inf,Inf]Parola este prea scurtă',
    'fos_user.password.mismatch' => 'Parolele introduse nu coincid',
    'fos_user.new_password.blank' => 'Introduceți o parolă nouă',
    'fos_user.new_password.short' => '[-Inf,Inf]Parola nouă este prea scurtă',
    'fos_user.current_password.invalid' => 'Parola introdusă nu este corectă',
    'fos_user.group.blank' => 'Introduceți un nume',
    'fos_user.group.short' => '[-Inf,Inf]Numele este prea scurt',
    'fos_user.group.long' => '[-Inf,Inf]Numele este prea lung',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'A apărut o eroare de autentificare.',
    'Authentication credentials could not be found.' => 'Informațiile de autentificare nu au fost găsite.',
    'Authentication request could not be processed due to a system problem.' => 'Sistemul nu a putut procesa cererea de autentificare din cauza unei erori.',
    'Invalid credentials.' => 'Date de autentificare invalide.',
    'Cookie has already been used by someone else.' => 'Cookieul este folosit deja de altcineva.',
    'Not privileged to request the resource.' => 'Permisiuni insuficiente pentru resursa cerută.',
    'Invalid CSRF token.' => 'Tokenul CSRF este invalid.',
    'Digest nonce has expired.' => 'Tokenul temporar a expirat.',
    'No authentication provider found to support the authentication token.' => 'Nu a fost găsit nici un agent de autentificare pentru tokenul specificat.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesiunea nu mai este disponibilă, a expirat sau suportul pentru cookieuri nu este activat.',
    'No token could be found.' => 'Tokenul nu a putut fi găsit.',
    'Username could not be found.' => 'Numele de utilizator nu a fost găsit.',
    'Account has expired.' => 'Contul a expirat.',
    'Credentials have expired.' => 'Datele de autentificare au expirat.',
    'Account is disabled.' => 'Contul este dezactivat.',
    'Account is locked.' => 'Contul este blocat.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizează grupul',
    'group.show.name' => 'Numele grupului',
    'group.new.submit' => 'Creează grup',
    'group.flash.updated' => 'Grupul a fost actualizat',
    'group.flash.created' => 'Grupul a fost creat',
    'group.flash.deleted' => 'Grupul a fost șters',
    'security.login.username' => 'Nume de utilizator',
    'security.login.password' => 'Parola',
    'security.login.remember_me' => 'Ține-mă minte',
    'security.login.submit' => 'Autentificare',
    'profile.show.username' => 'Numele de utilizator',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizează',
    'profile.flash.updated' => 'Profilul a fost actualizat',
    'change_password.submit' => 'Schimbă parola',
    'change_password.flash.success' => 'Parola a fost schimbată',
    'registration.check_email' => 'Un email a fost trimis către %email%. Conține un link de activare pe care trebuie să îl accesezi pentru a-ți activa contul.',
    'registration.confirmed' => 'Felicitări %username%, contul tău a fost confirmat.',
    'registration.back' => 'Înapoi la pagina de la care ai venit.',
    'registration.submit' => 'Înregistrează-te',
    'registration.flash.user_created' => 'Utilizatorul a fost creat cu succes',
    'registration.email.subject' => 'Bine ai venit %username%!',
    'registration.email.message' => 'Salut %username%!

Pentru a-ți valida contul - accesează %confirmationUrl%

Toate cele bune,
Echipa
',
    'resetting.password_already_requested' => 'Deja s-a făcut o cerere în ultimele 24 de ore pentru parola acestui utilizator.',
    'resetting.check_email' => 'A fost trimis un email către %email%. Conține un link pe care trebuie să îl accesezi pentru a-ți reseta parola.',
    'resetting.request.invalid_username' => 'Numele de utilizator sau adresa de email "%username%" nu există.',
    'resetting.request.username' => 'Numele de utilizator sau adresa de email',
    'resetting.request.submit' => 'Resetează parola',
    'resetting.reset.submit' => 'Schimbă parola',
    'resetting.flash.success' => 'Parola a fost resetată cu succes',
    'resetting.email.subject' => 'Resetare parolă',
    'resetting.email.message' => 'Salut %username%!

Pentru a-ți reseta parola - accesează %confirmationUrl%

Toate cele bune,
Echipa
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Autentificare',
    'layout.register' => 'Înregistrare',
    'layout.logged_in_as' => 'Logat ca %username%',
    'form.group_name' => 'Numele grupului',
    'form.username' => 'Nume de utilizator',
    'form.email' => 'Email',
    'form.current_password' => 'Parola curentă',
    'form.password' => 'Parolă',
    'form.password_confirmation' => 'Verificare parolă',
    'form.new_password' => 'Parola nouă',
    'form.new_password_confirmation' => 'Verificare parolă',
  ),
  'messages' => 
  array (
    'action.new' => 'Adaugă %entity_name%',
    'action.show' => 'Vezi',
    'action.edit' => 'Editează',
    'action.search' => 'Caută',
    'action.delete' => 'Șterge',
    'action.save' => 'Salvează modificările',
    'action.cancel' => 'Anulează',
    'action.list' => 'Înapoi la listă',
    'label.form.empty_value' => 'Gol',
    '__name__label__' => '__name__label__',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Creează %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Editează %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} Niciun rezultat|{1} <strong>1</strong> rezultat|]1,Inf] <strong>%count%</strong> rezultate',
    'search.no_results' => 'Niciun rezultat.',
    'list.row_actions' => 'Acțiuni',
    'paginator.first' => 'Prima',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Următor',
    'paginator.last' => 'Ultima',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> din <strong>%results%</strong>',
    'label.true' => 'Da',
    'label.false' => 'Nu',
    'label.empty' => 'Gol',
    'label.null' => 'Nul',
    'label.nullable_field' => 'Pastreaza necompletat',
    'label.object' => 'Obiect PHP',
    'label.inaccessible' => 'Inaccesibil',
    'label.inaccessible.explanation' => 'Metoda de tip Get nu există pentru acest câmp sau proprietatea nu e publică',
    'user.logged_in_as' => 'Înregistrat ca',
    'delete_modal.title' => 'Ești sigur că vrei să ștergi acest item?',
    'delete_modal.content' => 'Nu există posibilitatea de a reveni asupra acestei decizii.',
    'delete_modal.action' => 'Șterge',
    'action.add_new_item' => 'Adaugă un item nou',
    'action.add_another_item' => 'Adaugă încă un item',
    'action.remove_item' => 'Șterge un item',
    'errors' => 'Eroare|Erori',
  ),
));

$cataloguePl = new MessageCatalogue('pl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ta wartość powinna być fałszem.',
    'This value should be true.' => 'Ta wartość powinna być prawdą.',
    'This value should be of type {{ type }}.' => 'Ta wartość powinna być typu {{ type }}.',
    'This value should be blank.' => 'Ta wartość powinna być pusta.',
    'The value you selected is not a valid choice.' => 'Ta wartość powinna być jedną z podanych opcji.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Powinieneś wybrać co najmniej {{ limit }} opcję.|Powinieneś wybrać co najmniej {{ limit }} opcje.|Powinieneś wybrać co najmniej {{ limit }} opcji.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Powinieneś wybrać maksymalnie {{ limit }} opcję.|Powinieneś wybrać maksymalnie {{ limit }} opcje.|Powinieneś wybrać maksymalnie {{ limit }} opcji.',
    'One or more of the given values is invalid.' => 'Jedna lub więcej z podanych wartości jest nieprawidłowa.',
    'This field was not expected.' => 'To pole nie spodziewano.',
    'This field is missing.' => 'To pole jest chybianie.',
    'This value is not a valid date.' => 'Ta wartość nie jest prawidłową datą.',
    'This value is not a valid datetime.' => 'Ta wartość nie jest prawidłową datą i czasem.',
    'This value is not a valid email address.' => 'Ta wartość nie jest prawidłowym adresem email.',
    'The file could not be found.' => 'Plik nie mógł zostać odnaleziony.',
    'The file is not readable.' => 'Nie można odczytać pliku.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży ({{ size }} {{ suffix }}). Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Nieprawidłowy typ mime pliku ({{ type }}). Dozwolone typy mime to {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta wartość powinna wynosić {{ limit }} lub mniej.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.',
    'This value should be {{ limit }} or more.' => 'Ta wartość powinna wynosić {{ limit }} lub więcej.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.',
    'This value should not be blank.' => 'Ta wartość nie powinna być pusta.',
    'This value should not be null.' => 'Ta wartość nie powinna być nullem.',
    'This value should be null.' => 'Ta wartość powinna być nullem.',
    'This value is not valid.' => 'Ta wartość jest nieprawidłowa.',
    'This value is not a valid time.' => 'Ta wartość nie jest prawidłowym czasem.',
    'This value is not a valid URL.' => 'Ta wartość nie jest prawidłowym adresem URL.',
    'The two values should be equal.' => 'Obie wartości powinny być równe.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży. Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Plik jest za duży.',
    'The file could not be uploaded.' => 'Plik nie mógł być wgrany.',
    'This value should be a valid number.' => 'Ta wartość powinna być prawidłową liczbą.',
    'This file is not a valid image.' => 'Ten plik nie jest obrazem.',
    'This is not a valid IP address.' => 'To nie jest prawidłowy adres IP.',
    'This value is not a valid language.' => 'Ta wartość nie jest prawidłowym językiem.',
    'This value is not a valid locale.' => 'Ta wartość nie jest prawidłową lokalizacją.',
    'This value is not a valid country.' => 'Ta wartość nie jest prawidłową nazwą kraju.',
    'This value is already used.' => 'Ta wartość jest już wykorzystywana.',
    'The size of the image could not be detected.' => 'Nie można wykryć rozmiaru obrazka.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Szerokość obrazka jest zbyt duża ({{ width }}px). Maksymalna dopuszczalna szerokość to {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Szerokość obrazka jest zbyt mała ({{ width }}px). Oczekiwana minimalna szerokość to {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Wysokość obrazka jest zbyt duża ({{ height }}px). Maksymalna dopuszczalna wysokość to {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Wysokość obrazka jest zbyt mała ({{ height }}px). Oczekiwana minimalna wysokość to {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta wartość powinna być aktualnym hasłem użytkownika.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta wartość powinna mieć dokładnie {{ limit }} znak.|Ta wartość powinna mieć dokładnie {{ limit }} znaki.|Ta wartość powinna mieć dokładnie {{ limit }} znaków.',
    'The file was only partially uploaded.' => 'Plik został wgrany tylko częściowo.',
    'No file was uploaded.' => 'Żaden plik nie został wgrany.',
    'No temporary folder was configured in php.ini.' => 'Nie skonfigurowano folderu tymczasowego w php.ini.',
    'Cannot write temporary file to disk.' => 'Nie można zapisać pliku tymczasowego na dysku.',
    'A PHP extension caused the upload to fail.' => 'Rozszerzenie PHP spowodowało błąd podczas wgrywania.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ten zbiór powinien zawierać {{ limit }} lub więcej elementów.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ten zbiór powinien zawierać {{ limit }} lub mniej elementów.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ten zbiór powinien zawierać dokładnie {{ limit }} element.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementy.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementów.',
    'Invalid card number.' => 'Nieprawidłowy numer karty.',
    'Unsupported card type or invalid card number.' => 'Nieobsługiwany rodzaj karty lub nieprawidłowy numer karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nieprawidłowy międzynarodowy numer rachunku bankowego (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Ta wartość nie jest prawidłowym numerem ISSN.',
    'This value is not a valid currency.' => 'Ta wartość nie jest prawidłową walutą.',
    'This value should be equal to {{ compared_value }}.' => 'Ta wartość powinna być równa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta wartość powinna być większa niż {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta wartość powinna być większa bądź równa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta wartość powinna być mniejsza niż {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta wartość powinna być mniejsza bądź równa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta wartość nie powinna być równa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość nie powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Proporcje obrazu są zbyt duże ({{ ratio }}). Maksymalne proporcje to {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Proporcje obrazu są zbyt małe ({{ ratio }}). Minimalne proporcje to {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Obraz jest kwadratem ({{ width }}x{{ height }}px). Kwadratowe obrazy nie są akceptowane.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obraz jest panoramiczny ({{ width }}x{{ height }}px). Panoramiczne zdjęcia nie są akceptowane.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obraz jest portretowy ({{ width }}x{{ height }}px). Portretowe zdjęcia nie są akceptowane.',
    'An empty file is not allowed.' => 'Plik nie może być pusty.',
    'The host could not be resolved.' => 'Nazwa hosta nie została rozpoznana.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta wartość nie pasuje do oczekiwanego zestawu znaków {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ta wartość nie jest poprawnym kodem BIC (Business Identifier Code).',
    'This form should not contain extra fields.' => 'Ten formularz nie powinien zawierać dodatkowych pól.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Wgrany plik był za duży. Proszę spróbować wgrać mniejszy plik.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token CSRF jest nieprawidłowy. Proszę spróbować wysłać formularz ponownie.',
    'fos_user.username.already_used' => 'Ta nazwa użytkownika jest już zajęta',
    'fos_user.username.blank' => 'Proszę podać nazwę użytkownika',
    'fos_user.username.short' => '[-Inf,Inf]Nazwa użytkownika jest za krótka',
    'fos_user.username.long' => '[-Inf,Inf]Nazwa użytkownika jest za długa',
    'fos_user.email.already_used' => 'Podany email jest zajęty',
    'fos_user.email.blank' => 'Proszę podać adres email',
    'fos_user.email.short' => '[-Inf,Inf]Podany email jest za krótki',
    'fos_user.email.long' => '[-Inf,Inf]Podany email jest za długi',
    'fos_user.email.invalid' => 'Podany adres email jest nieprawidłowy',
    'fos_user.password.blank' => 'Proszę podać hasło',
    'fos_user.password.short' => '[-Inf,Inf]Podane hasło jest za krótkie',
    'fos_user.password.mismatch' => 'Hasła nie pasują do siebie',
    'fos_user.new_password.blank' => 'Proszę podać nowe hasło',
    'fos_user.new_password.short' => '[-Inf,Inf]Podane nowe hasło jest za krótkie',
    'fos_user.current_password.invalid' => 'Podane hasło jest nieprawidłowe',
    'fos_user.group.blank' => 'Proszę podać nazwę',
    'fos_user.group.short' => '[-Inf,Inf]Podana nazwa jest za krótka',
    'fos_user.group.long' => '[-Inf,Inf]Podana nazwa jest za długa',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Wystąpił błąd uwierzytelniania.',
    'Authentication credentials could not be found.' => 'Dane uwierzytelniania nie zostały znalezione.',
    'Authentication request could not be processed due to a system problem.' => 'Żądanie uwierzytelniania nie mogło zostać pomyślnie zakończone z powodu problemu z systemem.',
    'Invalid credentials.' => 'Nieprawidłowe dane.',
    'Cookie has already been used by someone else.' => 'To ciasteczko jest używane przez kogoś innego.',
    'Not privileged to request the resource.' => 'Brak uprawnień dla żądania wskazanego zasobu.',
    'Invalid CSRF token.' => 'Nieprawidłowy token CSRF.',
    'Digest nonce has expired.' => 'Kod dostępu wygasł.',
    'No authentication provider found to support the authentication token.' => 'Nie znaleziono mechanizmu uwierzytelniania zdolnego do obsługi przesłanego tokenu.',
    'No session available, it either timed out or cookies are not enabled.' => 'Brak danych sesji, sesja wygasła lub ciasteczka nie są włączone.',
    'No token could be found.' => 'Nie znaleziono tokenu.',
    'Username could not be found.' => 'Użytkownik o podanej nazwie nie istnieje.',
    'Account has expired.' => 'Konto wygasło.',
    'Credentials have expired.' => 'Dane uwierzytelniania wygasły.',
    'Account is disabled.' => 'Konto jest wyłączone.',
    'Account is locked.' => 'Konto jest zablokowane.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Edytuj grupę',
    'group.show.name' => 'Nazwa grupy',
    'group.new.submit' => 'Utwórz grupę',
    'group.flash.updated' => 'Grupa została zaktualizowana',
    'group.flash.created' => 'Grupa została utworzona',
    'group.flash.deleted' => 'Grupa została usunięta',
    'security.login.username' => 'Nazwa użytkownika',
    'security.login.password' => 'Hasło',
    'security.login.remember_me' => 'Nie wylogowuj mnie',
    'security.login.submit' => 'Zaloguj',
    'profile.show.username' => 'Nazwa użytkownika',
    'profile.show.email' => 'E-mail',
    'profile.edit.submit' => 'Edytuj użytkownika',
    'profile.flash.updated' => 'Zapisano zmiany w profilu',
    'change_password.submit' => 'Zmień hasło',
    'change_password.flash.success' => 'Hasło zostało zmienione',
    'registration.check_email' => 'Na adres %email% wysłano wiadomość e-mail. Zawiera ona link, na który należy kliknąć, aby aktywować konto.',
    'registration.confirmed' => 'Gratulacje %username%, potwierdziłeś konto.',
    'registration.back' => 'Powrót do poprzedniej strony.',
    'registration.submit' => 'Zarejestruj',
    'registration.flash.user_created' => 'Stworzono użytkownika',
    'registration.email.subject' => 'Witaj %username%!',
    'registration.email.message' => 'Cześć %username%!

Aby potwierdzić swoje konto - proszę przejść do %confirmationUrl%

Pozdrawiamy,
Zespół.
',
    'resetting.password_already_requested' => 'W przeciągu ostatnich 24 godzin nastąpiła już próba odzyskania hasła.',
    'resetting.check_email' => 'Na adres %email% wysłano wiadomość e-mail. Zawiera ona link, w którego należy kliknąć, aby zresetować hasło.',
    'resetting.request.invalid_username' => 'Nazwa użytkownika lub e-mail "%username%" nie istnieje.',
    'resetting.request.username' => 'Nazwa użytkownika lub e-mail',
    'resetting.request.submit' => 'Resetuj hasło',
    'resetting.reset.submit' => 'Zmień hasło',
    'resetting.flash.success' => 'Hasło zostało zresetowane',
    'resetting.email.subject' => 'Resetowanie hasła',
    'resetting.email.message' => 'Cześć %username%!

Aby zresetować hasło - proszę przejść do %confirmationUrl%

Pozdrawiamy,
Zespół.
',
    'layout.logout' => 'Wyloguj',
    'layout.login' => 'Zaloguj',
    'layout.register' => 'Zarejestruj',
    'layout.logged_in_as' => 'Zalogowano jako %username%',
    'form.group_name' => 'Nazwa grupy',
    'form.username' => 'Nazwa użytkownika',
    'form.email' => 'E-mail',
    'form.current_password' => 'Obecne hasło',
    'form.password' => 'Hasło',
    'form.password_confirmation' => 'Powtórz hasło',
    'form.new_password' => 'Nowe hasło',
    'form.new_password_confirmation' => 'Powtórz hasło',
  ),
  'messages' => 
  array (
    'action.new' => 'Dodaj %entity_name%',
    'action.show' => 'Pokaż',
    'action.edit' => 'Edytuj',
    'action.search' => 'Szukaj',
    'action.delete' => 'Usuń',
    'action.save' => 'Zapisz zmiany',
    'action.cancel' => 'Anuluj',
    'action.list' => 'Wróć do listy',
    'label.form.empty_value' => 'Pusta wartość',
    '__name__label__' => '__name__label__',
    'app.menu.users' => 'Użytkownicy',
    'app.user.username' => 'Nazwa użytkownika',
    'app.user.email' => 'Adres Email',
    'app.user.password' => 'Hasło',
    'app.user.enabled' => 'Aktywny',
    'app.user.roles' => 'Prawa',
    'Username' => 'Nazwa użytkownika',
    'Email' => 'Adres Email',
    'Actions' => 'Dostępne opcje',
    'Edit' => 'Edytuj',
    'Delete' => 'Usuń',
    'Users' => 'Użytkownicy',
    'Search' => 'Szukaj',
    'add' => 'Dodaj',
    'Add Users' => 'Dodaj użytkownika',
    'Cancel' => 'Anuluj',
    'app.action.search' => 'Szukaj',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Dodaj nowy %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => '%entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} Brak wyników|{1} Znaleziono <strong>1</strong> wynik|{2,3,4} Znaleziono <strong>%count%</strong> wyniki|[5,Inf] Znaleziono <strong>%count%</strong> wyników',
    'search.no_results' => 'Brak wyników.',
    'list.row_actions' => 'Akcje',
    'paginator.first' => 'Pierwsza',
    'paginator.previous' => 'Poprzednia',
    'paginator.next' => 'Następna',
    'paginator.last' => 'Ostatnia',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> z <strong>%results%</strong>',
    'label.true' => 'Tak',
    'label.false' => 'Nie',
    'label.empty' => 'Pusty',
    'label.null' => 'Brak',
    'label.nullable_field' => 'Zostaw niewypełnione',
    'label.object' => 'Obiekt PHP',
    'label.inaccessible' => 'Niedostępny',
    'label.inaccessible.explanation' => 'Metoda pobierająca (<i>ang. getter</i>) nie istnieje  dla tego pola lub właściwość (<i>ang. property</i>) nie jest publiczna',
    'user.logged_in_as' => 'Zalogowany jako',
    'user.unnamed' => 'Użytkownik bez nazwy',
    'user.anonymous' => 'Anonimowy użytkownik',
    'toggle_navigation' => 'Przełącz nawigację',
    'delete_modal.title' => 'Czy na pewno chcesz usunąć ten element?',
    'delete_modal.content' => 'Tej operacji nie można cofnąć.',
    'delete_modal.action' => 'Usuń',
    'action.add_new_item' => 'Dodaj nową pozycję',
    'action.add_another_item' => 'Dodaj kolejną pozycję',
    'action.remove_item' => 'Usuń pozycję',
    'errors' => 'Błąd|Błędy',
    'form.are_you_sure' => 'Nie zapisano zmian wprowadzonych w tym formularzu.',
    'show.remaining_items' => '{1} pozostała jedna pozycja nie wyświetlona na tym listingu|{2,3,4} pozostały %count% pozycje nie wyświetlone na tym listingu|[5,21] pozostało %count% pozycji nie wyświetlonych na tym listingu|[22,Inf[ liczba pozycji nie wyświetlonych na tym listingu: %count%',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePl);

return $catalogue;
