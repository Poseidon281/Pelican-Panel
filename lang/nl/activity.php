<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Inloggen mislukt',
        'success' => 'Ingelogd',
        'password-reset' => 'Wachtwoord resetten',
        'reset-password' => 'Wachtwoord reset aangevraagd',
        'checkpoint' => 'Tweestapsverificatie aangevraagd',
        'recovery-token' => 'Tweestapsherstel token gebruikt',
        'token' => 'Tweestapsverificatie uitdaging opgelost',
        'ip-blocked' => 'Aanvraag geblokkeerd van niet-genoteerd IP-adres voor :identifier',
        'sftp' => [
            'fail' => 'Fout bij SFTP inloggen',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-mailadres veranderd van :old naar :new',
            'password-changed' => 'Wachtwoord gewijzigd',
        ],
        'api-key' => [
            'create' => 'Nieuwe API-sleutel aangemaakt :identifier',
            'delete' => 'API-sleutel verwijderd: identifier',
        ],
        'ssh-key' => [
            'create' => 'SSH sleutel :fingerprint toegevoegd aan account',
            'delete' => 'SSH sleutel :fingerprint verwijderd van account',
        ],
        'two-factor' => [
            'create' => 'Tweestapsverificatie ingeschakeld',
            'delete' => 'Tweestapsverificatie uitgeschakeld',
        ],
    ],
    'server' => [
        'reinstall' => 'Opnieuw geinstalleerde server',
        'console' => [
            'command' => '":command" is uitgevoerd op de server',
        ],
        'power' => [
            'start' => 'De server is gestart',
            'stop' => 'De server is gestopt',
            'restart' => 'De server is herstart',
            'kill' => 'De server is gekilled',
        ],
        'backup' => [
            'download' => ':name back-up is gedownload',
            'delete' => 'De :name back-up verwijderd',
            'restore' => 'De :name back-up hersteld (verwijderde bestanden: :truncate)',
            'restore-complete' => 'Herstel van de :name back-up voltooid',
            'restore-failed' => 'Gefaald om de backup :name te herstellen',
            'start' => 'Het maken van backup :name is gestart',
            'complete' => 'De back-up :name gemarkeerd als voltooid',
            'fail' => 'De backup :name has failed',
            'lock' => 'Locked the :name backup',
            'unlock' => 'Unlocked the :name backup',
        ],
        'database' => [
            'create' => 'Database :name gemaakt',
            'rotate-password' => 'Wachtwoord geroteerd voor database :name',
            'delete' => 'Database :name verwijderd',
        ],
        'file' => [
            'compress_one' => 'Compressed :directory:file',
            'compress_other' => 'Compressed :count files in :directory',
            'read' => 'De inhoud van :file is bekeken',
            'copy' => 'Kopie gemaakt van :file',
            'create-directory' => 'Map :directory:name aangemaakt',
            'decompress' => 'Decompressed :files in :directory',
            'delete_one' => 'Verwijderd :directory:files.0',
            'delete_other' => 'Verwijderde :count bestanden in :directory',
            'download' => ':file gedownload',
            'pull' => 'Een extern bestand gedownload van :url naar :directory',
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
