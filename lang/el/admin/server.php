<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Προσπαθείτε να διαγράψετε ένα προεπιλεγμένο allocation για αυτόν το διακομιστή, αλλά δεν υπάρχει εφεδρικό για χρήση.',
        'marked_as_failed' => 'Αυτός ο διακομιστής έχει επισημανθεί ότι απέτυχε σε προηγούμενη εγκατάσταση. Η τρέχουσα κατάσταση δεν μπορεί να ρυθμιστεί σε αυτή την κατάσταση.',
        'bad_variable' => 'Παρουσιάστηκε validation σφάλμα με τη μεταβλητή :name.',
        'daemon_exception' => 'Υπήρξε ένα exception κατά την προσπάθεια επικοινωνίας με το daemon ως αποτέλεσμα να υπάρχει κωδικός απόκρισης HTTP/:code. Αυτή η εξαίρεση έχει καταγραφεί. (αναγνωριστικό αιτήματος:request_id)',
        'default_allocation_not_found' => 'To προεπιλεγμένo allocation που ζητήθηκε δεν βρέθηκε στα allocations αυτού του διακομιστή.',
    ],
    'alerts' => [
        'startup_changed' => 'Η ρύθμιση παραμέτρων εκκίνησης για αυτόν το διακομιστή έχει ενημερωθεί. Αν το egg αυτού του διακομιστή έχει αλλάξει θα πραγματοποιηθεί επανεγκατάσταση τώρα.',
        'server_deleted' => 'Ο διακομιστής έχει διαγραφεί με επιτυχία από το σύστημα.',
        'server_created' => 'Ο διακομιστής δημιουργήθηκε με επιτυχία στο panel. Παρακαλώ επιτρέψτε στο daemon λίγα λεπτά να εγκαταστήσει πλήρως αυτόν τον διακομιστή.',
        'build_updated' => 'Οι λεπτομέρειες κατασκευής αυτού του διακομιστή έχουν ενημερωθεί. Ορισμένες αλλαγές μπορεί να απαιτούν επανεκκίνηση για να τεθούν σε ισχύ.',
        'suspension_toggled' => 'Η κατάσταση αναστολής του διακομιστή άλλαξε σε :status.',
        'rebuild_on_boot' => 'Αυτός ο διακομιστής έχει επισημανθεί ως Docker Container rebuild. Αυτό θα συμβεί την επόμενη φορά που θα ξεκινήσει ο διακομιστής.',
        'install_toggled' => 'Η κατάσταση εγκατάστασης για αυτόν το διακομιστή έχει ενεργοποιηθεί.',
        'server_reinstalled' => 'Αυτός ο διακομιστής έχει τεθεί σε αναμονή για επανεγκατάσταση τώρα.',
        'details_updated' => 'Οι λεπτομέρειες του διακομιστή ενημερώθηκαν με επιτυχία.',
        'docker_image_updated' => 'Η προεπιλεγμένη εικόνα Docker άλλαξε επιτυχώς για να χρησιμοποιηθεί για αυτόν το διακομιστή. Απαιτείται επανεκκίνηση για να εφαρμοστεί αυτή η αλλαγή.',
        'node_required' => 'Πρέπει να έχετε ρυθμίσει τουλάχιστον ένα node για να μπορέσετε να προσθέσετε ένα διακομιστή σε αυτόν το panel.',
        'transfer_nodes_required' => 'Πρέπει να έχετε τουλάχιστον δύο nodes για να μπορέσετε να μεταφέρετε διακομιστές.',
        'transfer_started' => 'Η μεταφορά του διακομιστή έχει ξεκινήσει.',
        'transfer_not_viable' => 'Το node που επιλέξατε δεν έχει τον απαιτούμενο χώρο στο δίσκο ή τη μνήμη διαθέσιμη για να φιλοξενήσει αυτόν το διακομιστή.',
    ],
];
