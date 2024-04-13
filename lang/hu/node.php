<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'A megadott FQDN vagy IP cím nem érvényes IP címet old fel.',
        'fqdn_required_for_ssl' => 'Az SSL használatához ezen a node-on egy nyilvános IP-címre feloldható FQDN-re van szükség.',
    ],
    'notices' => [
        'allocations_added' => 'Sikeresen hozzáadtad a allokációkat ehhez a node-hoz.',
        'node_deleted' => 'Sikeresen törölted a node-ot.',
        'node_created' => 'Sikeresen létrehoztál egy új node-ot. A daemon-t automatikusan konfigurálhatod a "Konfiguráció" fülön. <strong>Mielőtt új szervert készítenél, legalább egy IP címet és portot kell allokálnod.</strong>',
        'node_updated' => 'Node információk frissítve. Ha a daemon beállításait módosítottad, újra kell indítani a daemont a módosítások érvénybe léptetéséhez.',
        'unallocated_deleted' => 'Törölted a <code>:ip</code> összes ki nem osztott portját.',
    ],
];
