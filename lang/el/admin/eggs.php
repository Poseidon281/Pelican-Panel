<?php

return [
    'notices' => [
        'imported' => 'Επιτυχής εισαγωγή του Egg και των σχετικών μεταβλητών του.',
        'updated_via_import' => 'Αυτό το Egg ενημερώθηκε χρησιμοποιώντας το αρχείο που παρείχατε.',
        'deleted' => 'Διαγράφηκε με επιτυχία το egg που ζητήσατε από το panel.',
        'updated' => 'Η ρύθμιση παραμέτρων αυτού του egg έχουν ενημερωθεί με επιτυχία.',
        'script_updated' => 'Το σενάριο εγκατάστασης για τα egg έχει ενημερωθεί και θα εκτελείται όποτε εγκαθίστανται οι διακομιστές.',
        'egg_created' => 'Ένα νέο egg ορίστηκε με επιτυχία. Θα πρέπει να επανεκκινήσετε τυχόν εκτελούμενα daemons για να εφαρμόσετε αυτό το νέο Egg.',
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Η μεταβλητή ":variable" έχει διαγραφεί και δεν θα είναι πλέον διαθέσιμη στους διακομιστές μετά το rebuild.',
            'variable_updated' => 'Η μεταβλητή ":variable" έχει ενημερωθεί. Θα χρειαστεί να κάνετε rebuild όλους τους διακομιστές που χρησιμοποιούν αυτήν τη μεταβλητή για να εφαρμοστούν οι αλλαγές.',
            'variable_created' => 'Η νέα μεταβλητή δημιουργήθηκε και αντιστοιχίστηκε με επιτυχία σε αυτό το egg.',
        ],
    ],
    'descriptions' => [
        'name' => 'Ένα απλό, αναγνώσιμο για τον άνθρωπο όνομα για χρήση ως αναγνωριστικό για αυτό το egg.',
        'description' => 'Μια περιγραφή αυτού του Egg που θα εμφανίζεται στο panel όπως απαιτείται.',
        'uuid' => 'Αυτό είναι το παγκοσμίως μοναδικό αναγνωριστικό για αυτό το egg που τα wings χρησιμοποιούν ως αναγνωριστικό.',
        'author' => 'Ο δημιουργός αυτής της έκδοσης του Egg. Ανεβάζοντας μια νέα διαμόρφωση του egg από έναν διαφορετικό συγγραφέα θα το αλλάξει αυτό.',
        'force_outgoing_ip' => "Εξαναγκάζει όλη την εξερχόμενη κίνηση δικτύου να έχει το Source IP NATed στην IP του κύριου allocation του διακομιστή. \nΑπαιτείται για να λειτουργούν σωστά ορισμένα παιχνίδια όταν το node έχει πολλές δημόσιες διευθύνσεις IP. \nΗ ενεργοποίηση αυτής της επιλογής θα απενεργοποιήσει το εσωτερικό δίκτυο για οποιουσδήποτε διακομιστές χρησιμοποιούν αυτό το egg, προκαλώντας τους να μην μπορούν να έχουν εσωτερική πρόσβαση σε άλλους διακομιστές στο ίδιο node.",
        'startup' => 'Η προεπιλεγμένη εντολή εκκίνησης που θα χρησιμοποιηθεί για νέους διακομιστές χρησιμοποιώντας αυτό το egg.',
        'docker_images' => 'Τα docker images που είναι διαθέσιμα σε διακομιστές με αυτό το egg.',
    ],
];
