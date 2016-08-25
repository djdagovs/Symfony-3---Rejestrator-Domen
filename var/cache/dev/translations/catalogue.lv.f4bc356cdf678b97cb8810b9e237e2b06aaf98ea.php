<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lv', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Šajā veidlapā nevajadzētu būt papildus ievades laukiem.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Augšupielādētā faila izmērs bija par lielu. Lūdzu mēģiniet augšupielādēt mazāka izmēra failu.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Dotais CSRF talons nav derīgs. Lūdzu mēģiniet vēlreiz iesniegt veidlapu.',
    'fos_user.username.already_used' => 'Šis lietotājvārds jau ir aizņemts',
    'fos_user.username.blank' => 'Lūdzu ievadiet lietotājvārdu',
    'fos_user.username.short' => '[-Inf,Inf]Lietotājvārds ir pārāk īss',
    'fos_user.username.long' => '[-Inf,Inf]Lietotājvārds ir pārāk garš',
    'fos_user.email.already_used' => 'Šis e-pasts jau ir aizņemts',
    'fos_user.email.blank' => 'Lūdzu ievadiet e-pastu',
    'fos_user.email.short' => '[-Inf,Inf]E-pasts ir pārāk īss',
    'fos_user.email.long' => '[-Inf,Inf]E-pasts ir pārāk garš',
    'fos_user.email.invalid' => 'E-pasts nav derīgs',
    'fos_user.password.blank' => 'Lūdzu ievadiet paroli',
    'fos_user.password.short' => '[-Inf,Inf]Parole ir pārāk īsa',
    'fos_user.new_password.blank' => 'Lūdzu ievadiet jaunu paroli',
    'fos_user.new_password.short' => '[-Inf,Inf]Jaunā parole ir pārāk īsa',
    'fos_user.current_password.invalid' => 'Ievadītā parole nav pareiza',
    'fos_user.group.blank' => 'Lūdzu ievadiet nosaukumu',
    'fos_user.group.short' => '[-Inf,Inf]Nosaukums ir pārāk īss',
    'fos_user.group.long' => '[-Inf,Inf]Nosaukums ir pārāk garš',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Saglabāt izmaiņas',
    'group.show.name' => 'Grupas nosaukums',
    'group.new.submit' => 'Izveidot grupu',
    'group.flash.updated' => 'Grupa tika atjaunināta',
    'group.flash.created' => 'Grupa tika izveidota',
    'group.flash.deleted' => 'Grupa tika dzēsta',
    'security.login.username' => 'Lietotājvārds',
    'security.login.password' => 'Parole',
    'security.login.remember_me' => 'Atcerēties mani',
    'security.login.submit' => 'Ienākt',
    'profile.show.username' => 'Lietotājvārds',
    'profile.show.email' => 'E-pasts',
    'profile.edit.submit' => 'Saglabāt',
    'profile.flash.updated' => 'Profila izmaiņas tika saglabātas',
    'change_password.submit' => 'Nomainīt paroli',
    'change_password.flash.success' => 'Parole tika nomainīta',
    'registration.check_email' => 'Uz %email% tika nosūtīts e-pasts ar aktivizācijas saiti. Lūdzu sekojiet tai, lai aktivizētu savu kontu.',
    'registration.confirmed' => 'Apsveicam, %username%, tavs konts tika aktivizēts!',
    'registration.back' => 'Atpakaļ uz sākotnējo lapu.',
    'registration.submit' => 'Reģistrēties',
    'registration.flash.user_created' => 'Lietotājs tika izveidots',
    'registration.email.subject' => 'Sveiki, %username%!',
    'registration.email.message' => 'Sveiks, %username%!

Lai pabeigtu aktivizēt savu kontu, lūdzu apmeklē %confirmationUrl%

Jauku dienu,
lapas kolektīvs.
',
    'resetting.password_already_requested' => 'Parole šim lietotājam jau tikusi pieprasīta pēdējo 24 stundu laikā.',
    'resetting.check_email' => 'Uz %email% tika nosūtīts e-pasts ar saiti, kurai jāseko, lai atiestatītu paroli.',
    'resetting.request.invalid_username' => 'Lietotājs vai e-pasta adrese "%username%" neeksistē.',
    'resetting.request.username' => 'Lietotājvārds vai e-pasta adrese',
    'resetting.request.submit' => 'Atiestatīt paroli',
    'resetting.reset.submit' => 'Nomainīt paroli',
    'resetting.flash.success' => 'Parole tika atiestatīta',
    'resetting.email.subject' => 'Paroles atiestatīšana',
    'resetting.email.message' => 'Sveiki, %username%!

Lai atiestatītu savu paroli, lūdzu apmeklē %confirmationUrl%

Jauku dienu,
lapas kolektīvs.
',
    'layout.logout' => 'Iziet',
    'layout.login' => 'Ienākt',
    'layout.register' => 'Reģistrēties',
    'layout.logged_in_as' => 'Autorizējies kā %username%',
    'form.group_name' => 'Grupas nosaukums',
    'form.username' => 'Lietotājvārds',
    'form.email' => 'E-pasts',
    'form.current_password' => 'Esošā parole',
    'form.password' => 'Parole',
    'form.password_confirmation' => 'Atkārtoti',
    'form.new_password' => 'Jaunā parole',
    'form.new_password_confirmation' => 'Atkārtoti',
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
