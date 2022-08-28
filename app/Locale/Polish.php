<?php

namespace App\Locale;

use App\Contracts\Language;

final class Polish implements Language
{
	public function code(): string
	{
		return 'pl';
	}

	public function get_locale(): array
	{
		$locale = [
			'USERNAME' => 'Nazwa użytkownika',
			'PASSWORD' => 'Hasło',
			'ENTER' => 'Potwierdź',
			'CANCEL' => 'Anuluj',
			'SIGN_IN' => 'Zaloguj',
			'CLOSE' => 'Zamknij',
			'SETTINGS' => 'Ustawienia',
			'SEARCH' => 'Szukaj …',
			'MORE' => 'Więcej',
			'DEFAULT' => 'Domyślne',

			'USERS' => 'Użytkownicy',
			'CREATE' => 'Create',
			'REMOVE' => 'Remove',
			'SHARE' => 'Share',
			'U2F' => 'U2F',
			'NOTIFICATIONS' => 'Notifications',
			'SHARING' => 'Udostępnianie',
			'CHANGE_LOGIN' => 'Zmień login',
			'CHANGE_SORTING' => 'Zmień sortowanie',
			'SET_DROPBOX' => 'Zapisz',
			'ABOUT_LYCHEE' => 'O Lychee',
			'DIAGNOSTICS' => 'Informacje techniczne',
			'DIAGNOSTICS_GET_SIZE' => 'Analiza miejsca na dysku',
			'LOGS' => 'Logi',
			'CLEAN_LOGS' => 'Clean Noise',
			'CLEAR' => 'Clear',
			'SIGN_OUT' => 'Wyloguj',
			'UPDATE_AVAILABLE' => 'Dostępna aktualizacja!',
			'MIGRATION_AVAILABLE' => 'Dostępna migracja!',
			'CHECK_FOR_UPDATE' => 'Check for updates',
			'DEFAULT_LICENSE' => 'Domyślna licencja dla nowych wrzutek:',
			'SET_LICENSE' => 'Zapisz',
			'SET_OVERLAY_TYPE' => 'Set Overlay',
			'SET_MAP_PROVIDER' => 'Set OpenStreetMap tiles provider',
			'FULL_SETTINGS' => 'Full Settings',
			'UPDATE' => 'Update',

			'SMART_ALBUMS' => 'Inteligentne albumy',
			'SHARED_ALBUMS' => 'Udostępnione albumy',
			'ALBUMS' => 'Albumy',
			'PHOTOS' => 'Zdjęcia',
			'SEARCH_RESULTS' => 'Wyniki wyszukiwania',

			'RENAME' => 'Zmień nazwę',
			'RENAME_ALL' => 'Zamień zaznaczone',
			'MERGE' => 'Połącz z …',
			'MERGE_ALL' => 'Połącz zaznaczone',
			'MAKE_PUBLIC' => 'Ustaw jako publiczne',
			'SHARE_ALBUM' => 'Udostępnij album',
			'SHARE_PHOTO' => 'Udostępnij zdjęcie',
			'VISIBILITY_ALBUM' => 'Widoczność',
			'VISIBILITY_PHOTO' => 'Widoczność',
			'DOWNLOAD_ALBUM' => 'Pobierz album',
			'ABOUT_ALBUM' => 'O albumie',
			'DELETE_ALBUM' => 'Usuń album',
			'MOVE_ALBUM' => 'Przenieś album',
			'FULLSCREEN_ENTER' => 'Włącz pełny ekran',
			'FULLSCREEN_EXIT' => 'Wyłącz pełny rkran',

			'SHARING_ALBUM_USERS' => 'Udostępnij album',
			'WAIT_FETCH_DATA' => 'Proszę czekać, trwa pobieranie danych …',
			'SHARING_ALBUM_USERS_NO_USERS' => 'Brak użytkowników do udostępnienia albumu',
			'SHARING_ALBUM_USERS_LONG_MESSAGE' => 'Wybierz użytkowników aby udostępnić ten album',

			'DELETE_ALBUM_QUESTION' => 'Usuń album i zdjęcia',
			'KEEP_ALBUM' => 'Zatrzymaj album',
			'DELETE_ALBUM_CONFIRMATION' => 'Czy na pewno chcesz usunąć album „%s“ razem z zawartością ? Ta akcja jest nieodwracalna!',

			'DELETE_TAG_ALBUM_QUESTION' => 'Delete Album',
			'DELETE_TAG_ALBUM_CONFIRMATION' => 'Are you sure you want to delete the album „%s“ (any photos inside will not be deleted)? This action can’t be undone!',

			'DELETE_ALBUMS_QUESTION' => 'Usuń album wraz z zawartością',
			'KEEP_ALBUMS' => 'Zatrzymaj Albumy',
			'DELETE_ALBUMS_CONFIRMATION' => 'Czy na pewno usunąć %d zaznaczone albumy wraz z zawartością? Ta akcja jest nieodwracalna!',

			'DELETE_UNSORTED_CONFIRM' => 'Czy na pewno usunąć wszystkie zdjęcia z „Nieposortowane“? Ta operacja nie może zostać cofnięta!',
			'CLEAR_UNSORTED' => 'Wyczyść Nieposortowane',
			'KEEP_UNSORTED' => 'Zatrzymaj Nieposortowane',

			'EDIT_SHARING' => 'Edytuj udostępnianie',
			'MAKE_PRIVATE' => 'Oznacz jako prywatne',

			'CLOSE_ALBUM' => 'Zmaknij album',
			'CLOSE_PHOTO' => 'Zamknij zdjęcie',
			'CLOSE_MAP' => 'Zamknij mapę',

			'ADD' => 'Dodaj',
			'MOVE' => 'Przenieś do …',
			'MOVE_ALL' => 'Przenieś zaznaczone',
			'DUPLICATE' => 'Kopiuj',
			'DUPLICATE_ALL' => 'Kopiuj zaznaczone',
			'COPY_TO' => 'Kopiuj do …',
			'COPY_ALL_TO' => 'Kopiuj zaznaczone do …',
			'DELETE' => 'Usuń',
			'SAVE' => 'Save',
			'DELETE_ALL' => 'Usuń zaznaczone',
			'DOWNLOAD' => 'Pobierz',
			'DOWNLOAD_ALL' => 'Pobierz zaznaczone',
			'UPLOAD_PHOTO' => 'Wgraj zdjęcie',
			'IMPORT_LINK' => 'Importuj z adresu',
			'IMPORT_DROPBOX' => 'Importuj z Dropbox',
			'IMPORT_SERVER' => 'Importuj z serwera',
			'NEW_ALBUM' => 'Dodaj album',
			'NEW_TAG_ALBUM' => 'Dodaj album z tagami',
			'UPLOAD_TRACK' => 'Upload track',
			'DELETE_TRACK' => 'Delete track',

			'TITLE_NEW_ALBUM' => 'Wpisz tytuł dla nowego albumu:',
			'UNTITLED' => 'Bez nazwy',
			'UNSORTED' => 'Nieposortowane',
			'STARRED' => 'Oznaczone',
			'RECENT' => 'Ostatnie',
			'PUBLIC' => 'Publiczne',
			'NUM_PHOTOS' => 'Zdjęć',

			'CREATE_ALBUM' => 'Utwórz album',
			'CREATE_TAG_ALBUM' => 'Utwórz album z tagami',

			'STAR_PHOTO' => 'Oznacz',
			'STAR' => 'Oznacz',
			'UNSTAR' => 'Unstar',
			'STAR_ALL' => 'Oznacz zaznaczone',
			'UNSTAR_ALL' => 'Unstar Selected',
			'TAG' => 'Otaguj',
			'TAG_ALL' => 'Otaguj zaznaczone',
			'UNSTAR_PHOTO' => 'Cofnij oznaczenie',
			'SET_COVER' => 'Ustaw jako okładkę albumu',
			'REMOVE_COVER' => 'Usuń okładkę albumu',

			'FULL_PHOTO' => 'Otwórz oryginalne',
			'ABOUT_PHOTO' => 'Informacje o zdjęciu',
			'DISPLAY_FULL_MAP' => 'Mapa',
			'DIRECT_LINK' => 'Link bezpośredni',
			'DIRECT_LINKS' => 'Linki bezpośrednie',
			'QR_CODE' => 'QR Code',

			'ALBUM_ABOUT' => 'Informacje o albumie',
			'ALBUM_BASICS' => 'Informacje podstawowe',
			'ALBUM_TITLE' => 'Tytuł',
			'ALBUM_NEW_TITLE' => 'Edytuj tytuł albumu:',
			'ALBUMS_NEW_TITLE' => 'Wpisz tytuł dla %d wybranych albumów:',
			'ALBUM_SET_TITLE' => 'Zapisz',
			'ALBUM_DESCRIPTION' => 'Opis',
			'ALBUM_SHOW_TAGS' => 'Tagi do pokazania',
			'ALBUM_NEW_DESCRIPTION' => 'Edytuj opis albumu:',
			'ALBUM_SET_DESCRIPTION' => 'Zapisz',
			'ALBUM_NEW_SHOWTAGS' => 'Enter tags of photos that will be visible in this album:',
			'ALBUM_SET_SHOWTAGS' => 'Ustaw tagi do pokazania',
			'ALBUM_ALBUM' => 'Album',
			'ALBUM_CREATED' => 'Utworzone',
			'ALBUM_IMAGES' => 'Zdjęcia',
			'ALBUM_VIDEOS' => 'Filmy',
			'ALBUM_SUBALBUMS' => 'Albumy podrzędne',
			'ALBUM_SHARING' => 'Udostępnianie',
			'ALBUM_SHR_YES' => 'TAK',
			'ALBUM_SHR_NO' => 'Nie',
			'ALBUM_PUBLIC' => 'Publiczny',
			'ALBUM_PUBLIC_EXPL' => 'Anonymous users can access this album, subject to the restrictions below.',
			'ALBUM_FULL' => 'Oryginalne zdjęcia',
			'ALBUM_FULL_EXPL' => 'Dostepne są zdjęcia oryginalnej rozdzielczności.',
			'ALBUM_HIDDEN' => 'Ukryty',
			'ALBUM_HIDDEN_EXPL' => 'Anonymous users need a direct link to access this album.',
			'ALBUM_MARK_NSFW' => 'Oznacz album jako poufny',
			'ALBUM_UNMARK_NSFW' => 'Odznacz album jako poufny',
			'ALBUM_NSFW' => 'Poufny',
			'ALBUM_NSFW_EXPL' => 'Album zawiera poufne informacje.',
			'ALBUM_DOWNLOADABLE' => 'Pobieranie',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Anonymous users can download this album.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Udostępnianie',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Anonymous users can see social media sharing links.',
			'ALBUM_PASSWORD' => 'Hasło',
			'ALBUM_PASSWORD_PROT' => 'Zabezpieczony',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Anonymous users need a shared password to access this album.',
			'ALBUM_PASSWORD_REQUIRED' => 'Album chroniony jest hasłem. Wpisz hasło aby zobaczyć zawartość:',
			'ALBUM_MERGE' => 'Czy na pewno połączyć ten album „%1$s“ z albumem „%2$s“?',
			'ALBUMS_MERGE' => 'Czy na pewno połączyć zaznaczone albumy z „%s“?',
			'MERGE_ALBUM' => 'Połącz albumy',
			'DONT_MERGE' => 'Anuluj',
			'ALBUM_MOVE' => 'Czy na pewno przenieść album „%1$s“ do albumu „%2$s“?',
			'ALBUMS_MOVE' => 'Czy na pewno przenieść zaznaczone albumy do albumu „%s“?',
			'MOVE_ALBUMS' => 'Przenieś albumy',
			'NOT_MOVE_ALBUMS' => 'Anuluj',
			'ROOT' => 'Albumy',
			'ALBUM_REUSE' => 'Prawo do wykorzystania',
			'ALBUM_LICENSE' => 'Licencja',
			'ALBUM_SET_LICENSE' => 'Zapisz',
			'ALBUM_LICENSE_HELP' => 'Potrzebujesz pomocy?',
			'ALBUM_LICENSE_NONE' => 'Brak',
			'ALBUM_RESERVED' => 'Wszelkie prawa zastrzeżone',
			'ALBUM_SET_ORDER' => 'Zapisz',
			'ALBUM_ORDERING' => 'Sortowanie',
			'ALBUM_OWNER' => 'Owner',

			'PHOTO_ABOUT' => 'Informacje o zdjęciu',
			'PHOTO_BASICS' => 'Informacje podstawowe',
			'PHOTO_TITLE' => 'Tytuł',
			'PHOTO_NEW_TITLE' => 'Wpisz nowy tytuł:',
			'PHOTO_SET_TITLE' => 'Ustaw tytuł',
			'PHOTO_UPLOADED' => 'Wgrany',
			'PHOTO_DESCRIPTION' => 'Opis',
			'PHOTO_NEW_DESCRIPTION' => 'Wpisz nowy opis:',
			'PHOTO_SET_DESCRIPTION' => 'Ustaw opis',
			'PHOTO_NEW_LICENSE' => 'Dodaj licencję',
			'PHOTO_SET_LICENSE' => 'Ustaw licencję',
			'PHOTO_LICENSE' => 'Licencja',
			'PHOTO_LICENSE_HELP' => 'Need help choosing?',
			'PHOTO_REUSE' => 'Ponowne wykorzystanie',
			'PHOTO_LICENSE_NONE' => 'Brak',
			'PHOTO_RESERVED' => 'Wszelkie prawa zastrzeżone',
			'PHOTO_LATITUDE' => 'Długość geograficzna',
			'PHOTO_LONGITUDE' => 'Szerokość geograficzna',
			'PHOTO_ALTITUDE' => 'Wysokość',
			'PHOTO_IMGDIRECTION' => 'Kierunek',
			'PHOTO_LOCATION' => 'Lokalizacja',
			'PHOTO_IMAGE' => 'Zdjęcie',
			'PHOTO_VIDEO' => 'Film',
			'PHOTO_SIZE' => 'Rozmiar',
			'PHOTO_FORMAT' => 'Format',
			'PHOTO_RESOLUTION' => 'Rozdzielczość',
			'PHOTO_DURATION' => 'Czas trwania',
			'PHOTO_FPS' => 'Przepustowość klatek/sek',
			'PHOTO_TAGS' => 'Tagi',
			'PHOTO_NOTAGS' => 'Brak Tagów',
			'PHOTO_NEW_TAGS' => 'Wpisz tagi rozdzielając je przecinkiem:',
			'PHOTOS_NEW_TAGS' => 'Wpisz tagi dla %d zaznaczonych zdjęć. Istniejące tagi zostaną nadpisane. Możesz wpisać więcej tagów rozdzielając je przecinkiem:',
			'PHOTO_SET_TAGS' => 'Zapisz',
			'PHOTO_CAMERA' => 'Aparat',
			'PHOTO_CAPTURED' => 'Zrzut',
			'PHOTO_MAKE' => 'Marka',
			'PHOTO_TYPE' => 'Typ/Model',
			'PHOTO_LENS' => 'Obiektyw',
			'PHOTO_SHUTTER' => 'Szybkość migawki',
			'PHOTO_APERTURE' => 'Przysłona',
			'PHOTO_FOCAL' => 'Ogniskowa',
			'PHOTO_ISO' => 'ISO %s',
			'PHOTO_SHARING' => 'Udostępnianie',
			'PHOTO_SHR_PUBLIC' => 'Publiczne',
			'PHOTO_SHR_ALB' => 'Tak (album)',
			'PHOTO_SHR_PHT' => 'Tak (zdjęcie)',
			'PHOTO_SHR_NO' => 'Nie',
			'PHOTO_DELETE' => 'Usuń Zdjęcie',
			'PHOTO_KEEP' => 'Anuluj',
			'PHOTO_DELETE_CONFIRMATION' => 'Czy na pewno usunąć zdjęcie „%s“? Akcja jest nieodwracalna!',
			'PHOTO_DELETE_ALL' => 'Czy na pewno usunąć %d zaznaczone zdjęcia? Akcja jest nieodwracalna!',
			'PHOTOS_NEW_TITLE' => 'Wpisz tytuł dla %d zaznaczonych zdjęć:',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Zdjęcie znajduje się w albumie publicznym. Aby ustawić je jako prywatne/publiczne, edytuj ustawienie widoczności w albumie, w którym zdjęcie się znajduje.',
			'PHOTO_SHOW_ALBUM' => 'Pokaż album',
			'PHOTO_PUBLIC' => 'Publiczne',
			'PHOTO_PUBLIC_EXPL' => 'Anonymous users can view this photo, subject to the restrictions below.',
			'PHOTO_FULL' => 'Originalne zdjęcia',
			'PHOTO_FULL_EXPL' => 'Dostępne są zdjęcia w pełnej rozdzielczości.',
			'PHOTO_HIDDEN' => 'Ukryty',
			'PHOTO_HIDDEN_EXPL' => 'Album zobaczyć mogą TYLKO posiadający link bezpośredni.',
			'PHOTO_DOWNLOADABLE' => 'Pobieranie',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Odwiedzający galerię mogą pobierać zdjęcie.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Udostępnianie',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Widoczne są dodatkowe ikony społecznościowe.',
			'PHOTO_PASSWORD_PROT' => 'Zabezpieczony',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Dostęp do zdjęcia zabezpiecza hasło.',
			'PHOTO_EDIT_SHARING_TEXT' => 'Ustawienia udostępniania tego zdjęcia zostaną zmienione na następujące:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Ponieważ zdjęcie znajduje się w albumie publicznym, dzieli jego ustawienia widoczności. Aktualna wartość widoczna jest poniżej (tylko informacyjnie).',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'Widoczność zdjęcia można dostosować używając globalnych ustawień Lychee. Aktualna wartość widoczna jest poniżej (tylko informacyjnie).',

			'LOADING' => 'Wczytywanie',
			'ERROR' => 'Błąd',
			'ERROR_TEXT' => 'Ups, wygląda na to że coś poszło nie tak. Odśwież stronę i spróbuj ponownie!',
			'ERROR_DB_1' => 'Brak dostępu do bazy danych. Sprawdź ponownie nazwę hosta, użytkownika oraz hasło, i upewnij się że Twoja aktualna lokalizacja pozwala na połączenie z bazą.',
			'ERROR_DB_2' => 'Nie można utworzyć bazy danych. Sprawdź ponownie nazwę hosta, użytkownika oraz hasło, i upewnij się że użytkownik posiada niezbędne prawa modyfikowania zawartości w bazie danych.',
			'ERROR_UNKNOWN' => 'Wystąpił nieoczekiwany błąd. Spróbuj ponownie i sprawdź swoją instalację oraz serwer. Przejrzyj plik README dla bardziej szczegółowych informacji.',
			'ERROR_LOGIN' => 'Nie można zapisać loginu. Spróbuj ponownie przy użyciu innej nazwy użytkownika oraz hasła!',
			'ERROR_MAP_DEACTIVATED' => 'Funkcja mapy została wyłączona w ustawieniach.',
			'ERROR_SEARCH_DEACTIVATED' => 'Funkcja wyszkukiwania została wyłączona w ustawieniach.',
			'SUCCESS' => 'OK',
			'RETRY' => 'Ponów',

			'SETTINGS_SUCCESS_LOGIN' => 'Zaktualizowano informacje o loginie.',
			'SETTINGS_SUCCESS_SORT' => 'Zaktualizowano kolejność sortowania.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Zaktualizowano klucz Dropbox.',
			'SETTINGS_SUCCESS_LANG' => 'Zaktualizowano język',
			'SETTINGS_SUCCESS_LAYOUT' => 'Zaktualizowano układ',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'EXIF Overlay setting updated',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Zaktualizowano publiczne wyszukiwanie',
			'SETTINGS_SUCCESS_LICENSE' => 'Zaktualizowano domyślną licencję',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Zaktualizowano ustawienia wyświetlania mapy',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Zaktualizowano ustawienia wyświetlania mapy dla albumów publicznych',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Zaktualizowano ustawienia dostawcy map',
			'SETTINGS_SUCCESS_CSS' => 'Stylesheets updated',
			'SETTINGS_SUCCESS_UPDATE' => 'Settings updated successfully',
			'SETTINGS_DROPBOX_KEY' => 'Dropbox API Key',
			'SETTINGS_ADVANCED_WARNING_EXPL' => 'Changing these advanced settings can be harmful to the stability, security and performance of this application. You should only modify them if you are sure of what you are doing.',
			'SETTINGS_ADVANCED_SAVE' => 'Save my modifications, I accept the risk!',

			'U2F_NOT_SUPPORTED' => 'Brak obsługi U2F. Przepraszamy.',
			'U2F_NOT_SECURE' => 'Środowisko nie zostało zabezpieczone. U2F nie jest dostępne.',
			'U2F_REGISTER_KEY' => 'Zarejestruj nowe urządzenie.',
			'U2F_REGISTRATION_SUCCESS' => 'Rejestracja pomyślna!',
			'U2F_AUTHENTIFICATION_SUCCESS' => 'Autoryzacja pomyślna!',
			'U2F_CREDENTIALS' => 'Dane uwierzytelniające',
			'U2F_CREDENTIALS_DELETED' => 'Usunięto dane uwierzytelniające!',

			'NEW_PHOTOS_NOTIFICATION' => 'Send new photos notification emails.',
			'SETTINGS_SUCCESS_NEW_PHOTOS_NOTIFICATION' => 'New photos notification updated',
			'USER_EMAIL_INSTRUCTION' => 'Add your email below to enable receiving email notifications.<br />To stop receiving emails, simply remove your email below.',

			'DB_INFO_TITLE' => 'Uzupełnij dane niezbędne do połączenia z bazą danych:',
			'DB_INFO_HOST' => 'Host (opcjonalnie)',
			'DB_INFO_USER' => 'Użytkownik',
			'DB_INFO_PASSWORD' => 'Hasło',
			'DB_INFO_TEXT' => 'Standardowo Lychee utworzy własną bazę. Zamiast tworzyć nową, wpisz dane istniejącej poniżej:',
			'DB_NAME' => 'Nazwa (opcjonalnie)',
			'DB_PREFIX' => 'Prefix tabeli (opcjonalnie)',
			'DB_CONNECT' => 'Połącz',

			'LOGIN_TITLE' => 'Wpisz nazwę użytkownika oraz hasło dla swojej instalacji:',
			'LOGIN_USERNAME' => 'Nowa nazwa użytkownika',
			'LOGIN_PASSWORD' => 'Nowe hasło',
			'LOGIN_PASSWORD_CONFIRM' => 'Potwierdź nowe hasło',
			'LOGIN_CREATE' => 'Utwórz login',

			'PASSWORD_TITLE' => 'Wpisz aktualne dane dostępowe:',
			'PASSWORD_CURRENT' => 'Aktualne hasło',
			'PASSWORD_TEXT' => 'Twoja nazwa użytkownika oraz hasło zostaną zmienione na następujące:',
			'PASSWORD_CHANGE' => 'Zmień login',

			'EDIT_SHARING_TITLE' => 'Edytuj udostępnianie',
			'EDIT_SHARING_TEXT' => 'Ustawienia udostępniania zostaną zmienione na następujące:',
			'SHARE_ALBUM_TEXT' => 'Album zostanie udostępniony z następującymi ustawieniami:',

			'SORT_ALBUM_BY' => 'Sortuj albumy według pola %1$s w kolejności %2$s',

			'SORT_ALBUM_SELECT_1' => 'data utworzenia',
			'SORT_ALBUM_SELECT_2' => 'tytuł',
			'SORT_ALBUM_SELECT_3' => 'opis',
			'SORT_ALBUM_SELECT_4' => 'publiczny',
			'SORT_ALBUM_SELECT_5' => 'Latest Take Date',
			'SORT_ALBUM_SELECT_6' => 'Oldest Take Date',

			'SORT_PHOTO_BY' => 'Sortuj zdjęcia według pola %1$s w kolejności %2$s',

			'SORT_PHOTO_SELECT_1' => 'data dodania',
			'SORT_PHOTO_SELECT_2' => 'Take Date',
			'SORT_PHOTO_SELECT_3' => 'tytuł',
			'SORT_PHOTO_SELECT_4' => 'opis',
			'SORT_PHOTO_SELECT_5' => 'publiczny',
			'SORT_PHOTO_SELECT_6' => 'oznaczony',
			'SORT_PHOTO_SELECT_7' => 'format',

			'SORT_ASCENDING' => 'rosnącej',
			'SORT_DESCENDING' => 'malejącej',
			'SORT_CHANGE' => 'Zmień sortowanie',

			'DROPBOX_TITLE' => 'Ustaw klucz Dropbox',
			'DROPBOX_TEXT' => "In order to import photos from your Dropbox, you need a valid drop-ins app key from <a href='https://www.dropbox.com/developers/apps/create'>their website</a>. Generate yourself a personal key and enter it below:",

			'LANG_TEXT' => 'Zmień język na:',
			'LANG_TITLE' => 'Zmień język',

			'CSS_TEXT' => 'Personalize CSS:',
			'CSS_TITLE' => 'Change CSS',
			'PUBLIC_SEARCH_TEXT' => 'Public search allowed:',
			'OVERLAY_TYPE' => 'Photo overlay:',
			'OVERLAY_NONE' => 'None',
			'OVERLAY_EXIF' => 'EXIF data',
			'OVERLAY_DESCRIPTION' => 'Description',
			'OVERLAY_DATE' => 'Date taken',
			'MAP_DISPLAY_TEXT' => 'Enable maps (provided by OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Enable maps for public albums (provided by OpenStreetMap):',
			'MAP_PROVIDER' => 'Provider of OpenStreetMap tiles:',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (no HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (no HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (no HiDPI)',
			'MAP_PROVIDER_RRZE' => 'University of Erlangen, Germany (only HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Include photos of subalbums on map:',
			'LOCATION_DECODING' => 'Decode GPS data into location name',
			'LOCATION_SHOW' => 'Pokaż lokalizację',
			'LOCATION_SHOW_PUBLIC' => 'Show location name for public mode',

			'LAYOUT_TYPE' => 'Układ zdjęć:',
			'LAYOUT_SQUARES' => 'Kwadratowe miniaturki',
			'LAYOUT_JUSTIFIED' => 'Aspekt, wyrównane',
			'LAYOUT_UNJUSTIFIED' => 'Aspekt, bez wyrównania',
			'SET_LAYOUT' => 'Zmień układ',

			'NSFW_VISIBLE_TEXT_1' => 'Ustaw poufne albumy domyślnie widoczne.',
			'NSFW_VISIBLE_TEXT_2' => 'Jeśli album jest publiczny, wciąż jest dostępny, jedynie został ukryty do przeglądania i <b>może zostać pokazany poprzez naciśnięcie <kbd>H</kbd></b>.',
			'SETTINGS_SUCCESS_NSFW_VISIBLE' => 'Domyślne ustawienie dotyczące widoczności albumów poufnych ostało zaktualizowane.',

			'VIEW_NO_RESULT' => 'Brak wyników',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Brak albumów publicznych',
			'VIEW_NO_CONFIGURATION' => 'Brak konfiguracji',
			'VIEW_PHOTO_NOT_FOUND' => 'Zdjęcie nie zostało znalezione',

			'NO_TAGS' => 'Brak tagów',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Możesz już zarządzać nowymi zdjęciami.',
			'UPLOAD_COMPLETE' => 'Zakońcozno wgrywanie',
			'UPLOAD_COMPLETE_FAILED' => 'Nie udało się wgrać jednego lub więcej plików.',
			'UPLOAD_IMPORTING' => 'Importowanie',
			'UPLOAD_IMPORTING_URL' => 'Importowanie URL',
			'UPLOAD_UPLOADING' => 'Wgrywanie',
			'UPLOAD_FINISHED' => 'Ukończono',
			'UPLOAD_PROCESSING' => 'Przetwarzanie',
			'UPLOAD_FAILED' => 'Nie udało się',
			'UPLOAD_FAILED_ERROR' => 'Wgrywanie nie powiodło się. Serwer zwrócił błąd!',
			'UPLOAD_FAILED_WARNING' => 'Wgrywanie nie powiodło się. Serwer zwrócił ostrzeżenie!',
			'UPLOAD_CANCELLED' => 'Cancelled',
			'UPLOAD_SKIPPED' => 'Pominięto',
			'UPLOAD_UPDATED' => 'Updated',
			'UPLOAD_IMPORT_SKIPPED_DUPLICATE' => 'This photo has been skipped because it’s already in your library.',
			'UPLOAD_IMPORT_RESYNCED_DUPLICATE' => 'This photo has been skipped because it’s already in your library, but its metadata has been updated.',
			'UPLOAD_ERROR_CONSOLE' => 'Proszę przejrzeć konsolę błędów przeglądarki aby spradzić szczegóły.',
			'UPLOAD_UNKNOWN' => 'Server returned an unknown response. Please take a look at the console of your browser for further details.',
			'UPLOAD_ERROR_UNKNOWN' => 'Wgrywanie nie powiodło się. Server returned an unkown error!',
			'UPLOAD_ERROR_POSTSIZE' => 'Wgrywanie nie powiodło się. Wartość  post_max_size w PHP jest zbyt niska!',
			'UPLOAD_ERROR_FILESIZE' => 'Wgrywanie nie powiodło się. Wartość upload_max_filesize w PHP jest zbyt niska!',
			'UPLOAD_IN_PROGRESS' => 'Lychee jest w trakcie wgrywania!',
			'UPLOAD_IMPORT_WARN_ERR' => 'The import has been finished, but returned warnings or errors. Please take a look at the log (Settings -> Show Log) for further details.',
			'UPLOAD_IMPORT_COMPLETE' => 'Import complete',
			'UPLOAD_IMPORT_INSTR' => 'Please enter the direct link to a photo to import it:',
			'UPLOAD_IMPORT' => 'Import',
			'UPLOAD_IMPORT_SERVER' => 'Importing from server',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Folder empty or no readable files to process. Please take a look at the log (Settings -> Show Log) for further details.',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'This action will import all photos, folders and sub-folders which are located in the following directory.',
			'UPLOAD_ABSOLUTE_PATH' => 'Absolute path to directory',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Could not start import because the folder was empty!',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Delete originals',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'Original files will be deleted after the import when possible.',
			'UPLOAD_IMPORT_VIA_SYMLINK' => 'Symbolic links',
			'UPLOAD_IMPORT_VIA_SYMLINK_EXPL' => 'Import files using symbolic links to originals.',
			'UPLOAD_IMPORT_SKIP_DUPLICATES' => 'Skip duplicates',
			'UPLOAD_IMPORT_SKIP_DUPLICATES_EXPL' => 'Existing media files are skipped.',
			'UPLOAD_IMPORT_RESYNC_METADATA' => 'Re-sync metadata',
			'UPLOAD_IMPORT_RESYNC_METADATA_EXPL' => 'Update metadata of existing media files.',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'The import process on the server is approaching the memory limit and may end up being terminated prematurely.',
			'UPLOAD_WARNING' => 'Warning',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'The given path is not a readable directory!',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'The given path is a reserved path of Lychee!',
			'UPLOAD_IMPORT_FAILED' => 'Could not import the file!',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Unsupported file type!',
			'UPLOAD_IMPORT_CANCELLED' => 'Import cancelled',

			'ABOUT_SUBTITLE' => 'Self-hosted photo-management done right',
			'ABOUT_DESCRIPTION' => '<a target=\'_blank\' href=\'%s\'>Lychee</a> is a free photo-management tool, which runs on your server or web-space. Installing is a matter of seconds. Upload, manage and share photos like from a native application. Lychee comes with everything you need and all your photos are stored securely.',
			'FOOTER_COPYRIGHT' => 'All images on this website are subject to Copyright by %1$s &copy; %2$s',
			'HOSTED_WITH_LYCHEE' => 'Hosted with Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Kopiuj do schowka',
			'URL_COPIED_TO_CLIPBOARD' => 'Skopiowano URL do schowka!',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Direct links to image files:',
			'PHOTO_MEDIUM' => ' Średnie',
			'PHOTO_MEDIUM_HIDPI' => 'Medium HiDPI',
			'PHOTO_SMALL' => 'Miniaturka',
			'PHOTO_SMALL_HIDPI' => 'Thumb HiDPI',
			'PHOTO_THUMB' => 'Kwadratowa miniaturka',
			'PHOTO_THUMB_HIDPI' => 'Square thumb HiDPI',
			'PHOTO_THUMBNAIL' => 'Photo thumbnail',
			'PHOTO_LIVE_VIDEO' => 'Video part of live-photo',
			'PHOTO_VIEW' => 'Lychee Photo View:',

			'PHOTO_EDIT_ROTATECWISE' => 'Obróć w prawo',
			'PHOTO_EDIT_ROTATECCWISE' => 'Obróć w lewo',

			'ERROR_GPX' => 'Error loading GPX file: ',
			'ERROR_EITHER_ALBUMS_OR_PHOTOS' => 'Please select either albums or photos!',
			'ERROR_COULD_NOT_FIND' => 'Could not find what you want.',
			'ERROR_INVALID_EMAIL' => 'Not a valid email address.',
			'EMAIL_SUCCESS' => 'Email updated!',
			'ERROR_PHOTO_NOT_FOUND' => 'Error: photo %s not found !',
			'ERROR_EMPTY_USERNAME' => 'new username cannot be empty.',
			'ERROR_PASSWORD_DOES_NOT_MATCH' => 'new password does not match.',
			'ERROR_EMPTY_PASSWORD' => 'new password cannot be empty.',
			'ERROR_SELECT_ALBUM' => 'Select an album to share!',
			'ERROR_SELECT_USER' => 'Select a user to share with!',
			'ERROR_SELECT_SHARING' => 'Select a sharing to remove!',
			'SHARING_SUCCESS' => 'Sharing updated!',
			'SHARING_REMOVED' => 'Sharing removed!',
			'USER_CREATED' => 'User created!',
			'USER_DELETED' => 'User deleted!',
			'USER_UPDATED' => 'User updated!',
			'ENTER_EMAIL' => 'Enter your email address:',
			'ERROR_ALBUM_JSON_NOT_FOUND' => 'Error: Album json not found!',
			'ERROR_ALBUM_NOT_FOUND' => 'Error: album %s not found',
			'ERROR_DROPBOX_KEY' => 'Error: Dropbox key not set',
			'ERROR_SESSION' => 'Session expired.',
			'CAMERA_DATE' => 'Camera date',
			'NEW_PASSWORD' => 'new password',
			'ALLOW_UPLOADS' => 'Allow uploads',
			'RESTRICTED_ACCOUNT' => 'Restricted account',
			'OSM_CONTRIBUTORS' => 'OpenStreetMap contributors',
		];

		return $locale;
	}
}
