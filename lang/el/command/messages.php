<?php

return [
    'user' => [
        'search_users' => 'Εισάγετε όνομα χρήστη, αναγνωριστικό χρήστη ή διεύθυνση ηλεκτρονικού ταχυδρομείου',
        'select_search_user' => 'Αναγνωριστικό χρήστη για διαγραφή (Πατήστε \'0\' για επαναναζήτηση)',
        'deleted' => 'Ο χρήστης διαγράφηκε επιτυχώς από το τον πίνακα ελέγχου.',
        'confirm_delete' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτόν το χρήστη από τον πίνακα ελέγχου;',
        'no_users_found' => 'Δεν βρέθηκαν χρήστες για τον όρο αναζήτησης που παρέχεται.',
        'multiple_found' => 'Βρέθηκαν πολλαπλοί λογαριασμοί για αυτόν τον χρήστη, αδυναμία διαγραφής του χρήστη λόγω της σημαίας --no-interaction.',
        'ask_admin' => 'Είναι αυτός ο χρήστης διαχειριστής;',
        'ask_email' => 'Διεύθυνση ηλεκτρονικού ταχυδρομείου',
        'ask_username' => 'Όνομα χρήστη',
        'ask_name_first' => 'Όνομα',
        'ask_name_last' => 'Επώνυμο',
        'ask_password' => 'Κωδικόs πρόσβασης',
        'ask_password_tip' => 'Αν θέλετε να δημιουργήσετε ένα λογαριασμό με τυχαίο κωδικό πρόσβασης μέσω ηλεκτρονικού ταχυδρομείου στο χρήστη, εκτελέστε ξανά αυτή την εντολή (CTRL+C) και περάστε τη σημαία `--no-password`.',
        'ask_password_help' => 'Οι κωδικοί πρόσβασης πρέπει να έχουν μήκος τουλάχιστον 8 χαρακτήρων και να περιέχουν τουλάχιστον ένα κεφαλαίο γράμμα και αριθμό.',
        '2fa_help_text' => [
            'Αυτή η εντολή θα απενεργοποιήσει τον έλεγχο ταυτότητας 2 παραγόντων για το λογαριασμό του χρήστη αν είναι ενεργοποιημένο. Αυτό θα πρέπει να χρησιμοποιηθεί ως εντολή ανάκτησης λογαριασμού μόνο εάν ο χρήστης είναι κλειδωμένος από το λογαριασμό του.',
            'Αν αυτό δεν είναι αυτό που θέλατε να κάνετε, πατήστε CTRL+C για να βγείτε από αυτή τη διαδικασία.',
        ],
        '2fa_disabled' => 'Ο έλεγχος ταυτότητας 2-παραγόντων έχει απενεργοποιηθεί για :email.',
    ],
    'schedule' => [
        'output_line' => 'Αποστολή εργασίας για την πρώτη εργασία στο `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Διαγραφή αρχείου αντιγράφου ασφαλείας υπηρεσίας :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Η αίτηση ανακατασκευής για το ":name" (#:id) στο node ":node" απέτυχε με σφάλμα: :message',
        'reinstall' => [
            'failed' => 'Η αίτηση επανεγκατάστασης για ":name" (#:id) στο node ":node" απέτυχε με σφάλμα: :message',
            'confirm' => 'Πρόκειται να επανεγκαταστήσετε ενάντια σε μια ομάδα διακομιστών. Θέλετε να συνεχίσετε;',
        ],
        'power' => [
            'confirm' => 'Πρόκειται να εκτελέσετε μια :action κατά :count διακομιστές. Θέλετε να συνεχίσετε;',
            'action_failed' => 'Το αίτημα ενέργειας για ":name" (#:id) στο node ":node" απέτυχε με σφάλμα: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Διακομιστής SMTP (π.χ. smtp.gmail.com)',
            'ask_smtp_port' => 'Θύρα SMTP',
            'ask_smtp_username' => 'Ονόμα χρήστη SMTP',
            'ask_smtp_password' => 'Κωδικός Πρόσβασης SMTP',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_endpoint' => 'Mailgun Endpoint',
            'ask_mailgun_secret' => 'Μυστικό Mailgun',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Ποιος οδηγός θα πρέπει να χρησιμοποιηθεί για την αποστολή emails;',
            'ask_mail_from' => 'Τα μηνύματα ηλεκτρονικού ταχυδρομείου πρέπει να προέρχονται από',
            'ask_mail_name' => 'Όνομα από το οποίο θα εμφανίζεται στο email',
            'ask_encryption' => 'Μέθοδος κρυπτογράφησης για χρήση',
        ],
    ],
];
