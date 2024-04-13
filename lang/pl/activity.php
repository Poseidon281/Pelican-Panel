<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Nie udało się zalogować',
        'success' => 'Zalogowano',
        'password-reset' => 'Zmień Hasło',
        'reset-password' => 'Zażądano zresetowania hasła',
        'checkpoint' => 'Zażądano uwierzytelnienia dwuetapowego',
        'recovery-token' => 'Użyto tokena odzyskiwania uwierzytelnienia dwuetapowego',
        'token' => 'Udane uwierzytelnienie dwuetapowe',
        'ip-blocked' => 'Zablokowano żądanie z nieuwzględnionego adresu IP dla :identifer',
        'sftp' => [
            'fail' => 'Nie udało się zalogować do SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Zmieniono adres e-mail z :old na :new',
            'password-changed' => 'Hasło zostało zmienione',
        ],
        'api-key' => [
            'create' => 'Stwórz nowy klucz API',
            'delete' => 'Usuń klucz API',
        ],
        'ssh-key' => [
            'create' => 'Dodaj klucz SSH do konta',
            'delete' => 'Usuń klucz SSH z konta',
        ],
        'two-factor' => [
            'create' => 'Właczono autoryzację dwuetapową',
            'delete' => 'Wyłączona autoryzacja 2-fa',
        ],
    ],
    'server' => [
        'reinstall' => 'Zainstalowano ponownie serwer',
        'console' => [
            'command' => 'Wykonano ":command" na serwerze',
        ],
        'power' => [
            'start' => 'Uruchomiono serwer',
            'stop' => 'Zatrzymano serwer',
            'restart' => 'Uruchomiono ponownie serwer',
            'kill' => 'Zatrzymano proces serwera',
        ],
        'backup' => [
            'download' => 'Pobrano kopię zapasową o nazwie :name',
            'delete' => 'Usunięto kopie zapasową',
            'restore' => 'Przywrócono kopię zapasową o nazwie :name (usunięte pliki: :truncate)',
            'restore-complete' => 'Zakończono przywracanie kopii zapasowej o nazwie :name',
            'restore-failed' => 'Nie udało się zakończyć przywracania kopii zapasowej o nazwie :name',
            'start' => 'Rozpoczęto tworzenie kopii zapasowej',
            'complete' => 'Tworzenie kopii zapasowej zakończyło się pomyślnie',
            'fail' => 'Tworzenie kopii zapasowej nie powiodło się',
            'lock' => 'Zablokowano kopie zapasową',
            'unlock' => 'Odblokowano kopię zapasową',
        ],
        'database' => [
            'create' => 'Utwórz nową bazę danych',
            'rotate-password' => 'Zmieniono hasło dla bazy danych o nazwie :name',
            'delete' => 'Usunięto bazę danych o nazwie :name',
        ],
        'file' => [
            'compress_one' => 'Compressed :directory:file',
            'compress_other' => 'Compressed :count files in :directory',
            'read' => 'Viewed the contents of :file',
            'copy' => 'Created a copy of :file',
            'create-directory' => 'Stwórz Folder',
            'decompress' => 'Decompressed :files in :directory',
            'delete_one' => 'Deleted :directory:files.0',
            'delete_other' => 'Deleted :count files in :directory',
            'download' => 'Downloaded :file',
            'pull' => 'Downloaded a remote file from :url to :directory',
            'rename_one' => 'Renamed :directory:files.0.from to :directory:files.0.to',
            'rename_other' => 'Renamed :count files in :directory',
            'write' => 'Wrote new content to :file',
            'upload' => 'Began a file upload',
            'uploaded' => 'Uploaded :directory:file',
        ],
        'sftp' => [
            'denied' => 'Blocked SFTP access due to permissions',
            'create_one' => 'Created :files.0',
            'create_other' => 'Created :count new files',
            'write_one' => 'Modified the contents of :files.0',
            'write_other' => 'Modified the contents of :count files',
            'delete_one' => 'Deleted :files.0',
            'delete_other' => 'Deleted :count files',
            'create-directory_one' => 'Created the :files.0 directory',
            'create-directory_other' => 'Created :count directories',
            'rename_one' => 'Renamed :files.0.from to :files.0.to',
            'rename_other' => 'Renamed or moved :count files',
        ],
        'allocation' => [
            'create' => 'Added :allocation to the server',
            'notes' => 'Updated the notes for :allocation from ":old" to ":new"',
            'primary' => 'Set :allocation as the primary server allocation',
            'delete' => 'Deleted the :allocation allocation',
        ],
        'schedule' => [
            'create' => 'Created the :name schedule',
            'update' => 'Updated the :name schedule',
            'execute' => 'Manually executed the :name schedule',
            'delete' => 'Deleted the :name schedule',
        ],
        'task' => [
            'create' => 'Created a new ":action" task for the :name schedule',
            'update' => 'Updated the ":action" task for the :name schedule',
            'delete' => 'Deleted a task for the :name schedule',
        ],
        'settings' => [
            'rename' => 'Renamed the server from :old to :new',
            'description' => 'Changed the server description from :old to :new',
        ],
        'startup' => [
            'edit' => 'Changed the :variable variable from ":old" to ":new"',
            'image' => 'Updated the Docker Image for the server from :old to :new',
        ],
        'subuser' => [
            'create' => 'Added :email as a subuser',
            'update' => 'Updated the subuser permissions for :email',
            'delete' => 'Removed :email as a subuser',
        ],
    ],
];
