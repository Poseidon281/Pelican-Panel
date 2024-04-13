<?php

return [
    'daemon_connection_failed' => 'Er is een fout opgetreden tijdens het communiceren met de daemon wat resulteert in een HTTP/:code response code. Deze fout is opgeslagen.',
    'node' => [
        'servers_attached' => 'Een node moet geen actieve servers meer hebben voordat deze kan worden verwijderd.',
        'daemon_off_config_updated' => 'De daemonconfiguratie <strong>is bijgewerkt</strong>, er is echter een fout opgetreden bij het automatisch bijwerken van het configuratiebestand op de Daemon. U moet handmatig het configuratiebestand bijwerken (config.yml) voor de daemon om deze veranderingen toe te passen.',
    ],
    'allocations' => [
        'server_using' => 'Een server is momenteel toegewezen aan deze toewijzing. Een toewijzing kan alleen worden verwijderd als er momenteel geen server is toegewezen.',
        'too_many_ports' => 'Meer dan 1000 poorten binnen één bereik toevoegen wordt niet ondersteund.',
        'invalid_mapping' => 'De opgegeven toewijzing voor :port was ongeldig en kon niet worden verwerkt.',
        'cidr_out_of_range' => 'CIDR notatie staat alleen subnet masks toe tussen /25 en /32.',
        'port_out_of_range' => 'De poorten in een toewijzing moeten groter zijn dan 1024 en minder dan of gelijk zijn aan 65535.',
    ],
    'egg' => [
        'delete_has_servers' => 'Een egg met actieve servers gekoppeld kan niet worden verwijderd uit het paneel.',
        'invalid_copy_id' => 'De egg dat geselecteerd is om een script van te kopiëren bestaat niet, of kopieert een script zelf.',
        'has_children' => 'Deze egg is het hoofd van een of meer eggs. Verwijder deze eggs voor het verwijderen van deze egg.',
    ],
    'variables' => [
        'env_not_unique' => 'De omgevingsvariabele :name moet uniek zijn voor deze egg.',
        'reserved_name' => 'De omgevingsvariabele :name is beveiligd en kan niet worden toegewezen aan een variabele.',
        'bad_validation_rule' => 'De validatieregel ":rule" is geen geldige regel voor deze toepassing.',
    ],
    'importer' => [
        'json_error' => 'Er is een fout opgetreden bij het parsen van het JSON-bestand: :error.',
        'file_error' => 'Het opgegeven JSON-bestand is niet geldig.',
        'invalid_json_provided' => 'The JSON file provided is not in a format that can be recognized.',
    ],
    'subusers' => [
        'editing_self' => 'Editing your own subuser account is not permitted.',
        'user_is_owner' => 'You cannot add the server owner as a subuser for this server.',
        'subuser_exists' => 'A user with that email address is already assigned as a subuser for this server.',
    ],
    'databases' => [
        'delete_has_databases' => 'Cannot delete a database host server that has active databases linked to it.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'The maximum interval time for a chained task is 15 minutes.',
    ],
    'locations' => [
        'has_nodes' => 'Cannot delete a location that has active nodes attached to it.',
    ],
    'users' => [
        'node_revocation_failed' => 'Failed to revoke keys on <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No nodes satisfying the requirements specified for automatic deployment could be found.',
        'no_viable_allocations' => 'No allocations satisfying the requirements for automatic deployment were found.',
    ],
    'api' => [
        'resource_not_found' => 'The requested resource does not exist on this server.',
    ],
];
