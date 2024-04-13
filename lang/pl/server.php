<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Chcesz usunąć domyślną alokację dla tego serwera, ale nie ma alternatywnej alokacji do wykorzystania.',
        'marked_as_failed' => 'Ten serwer został zidentyfikowany jako mający nieudaną wcześniejszą instalację. Nie można zmienić jego aktualnego statusu w tej sytuacji.',
        'bad_variable' => 'Wystąpił błąd walidacji zmiennych :name',
        'daemon_exception' => 'Wystąpił błąd podczas próby komunikacji z demonem, co spowodowało kod odpowiedzi HTTP/:code. Ten błąd został zarejestrowany. (ID żądania: :request_id)',
        'default_allocation_not_found' => 'Nie znaleziono żądanej domyślnej alokacji w alokacjach tego serwera.',
    ],
    'alerts' => [
        'startup_changed' => 'Zaktualizowano konfigurację startową tego serwera. Jeśli nastąpiła zmiana jajka dla tego serwera, zostanie przeprowadzona ponowna instalacja w tym momencie.',
        'server_deleted' => 'Serwer został pomyślnie usunięty z systemu.',
        'server_created' => 'Serwer został pomyślnie utworzony w panelu. Proszę poczekać kilka minut, aby demon zakończył instalację tego serwera.',
        'build_updated' => 'Zaktualizowano szczegóły konfiguracji dla tego serwera. Pewne zmiany mogą wymagać ponownego uruchomienia, aby zacząć obowiązywać.',
        'suspension_toggled' => 'Status zawieszenia serwera został zmieniony na :status',
        'rebuild_on_boot' => 'Ten serwer został oznaczony jako wymagający ponownej budowy kontenera Docker. Zostanie to wykonane przy następnym uruchomieniu serwera.',
        'install_toggled' => 'The installation status for this server has been toggled.',
        'server_reinstalled' => 'This server has been queued for a reinstallation beginning now.',
        'details_updated' => 'Server details have been successfully updated.',
        'docker_image_updated' => 'Successfully changed the default Docker image to use for this server. A reboot is required to apply this change.',
        'node_required' => 'You must have at least one node configured before you can add a server to this panel.',
        'transfer_nodes_required' => 'You must have at least two nodes configured before you can transfer servers.',
        'transfer_started' => 'Server transfer has been started.',
        'transfer_not_viable' => 'The node you selected does not have the required disk space or memory available to accommodate this server.',
    ],
];
