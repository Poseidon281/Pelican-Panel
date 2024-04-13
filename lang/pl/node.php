<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Podany adres FQDN lub IP nie jest poprawnym adresem IP.',
        'fqdn_required_for_ssl' => 'A fully qualified domain name that resolves to a public IP address is required in order to use SSL for this node.',
    ],
    'notices' => [
        'allocations_added' => 'Allocations have successfully been added to this node.',
        'node_deleted' => 'Pomyślnie usunięto węzeł z panelu.',
        'node_created' => 'Pomyślnie utworzono nowy węzeł. Możesz automatycznie skonfigurować demona na tej maszynie, odwiedzając zakładkę \'Konfiguracja\'. <strong>Przed dodaniem serwerów musisz najpierw przydzielić co najmniej jeden adres IP i port.</strong>',
        'node_updated' => 'Informacje o węźle zostały zaktualizowane. Jeśli jakiekolwiek ustawienia demona zostały zmienione, konieczne będzie jego ponowne uruchomienie, aby te zmiany zaczęły obowiązywać',
        'unallocated_deleted' => 'Usunięto wszystkie nieprzydzielone porty dla <code>:ip</code>',
    ],
];
