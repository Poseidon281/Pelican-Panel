<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Η διεύθυνση FQDN ή IP που παρείχατε δεν επιλύει μια έγκυρη διεύθυνση IP.',
        'fqdn_required_for_ssl' => 'Ένα πλήρως αναγνωρισμένο domain name που επιλύει σε μια δημόσια διεύθυνση IP απαιτείται προκειμένου να χρησιμοποιηθεί SSL για αυτό το node.',
    ],
    'notices' => [
        'allocations_added' => 'Τα allocations προστέθηκαν με επιτυχία σε αυτό το node.',
        'node_deleted' => 'Το node αφαιρέθηκε με επιτυχία από το panel.',
        'node_created' => 'Το νέο node δημιουργήθηκε με επιτυχία. Μπορείτε να ρυθμίσετε αυτόματα το daemon σε αυτό το μηχάνημα, επισκεπτόμενοι την καρτέλα \'Διαμόρφωση\'. <strong>Για να μπορέσετε να προσθέσετε διακομιστές πρέπει πρώτα να διαθέσετε τουλάχιστον μία διεύθυνση IP και θύρα.</strong>',
        'node_updated' => 'Οι πληροφορίες του node έχουν ενημερωθεί. Αν έχει αλλάξει οποιαδήποτε ρύθμιση daemon, θα πρέπει να επανεκκινήσετε για να τεθούν σε ισχύ αυτές οι αλλαγές.',
        'unallocated_deleted' => 'Διαγράφηκαν όλες οι μη κατανεμημένες θύρες για <code>:ip</code>.',
    ],
];
